<?php
echo "<h1>Soal Deret Aritmatika</h1>";
function tentukan_deret_geometri($arr) {
	$isGeometri = false;
	$key = $arr[1] / $arr[0];
	for ($i=0; $i < count($arr)-1; $i++) { 
		$val = $arr[$i] * $key;
		if ($val == $arr[$i+1]) {
			$isGeometri = true;
		} else {
			$isGeometri = false;
			break;
		}
	}

	if ($isGeometri) {
		echo "true";
	} else {
		echo "false";
	}
	echo "<br>";
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>