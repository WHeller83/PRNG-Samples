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
		array_push($array, random_int(0,PHP_INT_MAX)/PHP_INT_MAX);
	}

	$name = "../data/training/php-sec-samples/".($s+1).".json";
	$file = fopen($name, "w");
	fwrite($file, json_encode($array));
}

# ==============================================
# ============== Testing Samples ==============
# ==============================================
for($s = 0 ; $s < $testing_samples; $s++){
	$array = array();
	for($i = 0 ; $i < $n; $i++){
		array_push($array, random_int(0,PHP_INT_MAX)/PHP_INT_MAX);
	}

	$name = "../data/testing/php-sec-samples/".($s+1).".json";
	$file = fopen($name, "w");
	fwrite($file, json_encode($array));
}
