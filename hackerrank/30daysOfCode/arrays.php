<?php

function reverseArray(&$array){
  for ($index=0; $index < intval(count($array)/2); $index++) {
    $temp = $array[$index];
    $indexToSwap = count($array)-$index-1;
    $array[$index] = $array[$indexToSwap];
    $array[$indexToSwap] = $temp;
  }
}

$handle = fopen("php://stdin","r");

fgets($handle);
$arrayString = trim(fgets($handle));

$array = explode(" ", $arrayString);

reverseArray($array);

print(implode(" ",$array));

 ?>
