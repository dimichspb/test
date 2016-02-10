<?php
class medicine{
	function home($constant){
		include 'inc/'.$constant['square2'].'/return.php';
		return $returnArray;
	}
	function oms($constant){
		include 'inc/'.$constant['square2'].'/'.$constant['square2_1'].'/return.php';
		return $returnArray;
	}
	function dms($constant){
		include 'inc/'.$constant['square2'].'/'.$constant['square2_2'].'/return.php';
		return $returnArray;
	}
	function unhappy($constant){
		include 'inc/'.$constant['square2'].'/'.$constant['square2_3'].'/return.php';
		return $returnArray;
	}
}