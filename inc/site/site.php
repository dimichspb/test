<?php
class Site{
	function body(){
		return[
				'body'=>'inc/site/body.html'
		];
	}
	function home(){	
		return $returnArray=[
			'title'=>'inc/home/title.html',
			'header'=>'inc/home/header.html',
			'content'=>'inc/home/startMenu.html',
			'parent'=>'inc/home/parent.html',
			'const'=>'inc/home/const.php'
		];	
	}
	function contacts(){	
		include 'inc/contacts/return.php';	
		return $returnArray;
	}
	function page404(){
		include 'inc/errors/errors.php';
		return [
		'content'=>'inc/errors/404.html',
		'title'=>'inc/errors/title.html',
		'header'=>'inc/errors/header.html',
		'parent'=>'inc/errors/parent.html'
		];
	}
}	