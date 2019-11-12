<?php
$phonenumber = $_POST['fonnum'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://0.freebasics.com/phone/entry/?encrypted_next=AavOCQDcZwCbUyRixZ6Qt57qqe1AidDpyDIqIJGoqsjRavd2ksDbWgnWeBb1hBP6gcYYkdKyMqzsiANMJQvagFNDiPnKCsXtNn3QZPNq5QvMHOWkB9RLkNsMAN5AAFg8joYxNUQHmRbPD5STnNHgizsbryA7Rr5ALoOqUZM5nLL2iYXmC98WTneS6RAmVUMZ2gAXgVzj2kJfb4xpa8VfKM-9WTBrY8Efdyf7FKQDaVqfPewWtj3wxa-VZFCIwM-fybVPHqgDQSvSoxCgudxJsM_Lff4Q&welcome&_h=1&iorg_app_id=28&phone=AbRC0w82jwg3YMST-o-OGyVnUQ_rzFZPu4rvN8YgVKe6MO9kpcR5FBUIVHtZq9xUjERSE5I_kg');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "fb_dtsg=AQG6pWfp6zeC%3AAQFRDeGYlO83&jazoest=22007&phone=$phonenumber&encrypted_next=https%3A%2F%2F0.freebasics.com%2Fsms%2Fwelcome%2F%3Fencrypted_next%3DAauS5qNw2tX6MW0ldbcwd3rKwJZ6LZ_YT7CvaXgCYDZEcd0p5Qv4YKKOjH6ry1yIx3Pb0hoDJur5ieD7wXKMpC5BcQ%26welcome%26_h%3D1%26iorg_app_id%3D28");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Mobile Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
$headers[] = 'Referer: https://0.freebasics.com/phone/entry/?encrypted_next=AavOCQDcZwCbUyRixZ6Qt57qqe1AidDpyDIqIJGoqsjRavd2ksDbWgnWeBb1hBP6gcYYkdKyMqzsiANMJQvagFNDiPnKCsXtNn3QZPNq5QvMHOWkB9RLkNsMAN5AAFg8joYxNUQHmRbPD5STnNHgizsbryA7Rr5ALoOqUZM5nLL2iYXmC98WTneS6RAmVUMZ2gAXgVzj2kJfb4xpa8VfKM-9WTBrY8Efdyf7FKQDaVqfPewWtj3wxa-VZFCIwM-fybVPHqgDQSvSoxCgudxJsM_Lff4Q&welcome&_h=1&iorg_app_id=28&phone=AbRC0w82jwg3YMST-o-OGyVnUQ_rzFZPu4rvN8YgVKe6MO9kpcR5FBUIVHtZq9xUjERSE5I_kg';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Mobile Safari/537.36';
$headers[] = 'Sec-Fetch-Mode: same-origin';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Cookie: datr=Gx47XTZtDADRvxkO8IRntiMB; fbs_userid=2377476515641365';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
?>
