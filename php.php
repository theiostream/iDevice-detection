<?php

function getCurrentMachine() {
	$ua = $_SERVER['HTTP_USER_AGENT'];
	
	if (preg_match('/iPad/', $ua)||preg_match('/iPhone/', 
$ua)||preg_match('/iPod/', $ua)) return "iPhoneOS";
	else if (preg_match('/Macintosh/', $ua)) return "MacOSX";
	else if (preg_match('/MSIE/', $ua)||preg_match('/Windows/', 
$ua)) return "Windows";
	else return "Unknown platform.";
}

echo(getCurrentMachine());

?>
