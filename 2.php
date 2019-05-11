<?php
  function check($username){
    if(preg_match("/^[a-z]{1-8}$/", $username)){
        echo "salah";
      }else{
        echo "benar";
      }
      return;
  }
  $hasil = check('');
  echo $hasil;
 ?>
