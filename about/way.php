<?php

// echo ("Content-Type: text/plain\n\n");
//	echo "<a href=/map/index.html>Cсылка на карту сайта</a><br />";
//	echo "\$_SERVER ['HTTP_REFERER']", 
//		  $_SERVER ['HTTP_REFERER']
//	 echo $_SERVER ['HTTP_REFERER']
//   echo $_SERVER ['SCRIPT_FILENAME']
//   $filename = $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Главная >>".$_SERVER["REQUEST_URI"];
echo "<br />";
$file = ($_SERVER["REQUEST_URI"]);
echo $file;
echo "<br />";
// $read=file_get_contents("http://".$_SERVER['SERVER_NAME'].($_SERVER['REQUEST_URI']));
// $read = file_get_contents("http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
// echo $title;

 echo "<br />";
 $read = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
 echo $read;
 
 echo "<br />"; 
// ob_start();
// $read1 = file_get_contents("http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
// $filename = "http://promen.ru/index3.html";
// $fd = fopen($filename, "r");
// $read1 = fread($fd, 1000);
// $read1 = file_get_contents("http://promen.ru/conftg.php");
// ob_clean();
// fclose($fd);
// echo $read1; 
 
// echo "<br />";
// $tit = $PHP_TITLE;
// echo $tit;

// echo "<br />";

// $content = file("http://promen.ru/news/index.html");
// echo $content;
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// Warning: fopen(http://promen.ru/news/index.html) [function.fopen]: failed to open stream: HTTP request failed! in 
// Z:\home\promen.ru\www\way.php on line 27

// Fatal error: Maximum execution time of 30 seconds exceeded in Z:\home\promen.ru\www\way.php on line 27
 echo "<br />"; 


	

// $BadTitle=preg_replace("#.*<title>(.+)<\/title>.*#isU","\\1",preg_replace("#<\?(php)?(.+)\?".">#iUs","",@file_get_contents("
// http://promen.ru/about/index.html")));
// if ($BadTitle)
//   echo "<a href='{$_SERVER['REQUEST_URI']}'>$BadTitle</a>";
?>


