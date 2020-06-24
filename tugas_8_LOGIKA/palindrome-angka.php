<?php 

echo "<h1>Soal Palindrome</h1><br>";

function reverse($str){
	$split = str_split($str);
    $strSplit = "";
    for ($i=count($split) - 1; $i >= 0; $i--) { 
        $strSplit .= $split[$i];
    }
    return $strSplit;
}

function palindrome_angka($angka) {
  	if ($angka < 10) {
  		echo $angka + 1;
  		echo "<br>";
  	} else {
  		$rev = reverse($angka);
  		while ($angka != $rev) {
  			$angka++;
  			$rev = reverse($angka);
  		}
  		if ($angka == $rev) {
  			echo $rev;
  		} else {
  			echo $rev;
  		}
  		echo "<br>";
	}
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

 ?>