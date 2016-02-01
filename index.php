<?php
	require "lib/includnik.php";
//	header('Content-Type: text/html; charset=utf-8'); перенесено в боди
	$siteObject=new Site();
	$url=trim($_SERVER['REQUEST_URI'], "/");

$route= (!empty($url))	?	$route=explode("/", $url)	:	$route=explode("/", 'site/home'); 
$id=$route[0]; 
$item=$route[1];	
if (empty($item)) $item='home';												 
if (!class_exists($id) || (!method_exists($id, $item)))  {$id='site'; $item='page404';};					 
//echo $id;
$contentObject=new $id;
$header=$contentObject->$item()['header'];
$title=$contentObject->$item()['title'];
$content=$contentObject->$item()['content'];
$parent=$contentObject->$item()['parent'];



/*	
if (!empty($id)) //если строка адреса пустая
{
	if (class_exists($id)) //если класс существует
	{
		$square= new $id;
		if (!empty($item)) //если есть второй параметр в строке адреса
		{
			if (method_exists($id, $item))
			{ //если метод  второму параметру существует
				$title=$square->$item()['title'];
				$header=$square->$item()['header'];
				$content=$square->$item()['content'];
				$parent=$square->$item()['parent'];				
			}
			else //если метода по второму параметру несуществует
			{
				include 'inc/errors/return.php';
			}
		}
		else  //если второго параметра нету
		{ 			
			$title=$square->$id()['title'];
			$header=$square->$id()['header'];
			$content=$square->$id()['content'];
			$parent=$square->$id()['parent'];
		}
	}
	else	//если первого параметр есть но метода нету
	{	
		include 'inc/errors/return.php';
	}
}
else //вывод если параметров нету, главная страница
{
	$title=$siteObject->home()['title'];
	$header=$siteObject->home()['header'];
	$parent=$siteObject->home()['parent'];
	$content=$siteObject->home()['content'];
}
*/
?>
<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title><? include $header; ?></title>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/dopstyle.css" rel="stylesheet">
 </head>
 <body>
	<?
		include $siteObject->body()['viewFile'];
	?>
	
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>