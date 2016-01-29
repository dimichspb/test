<?php
	include "lib/const.php";
	include "lib/function.php";
	include "lib/classes.php";
	header('Content-Type: text/html; charset=utf-8');
	$path="inc";
	$primo=new site;
$url=explode("/", trim($_SERVER['REQUEST_URI'], "/"));
$id=$url['0'];
$item=$url['1'];
$site=new site;
//echo $id."<-->".$item";
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
				$title=$site->page404()['title'];
				$header=$site->page404()['header'];
				$content=$site->page404()['content'];
				$parent=$site->page404()['parent'];	
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
		$title=$site->page404()['title'];
		$header=$site->page404()['header'];
		$content=$site->page404()['content'];
		$parent=$site->page404()['parent'];
	}
}
else //вывод если параметров нету, главная страница
{
	$title=$site->home()['title'];
	$header=$site->home()['header'];
	$parent=$site->home()['parent'];
	$content=$site->home()['content'];
}
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
		include $site->body()['viewFile'];
	?>
	
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </body>
</html>