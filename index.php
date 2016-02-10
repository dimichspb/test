<?php
require 'lib/includnik.php';

$url=trim($_SERVER['REQUEST_URI'], '/');
$route= (!empty($url))	?	$route=explode('/', $url)	:	$route=explode('/', 'site/home'); 
$id=$route[0]; 
$item=$route[1];	
if (empty($item)) $item='home';												 
if (!class_exists($id) || (!method_exists($id, $item)))  {$id='site'; $item='page404';};		 
//echo $id;
function __autoload($id){
	@include 'inc/'.$id.'/'.$id.'.php';
}
$siteObject=new Site();
$contentObject=new $id();
$returnArray=$contentObject->$item($constant);
include $siteObject->body()['body'];