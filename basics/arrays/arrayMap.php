<?php

//Cheesy way to add arrays.
$one = array(1,2,3);

$two = array(4,5,6);

$name = "Nikhil";

$sum = array_map(function($num1,$num2){
  return $num1+$num2;
}, $one, $two);

print_r($sum);

 ?>
