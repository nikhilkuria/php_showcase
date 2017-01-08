<?php

function getArrayFromString($input){
  $numArray = explode(" ", $input);
  return $numArray;
}

function getComparisionScores($questionOne, $questionTwo){
  $size = sizeof($questionOne);
  $result = array(0,0);
  for ($index=0; $index < $size; $index++) {
    $firstValue = intval($questionOne[$index]);
    $secondValue = intval($questionTwo[$index]);

    if($firstValue>$secondValue){
      $result[0]++;
    }else if($secondValue>$firstValue){
      $result[1]++;
    }
  }
  return $result;
}

$handle = fopen("php://stdin","r");

$aliceInput = fgets($handle);
$bobInput = fgets($handle);

$aliceInputArray = getArrayFromString($aliceInput);
$bobInputArray = getArrayFromString($bobInput);

$result = getComparisionScores($aliceInputArray, $bobInputArray);

print("{$result[0]} {$result[1]}\n")

 ?>
