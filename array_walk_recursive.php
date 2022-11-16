<?php
	$fruits =[
	 	["a"=>"apple","b"=>"orange","c"=>"mango"],
		["lemon"=>"sour"]
	];

	function test_print($item,$key){
		echo "$key holds $item \n";
	}
	echo "<pre>";
		array_walk_recursive($fruits, "test_print");
	echo "</pre>";