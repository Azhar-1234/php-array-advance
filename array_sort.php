<?php
	// $a = [3,2,32,1,0];

	// sort($a);
	// print_r($a);

	// $b = ['a','e','h','b'];
	// sort($b);
	// print_r($b);

	function cmpasc($element1,$element2){
			if ($element1==$element2) {
				return 0;
			}return ($element1<$element2)?-1:1;
	}

	$a=$b=["a"=>1,"c"=>3,"b"=>2];
	usort($a, "cmpasc");
	uasort($a, "cmpasc");
	print_r($a);