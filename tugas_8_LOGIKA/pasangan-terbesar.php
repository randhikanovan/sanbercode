<?php 

echo "<h1>Pasangan Terbesar</h1>";
echo "<br>";

function pasangan_terbesar($angka){
	$strsplit = str_split($angka);
	for ($i=0; $i < count($strsplit)-1; $i++) { 
		$couple[] = $strsplit[$i].$strsplit[$i+1];
	}

	$max = 0;
	for ($i=0; $i < count($couple); $i++) { 
		if ($couple[$i] > $max) {
			$max = $couple[$i];
		}
	}

	echo "$max";
	echo "<br>";
}



// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99
 ?>