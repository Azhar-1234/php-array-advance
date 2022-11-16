<?php
	$books = ['a','b','d','c'];
	$version = [1,4,5,3];
	$publishing = [19,22,20,21];

	array_multisort($books,$version,$publishing);

	echo "<pre>";
	print_r($books);
	print_r($version);
	print_r($publishing);