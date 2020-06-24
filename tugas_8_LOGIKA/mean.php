<?php

echo "<h1>Soal Mean</h1>";
echo "<br>";

function cari_mean($arr){
	$sum = 0;
	for ($i=0; $i < count($arr); $i++) { 
		$sum+=$arr[$i];
	}

	$mean = $sum / count($arr);
	echo round($mean);
	echo "<br>";
}

echo cari_mean([1, 2, 3, 4, 5]); // 3
echo cari_mean([3, 5, 7, 5, 3]); // 5
echo cari_mean([6, 5, 4, 7, 3]); // 5
echo cari_mean([1, 3, 3]); // 2
echo cari_mean([7, 7, 7, 7, 7]); // 7

?>