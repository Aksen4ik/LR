<?php
function sumOfMainDiagonal($array) {
    $sum = 0;
    $n = count($array); 
  
    for ($i = 0; $i < $n; $i++) {
      $sum += $array[$i][$i]; 
    }
  
    return $sum;
  }
  

  $matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
  );
  

  echo "Сумма элементов главной диагонали: " . sumOfMainDiagonal($matrix);
  
?>