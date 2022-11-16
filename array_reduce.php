<?php
	$a = [3,2,1,5,6];

	// echo array_reduce($a, function($carry,$item){
	// 	 $carry*=$item;
	// 	 return $carry;
	// },1);

	// echo "<pre>";
	// 	// print_r(array_chunk($a, 2,true));
	// 	print_r(array_slice($a, 2));

	$students = [
		['name'=>'azhar','age'=>16,'city'=>'dhaka'],
		['name'=>'abdullah','age'=>12,'city'=>'feni'],

	];
	print_r(array_column($students, 'name'));

	$a = ['green','red'];
	$b = ['orange','green'];
	// $c = array_combine($a,$b);
	// print_r($c);

	// array_push($a, "black","white","gray");
	array_pop($a);
	print_r($a);