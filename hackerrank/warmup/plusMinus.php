<?php

$handle = fopen("php://stdin","r");

$positiveCount;
$negativeCount = 0;
$zeroCount = 0;

fscanf($handle, "%d", $nums);

$arrayString = fgets($handle);

$array = explode(" ", $arrayString);

foreach($array as $num){
    if($num>0){
        $positiveCount++;
    }else if($num<0){
        $negativeCount++;
    }else{
        $zeroCount++;
    }
}

$positiveFraction = number_format($positiveCount/$nums, 6);
$negativeFraction = number_format($negativeCount/$nums, 6);
$zeroFraction = number_format($zeroCount/$nums, 6);

print("{$positiveFraction}\n");
print("{$negativeFraction}\n");
print("{$zeroFraction}\n");

?>