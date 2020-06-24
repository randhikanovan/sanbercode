<?php 

echo "<h1>Soal Papan Catur</h1><br>";

function papan_catur($angka) {
	for ($i=0; $i < $angka; $i++) { 
		if ($i % 2 == 0) {
			for ($j=0; $j < $angka; $j++) { 
				echo "# ";
			} 
		} else {
			for ($j=0; $j < $angka-1; $j++) { 
				echo "&nbsp;#";
			}
		}
		echo "<br>";
	}
}
echo "Papan Catur 4<br>";
echo papan_catur(4);
echo "<br>Papan Catur 8<br>";
echo papan_catur(8);
echo "<br>Papan Catur 5<br>";
echo papan_catur(5);

 ?>