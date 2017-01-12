<?php

$handle = fopen("php://stdin","r");

print("Enter space separated numbers to be made to an array\n");

$numStream = fgets($handle);

print("Creating array from : {$numStream}\n");

//Using explode to create arrays
//now we have an array of Strings
$numArray = explode(" ", $numStream);

print_r($numArray);

print(getType($numArray[0]));
print("\n");
array_walk($numArray, 'intval');
print(getType($numArray[1]));
print("\n");
var_dump($numArray);
print_r($numArray);

?>