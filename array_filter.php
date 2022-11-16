<?php
	// $numbers = range(1, 20);

	// function odd($val){
	// 	return $val%2==1;
	// }

	// echo "<pre>";
	// 		print_r(array_filter($numbers,"odd"));
	// echo "</pre>";
	
	function filterByKey($k){
		return($k=='b' || $k=='c');
	}
	
	$countries = ["a"=>"Bangladesh","b"=>"India","c"=>"pakistan"];

	print_r(array_filter($countries,"filterByKey",ARRAY_FILTER_USE_KEY));