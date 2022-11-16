<?php 
	
	function keyComp($a,$b){
		if ($a===$b) {
			return 0;
		}
		return ($a>$b)?-1:1;
	}
	function valComp($a,$b){
		if ($a===$b) {
			return 0;
		}
		return ($a>$b)?-1:1;
	}
	$a = ["a"=>"blue","c"=>"green"];
	$b = ["b"=>"blue","gray","C"=>"Green"];

	$result = array_uintersect_uassoc($a,$b,"keyComp","valComp");
	print_r($result);
