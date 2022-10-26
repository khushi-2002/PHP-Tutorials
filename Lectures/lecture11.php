<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to function tutorial</h1>


<?php

  function marks($arr){
    $sum=0;
    foreach($arr as $v){
        $sum+=$v;
    }
    return $sum;
  }

  function avgmarks($arr){
      $avg=0;
      $sum=0;
      foreach($arr as $values){
         $sum += $values;
      }
      $avg= $sum/count($arr);
      return $avg;
  }

  $arr = array(10,20,67,78,67);
  $sum_array = marks($arr);
  echo "The sum of the array is $sum_array <br>";

  $khushi = array(98,95,95,87,80);
  $sum_khushi = marks($khushi);
  echo "The sum of the marks of Khushi is $sum_khushi <br>";

  $moussa = array(78, 67, 90, 89, 90);
  $avg_marks = avgmarks($moussa);
  echo "The average marks of moussa is $avg_marks <br>";
  
  $harry = array(190, 45 ,67,78,34);
  $avg_marks = avgmarks($harry);
?>


</body>
</html>


