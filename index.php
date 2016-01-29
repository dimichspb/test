<?php
	include "lib/const.php";
	include "lib/function.php";
	include "lib/classes.php";
	// все подключения неплохо вынести в отедельный файл и подключать только его. 
	// Тогда, при необходимости подключения стандартного набора файлов в других скриптах точно ничего не упустишь
	header('Content-Type: text/html; charset=utf-8');
	// так ли обязательно всегда задавать хедер?
	$path="inc";
	// пути, также, неплохо задавать в отдельном конфигурацинном файле
	$primo=new site;
	/**
	 * 1. Почитай про статические методы
	 * 2. Посмотри паттерны программирования на предмет такого паттерна, как Одиночка
	 * 
	 * Используя этот паттерн можно избежать создания основных классов несколько раз - таких как основной класс приложения, 
	 * класс для работы с базой данных и прочее. Тогда вызывать методы основого класса можно будет примерно так:
	 * Site::run();
	 * 
	 * Ну а для начала - классы принято писать с большой буквы, объекты называть более понятно, и при создании объектов ставить две скобки
	 * 
	 * примерно так:
	 * $siteObject = new Site();
	 *
	
$url=explode("/", trim($_SERVER['REQUEST_URI'], "/")); // Что означает третий параметр?
$id=$url['0']; // не очень понятно, что имеено попадет в переменную $id. Доступ к элементам массива осуществляется через индекс
$item=$url['1']; // индекс - это или порядковый номер элемента (если индекс - число), или наименование элемента, если это строка
// Такие манипуляции со строкой запроса принято выделять в отдельный класс - роутер.

$site=new site;

// основной класс приложения зачем то создается повторно

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
				// зачем с этом случае создается объект $square???
				
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

/**
 * Вообще, роутер реализуется немного по-другому
 * 
 * const MAINPAGE_ROUTE = 'info/mainpage';  // задаем маршрут к главной стрнице
 * const PAGENOTFOUND_ROUTE = 'info/notfound'; // задаем маршрут к странице 404
 * 
 * 
 * $route = isset($_SERVER['REQUEST_URI'])? $_SERVER['REQUEST_URI']: DEFAULT_ROUTE; // если строка в браузере задана - используем ее, если нет - маршрут к главной стрнице
 * 
 * $urlPath = parse_str($route, PHP_URL_PATH); // извлекаем путь
 * $urlQuery = parse_str($route, PHP_URL_QUERY); //  извлекаем строку параметров
 *  
 * list($controllerName, $methodName) = explode('/', $urlPath); // имя контроллера - первая часть пути, имя метода - вторая
 * $paramsArray = $urlQuery? parse_str($urlQuery): []; // если строка параметров задана - парсим ее в массив, если нет - пустой массив
 * 
 * 
 * if (!method_exists($controllerName, $methodName)  // если метод в контроллере не существует
 *     || !is_callable(array($controllerName, $methodName))) {  // или не может быть вызван
 *	list($controllerName, $methodName) = explode('/', PAGENOTFOUND_ROUTE); // то используем контроллер и метод страницы 404
 * } 
 *
 * call_user_func_array(				// запускаем метод контроллера
 * 	array($controllerName, $methodName),		// указывая первым параметром массив - контроллер,метод
 * 	$paramsArray					// и вторым параметром - массив параметров запроса
 * );
 * 
 * 
 * 
 * а уже в методах контроллеров пусть вызывается все что нужно
 * 
 * 

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

<?php
/**
 * ну и, конечно, html код в конце скрипта никуда не годится...
