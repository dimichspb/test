<?
class site{
	function body(){
		return[
				'viewFile'=>'inc/body.html'
		];
	}
	function home(){
		return[
				'title'=>'inc/home/title.html',
				'header'=>'inc/home/header.html',
				'startMenu'=>'inc/home/startMenu.html'
		];
	}
	function photoshop($curURL){
		return [
			"title"=>"inc/$curURL/title.html",
			"header"=>"inc/$curURL/header.html",
			"content"=>"inc/$curURL/content.html"
		];	
	}
}