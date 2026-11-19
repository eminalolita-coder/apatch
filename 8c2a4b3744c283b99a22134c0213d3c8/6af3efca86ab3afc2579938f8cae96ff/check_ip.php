<?php
$user_ip = $_SERVER['REMOTE_ADDR'];
$file = $_GET['file'];
$allowed_ips = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$ip_allowed = in_array($user_ip, $allowed_ips);
echo json_encode(['allowed' => $ip_allowed]);
?>
