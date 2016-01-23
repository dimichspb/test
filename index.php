<?php
include "lib/const.php";
$path="inc/";
$curURL=(array_pop(explode("=",$_SERVER['REQUEST_URI'])));
include "lib/classGr.php";
$primo=new site;
header('Content-Type: text/html; charset=utf-8');		
$id=strtolower(trim(strip_tags($_GET['id'])));
switch ($id) {
	case "$curURL": 
					//echo $curURL;
					$header=$primo->photoshop($curURL)['header']; 
					$title=$primo->photoshop($curURL)['title']; 
					$content=$primo->photoshop($curURL)['content']; 
					break;
	default: 
			$title=$primo->home()['title'];
			$header=$primo->home()['header'];
			$content=$primo->home()['startMenu'];
}
?>
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title><? include $header; ?></title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/dopstyle.css" rel="stylesheet">
 </head>
 <body>
	<?
		//echo $curURL;
	//	echo $_SERVER['REQUEST_URI'];
		include $primo->body()['viewFile'];
	?>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>