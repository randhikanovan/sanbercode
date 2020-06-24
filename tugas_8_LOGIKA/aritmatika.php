<?php

echo "<h1>Soal Deret Aritmatika</h1>";

function tentukan_deret_aritmatika($arr) {
	for ($i=count($arr)-1; $i > 0; $i--) { 
		$minus[] = $arr[$i] - $arr[$i-1];
	}

	$isAritmatika = false;
	for ($i=0; $i < count($minus)-1; $i++) { 
		if ($minus[$i] == $minus[$i+1]) {
			$isAritmatika = true;
		} else {
			$isAritmatika = false;
			break;
		}
	}
	
	if ($isAritmatika) {
		echo "true";
	} else {
		echo "false";
	}
	echo "<br>";
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
echo tentukan_deret_aritmatika([3, 6, 9, 12, 15, 18]);
?>