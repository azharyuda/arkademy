<?php
function biodata($name,
$address,
$hobbies = [],
$is_married,
$school,
$skills = [])
{

  $bio = array(
    "name"=>$name,
    "address"=>$address,
    "hobbies"=>$hobbies,
    "is_married"=>$is_married,
    "school"=>$school = [
      'highSchool'=>$school[0],
      'University'=>$school[1]
      ],
    "skills"=>$skills = [
      'name'=>$skills[0],
      'score'=>$skills[1]
      ]
  );
  $hasil = json_encode($bio);
  return $hasil;
}
  $hasil = biodata('Azhar Yuda Partama', 'Jl. Adam Malik Perumahan Citra Griya BLok A.15',
  ['menonton film','bermain game','membaca buku'],
  false,
  ['SMK TI Airlangga','STMIK Widya Cipta Dharma'],
  [['php','html','visual basic','office'],
  ['3','3','3','4']]);
  echo $hasil;
 ?>
