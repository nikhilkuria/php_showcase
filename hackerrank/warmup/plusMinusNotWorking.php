<?php

$handle = fopen("php://stdin","r");

$positiveCount = -1;

fscanf($handle, "%d", $nums);

$arrayString = fgets($handle);

$array = explode(" ", $arrayString);

array_walk($array, function($num, &$positiveCount){
    if($num>0){
        print("In positive : {$positiveCount}\n");
        $positiveCount++;
    }
});

print("Total Count : {$positiveCount}");

?>