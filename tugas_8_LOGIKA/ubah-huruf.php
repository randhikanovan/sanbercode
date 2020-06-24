<?php
echo "<h1>Ubah Huruf</h1>";
function ubah_huruf($string){
	$split = str_split($string);
	for ($i=0; $i < count($split); $i++) { 
		$re[] = $split[$i];
	}

	$val = "";
	for ($i=0; $i < count($re); $i++) { 
		$hex = ord($re[$i]);
		$val .= chr($hex+1);
	}

	echo $val;
	echo "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>