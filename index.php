<?php
header( 'Location: REDIRECTED WEBSITE's ADDRESS HERE') ;
$ip = $_SERVER['REMOTE_ADDR'];
$fo = fopen("ip.txt", "a");
$fw = fwrite($fo, "$ip\n");
fclose($fo);
?>
