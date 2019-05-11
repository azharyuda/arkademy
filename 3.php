<?php
  function acak($param){
    $karakter='abcdefghijklmnopqrstuvwxyz1234567890';
    $string = '';
    $hasilacak='';
    $panjang = 32;
    for($j = 0;$j < $param; $j++){
      for($i = 0;$i<$panjang;$i++){
        $hasilacak .= $karakter[rand(0, 32)];
      }
      $string .=$hasilacak."<br />";
      $hasilacak = '';
    }
      return $string;
    }
  echo acak(5);
 ?>
