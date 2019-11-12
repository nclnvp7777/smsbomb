<?php
function randStr($length) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
$lit = randStr(8);
$phonenumber = $_POST['fonnum'];
$exec = file_get_contents("https://mcdelivery.com.ph/send-sms-otp/$lit@$lit.com/$phonenumber");
if($exec == "OTP Sent!"){
    echo "API Done";
}
else{
    echo "API Dead";
}
?>