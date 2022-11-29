<?php
$n = 1000;
$samples = 1000;

for($s = 0 ; $s < $samples; $s++){
	$array = array();
	for($i = 0 ; $i < $n; $i++){
		array_push($array, random_int(0,PHP_INT_MAX)/PHP_INT_MAX);
	}

	$name = "./training/sec-samples/php-rand-sec".($s+1).".json";
	$file = fopen($name, "w");
	fwrite($file, json_encode($array));
}