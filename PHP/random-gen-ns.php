<?php
// Enter your code here, enjoy!

$n = 1000;
$samples = 500;

for($s = 0 ; $s < $samples; $s++){
	$array = array();
	for($i = 0 ; $i < $n; $i++){
		array_push($array, mt_rand()/getrandmax());
	}

	$name = "./ns-samples/"."php-rand-ns".($s+1).".json";
	$file = fopen($name, "w");
	fwrite($file, json_encode($array));
}