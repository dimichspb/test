<?php
class contacts{
	function home($constant){
		include 'inc/'.$constant['top3'].'/return.php';
		return $returnArray;
	}
};