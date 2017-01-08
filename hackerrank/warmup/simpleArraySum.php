<?php

$handle = fopen("php://stdin", "r");

fscanf($handle, "%d", $n);

$nums = fgets($handle);

$numArray = explode(" ", $nums);

array_walk($numArray, 'intval');

$sum = 0;

//This is using a simple for loop
//for ($index=0; $index < $n; $index++) {
//  $sum = $sum + $numArray[$index];
//}

//This is using a sick global trick 
array_walk($numArray, function($num){
  global $sum;
  $sum = $sum + $num;
});

print("{$sum}");

 ?>
