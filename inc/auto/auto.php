<?php
class auto{
	function home($constant){
		include 'inc/'.$constant['square1'].'/return.php';
		return $returnArray;
	}
	function osago($constant){
		include 'inc/'.$constant['square1'].'/'.$constant['square1_1'].'/return.php';
		return $returnArray;
	}
	function kasko($constant){
		include 'inc/'.$constant['square1'].'/'.$constant['square1_2'].'/return.php';
		return $returnArray;
	}
	function dsago($constant){
		include 'inc/'.$constant['square1'].'/'.$constant['square1_3'].'/return.php';
		return $returnArray;
	}
	function greencard($constant){
		include 'inc/'.$constant['square1'].'/'.$constant['square1_4'].'/return.php';
		return $returnArray;
	}
};