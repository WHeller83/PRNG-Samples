<?php
$n = 1600;
$training_samples = 1000;
$testing_samples = 500;


# ==============================================
# ============== Training Samples ==============
# ==============================================
for($s = 0 ; $s < $training_samples; $s++){
	$array = array();
	for($i = 0 ; $i < $n; $i++){
		array_push($array, rand()/getrandmax());
	}

	$name = "../data/training/php-ns-samples/".($s+1).".json";
	$file = fopen($name, "w");
	fwrite($file, json_encode($array));
}

# ==============================================
# ============== Testing Samples ==============
# ==============================================
for($s = 0 ; $s < $testing_samples; $s++){
	$array = array();
	for($i = 0 ; $i < $n; $i++){
		array_push($array, rand()/getrandmax());
	}

	$name = "../data/testing/php-ns-samples/".($s+1).".json";
	$file = fopen($name, "w");
	fwrite($file, json_encode($array));
}