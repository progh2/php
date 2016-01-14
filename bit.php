<?php
header("Content-Type: text/html; charset=UTF-8");

$url = $_GET['url'];

$urls['fb'] = "http://www.facebook.com/";
$urls['jaurim'] = "http://www.jaurim.com/";
$urls['mirim'] = "http://www.e-mirim.hs.kr/";
$urls['and'] = "http://dev.android.com/";

if(array_key_exists( $url, $urls )){
	header("Location: ". $urls[$url] );
	exit();
}else{
	echo $url. "는 등록되어 있지 않습니다.";
}


?>
