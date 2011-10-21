<?php
//TODO
// SYSTEM VERSION
// DONE BY @elibyy 2011 ENJOY! :D
// fully tested on MSIE 8.0 || Chrome 14.0.835.202 || Safari 5.1.1 || Safari 5.1 Mobile || Firefox 7.0.1
function getCurrentMachine() {
	$ua = $_SERVER['HTTP_USER_AGENT'];
	function get_os(){
	$ua = $_SERVER['HTTP_USER_AGENT'];
	$windows = stristr($ua,"Windows")? $os = "Windows " : false;
	$android = stristr($ua,"Android") ? $os = "Android" : false;
	$linux = stristr($ua,"Linux")? $os = "Linux " : false;
	$mac = stristr($ua,"Mac")? $os = "Mac " : false;
	$iphone = stristr($ua,"iPhone") ? $os = "iPhone" : false;
	$ipod = stristr($ua,"iPod") ? $os = "iPod" : false;
	$ipad = stristr($ua,"iPad") ? $os = "iPad" : false;
	$unknown = !stristr($ua,"Windows") && !stristr($ua,"Mac") && !stristr($ua,"Linux") ? $os = "Unkown Platform " : null;
	return $os;
	}
	function getBrowser(){
	$uas = $_SERVER['HTTP_USER_AGENT'];
	$mobile = stristr($uas,"Mobile") ? $ua = "Mobile " : $ua = "";
	$chrome = stristr($uas,"Chrome") ? $ua .= "Chrome " : 
	$ie = stristr($uas,"MSIE") ? $ua .= "MSIE " :
	$firefox = stristr($uas,"Firefox") ? $ua .= "Firefox " : 
	$safari = stristr($uas,"Safari") ? $ua .= "Safari " :false;
	$safari = stristr($uas,"Opera") ? $ua .= "Opera " :false;
	$safari = stristr($uas,"Googlebot") ? $ua .= "GoogleBot " :false;
	return $ua;
	}
	function get_browser_version(){
	$ua = $_SERVER['HTTP_USER_AGENT'];
	$mobile = stristr($ua,"Mobile") ? true : false;
	$mobile = $mobile ? stristr($ua,"Version") : false;
	$ver = explode("/",$mobile);
	$mob_ver = isset($ver[1]) ? substr($ver[1],0,3) :null ;
	$b = trim(getBrowser());
	$ver = isset($b) ? explode($b,$ua) : null;
	$ver = isset($ver[1]) ? explode("/",$ver[1]) : null;
	$ver = isset($ver[1]) ? explode(" ",$ver[1]) :null ;
	$ver = $ver[0];
	if(stristr($ua,"MSIE")){ // MSIE has a diff string construct 
	$ver = isset($b) ? explode($b,$ua) : null;
	$ver = isset($ver[1]) ? explode("/",$ver[1]) : null;
	$ver = isset($ver[0]) ? explode(";",$ver[0]) : null;
	$ver = $ver[0];
	}
	if(stristr($ua,"Safari") && stristr($ua,"Version") && !stristr($ua,"Mobile")){
	$ver = stristr($ua,"Version");
	$ver = explode(" ",$ver);
	$ver = str_replace("Version/","",$ver[0]);
	}
	echo " ".$mob_ver." ";
	echo " ".$ver." ";
}
	echo getBrowser();
	get_browser_version();
	echo get_os();
}
getCurrentMachine();
?>
