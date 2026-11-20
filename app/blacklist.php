<?php
session_start();

function blacklist_ip($ip) {
    $file = '../bl.txt';
    $current = file_get_contents($file);
    $current .= $ip . "\n";
    file_put_contents($file, $current);
}

$ip = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['bot']) && !empty($_POST['bot'])) {
    blacklist_ip($ip);
    die("HTTP 404 Not Found");
}