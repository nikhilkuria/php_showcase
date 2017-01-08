<?php

$nums = array(1,2,3,4,5);

var_dump($nums);


//array_map
$numsIntoTwo = array_map(function($num){
  return $num*2;
},$nums);

var_dump($numsIntoTwo);

//array_map for multiple arrays

function show_Spanish($n, $m)
{
    return("The number $n is called $m in Spanish");
}

$a = array(1, 2, 3, 4, 5);
$b = array("uno", "dos", "tres", "cuatro", "cinco");

$c = array_map("show_Spanish", $a, $b);
print_r($c);

//array_walk
array_walk($nums, function(&$num, $index){
  $num = $num * 3;
});

var_dump($nums);


 ?>
