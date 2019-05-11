<?php
  function bendera($string = ['P ','R ','O ','G ','R ','A ','M ','M ','E ','R ']){
    for($i=0;$i<=9;$i++){
      for($j=0;$j<=9;$j++){
        if(($i==$j) || ($i+$j==9)){
          echo $string[$i];

        }else{

          echo "= &nbsp;";
        }

      }
      echo "<br />";
    }
    return;
  }
echo bendera();
 ?>
