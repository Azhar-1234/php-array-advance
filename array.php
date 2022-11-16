<?php 

	// array creation way:
	// 1.php array function array()
	// 2.curley baces[]
	
	$students = array('abdullah','muhammad','ahmad');
	$river = ['padma','meghna','zamuna'];

	
	/*---
		php array types based on index
			 1. Numerical/Enumarated array
			 2. Associative array
			 3. Hybrid array
	---*/
	//numerical array
	$numbers = ['one','two','three'];
	print_r($numbers);
	//hybrid array
	$letters = ['a'=>'A','b','c'];
	print_r($letters);
	$numbers2 = ["a"=>"one","b"=>"two","c"=>"three"];
		/*
		array 2 types based on Dimension
			1.Single Array
			2.Nasted Array
	*/
	echo "<hr>";
	$class = ["a"=>["abdullah",'muhammad','ahmad'],"b"=>['maimuna','maisara','mahi']];
	foreach ($numbers2 as &$val) {
		$val=strtoupper($val)."<br>";
	}
	print_r($numbers2);
	
