<?php

$myfile = fopen("location.txt", "w");

$txt = "Latitude: " . $_GET["Latitude"] . "\nLongitude: " . $_GET["Longitude"] . "\nIP: " . $_SERVER["REMOTE_ADDR"] . "\nSysInfo" . $_GET["SysInfo"];
fwrite($myfile, $txt);
fclose($myfile);
?>
