<?php
session_start();

$user_ip = $_SERVER['REMOTE_ADDR'] ?? '';

$hub = $_SESSION['id5'] ?? '';
$dir = $hub !== ''
    ? __DIR__ . '/../' . $hub . '/redirect/'
    : '';

if ($dir === '' || !is_dir($dir)) {
    foreach (glob(dirname(__DIR__) . '/*/redirect', GLOB_ONLYDIR) ?: [] as $candidate) {
        $dir = $candidate . '/';
        break;
    }
}

function isAllowed(string $path, string $ip): bool {
    if ($ip === '' || !is_readable($path)) return false;
    $list = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return in_array($ip, $list, true);
}

header('Content-Type: application/json; charset=utf-8');

if (!empty($_GET['all'])) {
    $out = [];
    foreach (glob($dir . '*.txt') ?: [] as $p) {
        $out[basename($p, '.txt')] = isAllowed($p, $user_ip);
    }
    echo json_encode($out);
    exit;
}

$name = basename((string)($_GET['file'] ?? ''));
if ($name === '' || !preg_match('/^[a-zA-Z0-9_-]+(\.txt)?$/', $name)) {
    echo json_encode(['allowed' => false]);
    exit;
}
if (!str_ends_with($name, '.txt')) $name .= '.txt';

echo json_encode(['allowed' => isAllowed($dir . $name, $user_ip)]);