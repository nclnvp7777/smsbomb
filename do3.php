<?php
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
$phonenumber = substr($_POST['fonnum'], 1);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.fleetshare.ph/rider/signup');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$result = curl_exec($ch);
$setcook = get_string_between($result,  "Set-Cookie: 1484820267=a%3A4%3A", "; expires=");
$setcook2 = get_string_between($result,  "Set-Cookie: PHPSESSID=", "; path=/");
$init = curl_init();
curl_setopt($init, CURLOPT_URL, 'http://www.fleetshare.ph/site/sms_twilio/send_otp');
curl_setopt($init, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($init, CURLOPT_POST, 1);
curl_setopt($init, CURLOPT_POSTFIELDS, "otp_phone=$phonenumber&phone_code=%2B63");
curl_setopt($init, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = 'Connection: keep-alive';
$headers[] = 'Accept: application/json, text/javascript, */*; q=0.01';
$headers[] = 'Origin: http://www.fleetshare.ph';
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.87 Safari/537.36';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Referer: http://www.fleetshare.ph/rider/signup';
$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
$headers[] = 'Cookie: 1484820267=a%3A4%3A$setcook; PHPSESSID=$setcook2';
curl_setopt($init, CURLOPT_HTTPHEADER, $headers);
$do = curl_exec($init);
?>