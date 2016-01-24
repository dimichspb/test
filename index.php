<?php
	include "lib/const.php";
	include "lib/function.php";
	$path="inc/";
	$curURL=(array_pop(explode("=",$_SERVER['REQUEST_URI'])));
//$curURL2=parse_url($_SERVER['REQUEST_URI']);
	include "lib/classGr.php";
	$primo=new site;
	header('Content-Type: text/html; charset=utf-8');		
	$id=strtolower(trim(strip_tags($_GET['id'])));
/*	print_r ($curURL2);
	echo "<br>curURL = ".$curURL;
*/	
switch ($id) {	
	case "$curURL":
					$header=$primo->photoshop($curURL)['header']; 
					$title=$primo->photoshop($curURL)['title']; 
					$content=$primo->photoshop($curURL)['content']; 
					$parent=$primo->photoshop($curURL)['parent'];
					break;				
	default: 
			$title=$primo->home()['title'];
			$header=$primo->home()['header'];
			$content=$primo->home()['startMenu'];
			$parent=$primo->home()['parent'];			
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
//	print_r(parse_url($_SERVER['REQUEST_URI']));
		include $primo->body()['viewFile'];
	?>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>