<?php 
	class privet {
		var $name;
		function setName($name){
			$this->name=$name;
		}
		function getName(){
			 return $this->name;
		}
	};
	
	$obj= new privet;
	$obj->setName('Jenia2');
	
	echo $obj->getName();
	
	$haystack = '00/gr/examples';
	$needle   = '/';
echo "<br><br>";
$pos = strripos($haystack, $needle);
echo $pos;

$keywords = explode("/", "00/gr/examples");
print_r($keywords);