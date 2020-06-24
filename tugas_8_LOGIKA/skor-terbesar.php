<?php

function skor_terbesar($arr){
  $kelas = [];
  for ($i=0; $i < count($arr); $i++) { 
      if (!in_array($arr[$i]['kelas'], $kelas)) {
        array_push($kelas, $arr[$i]['kelas']);
      }
  }

  // print_r($kelas);

  for ($i=0; $i < count($kelas); $i++) { 
    $skor = 0;
    for ($j=0; $j < count($arr); $j++) { 
      if ($arr[$j]['kelas'] == $kelas[$i]) {
        if ($arr[$j]['nilai'] > $skor) {
          $skor = $arr[$j]['nilai'];
          $out[$kelas[$i]] = $arr[$j];
        }
      }
    }
  }

  echo '<pre>',print_r($out,1),'</pre>';
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>