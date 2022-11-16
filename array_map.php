<?php
	function cube($n){
		return $n*$n*$n;
	}

	$numbers = [1,2,3,4,5];

	$newNumbers = array_map("cube",$numbers);
	echo "<pre>";
		print_r($newNumbers);
	echo "</pre>";

	$english = ["Home","About Us","FAQ"];
	$spanish = ["Inicio"];
	function showBangla($n,$m){
		return "$n=$m";
	}

	echo "<pre>";
		print_r(array_map("showBangla", $spanish, $english));
	echo "</pre>";