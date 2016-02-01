<?
class photoshop1{
	function home(){
		include "inc/".square1."/return.php";
		return $returnArray;
	}
	function jpg(){
		include "inc/".square1."/".square1_1."/return.php";
		return $returnArray;
	}
	function bmp(){
		include "inc/".square1."/".square1_2."/return.php";
		return $returnArray;
	}
	function psd(){
		include "inc/".square1."/".square1_3."/return.php";
		return $returnArray;
	}
};
class photoshop2{
	function home(){
		include "inc/".square2."/return.php";
		return $returnArray;
	}
	function wav(){
		include "inc/".square2."/".square2_1."/return.php";
		return $returnArray;
	}
	function mp3(){
		include "inc/".square2."/".square2_2."/return.php";
		return $returnArray;
	}
	function ogg(){
		include "inc/".square2."/".square2_3."/return.php";
		return $returnArray;
	}
}
class Site{
	function body(){
		return[
				'viewFile'=>'inc/body.html'
		];
	}
	function home(){
		return [
			"title"=>"inc/home/title.html",
			"header"=>"inc/home/header.html",
			"content"=>"inc/home/startMenu.html",
			"parent"=>"inc/home/parent.html"
		];	
	}
	function page404(){
		include "inc/errors/errors.php";
		return [
		'content'=>"inc/errors/404.html",
		'title'=>"inc/errors/title.html",
		'header'=>"inc/errors/header.html",
		'parent'=>"inc/errors/header.html"
		];
	}	
}