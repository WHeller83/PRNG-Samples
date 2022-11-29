<?php
$n = 1000;
$samples = 500;

for($s = 0 ; $s < $samples; $s++){
	$array = array();
	for($i = 0 ; $i < $n; $i++){
		array_push($array, rand()/getrandmax());
	}

	$name = "./testing/ns-samples/php-rand-ns".($s+1).".json";
	$file = fopen($name, "w");
	fwrite($file, json_encode($array));
}