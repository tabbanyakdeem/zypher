<?php 


    $write1=" From Ip  : ";
    $write2=" Visit On : ";
    $Sam1 =date("D,M,d,Y-g:ia");
    $ip = getenv("REMOTE_ADDR");
    $J7 = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=$ip");
    $country = $J7->geoplugin_countryName ; 
    @ini_set('display_errors', 0);
    error_reporting(E_ALL ^ E_NOTICE);
    date_default_timezone_set('GMT');
    file_put_contents('vu.txt', $write.$country.$write1.$ip.$write2.$Sam1 . PHP_EOL, FILE_APPEND);
	
?>