<?php

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $arrayLength);
fscanf($handle, "%d", $numOfRota);
$arrayString = fgets($handle);
$array = explode(" ", $arrayString);

$swapCache = array();

function getToLocation($startIndex, $numOfRota, $arrayLength){
    if($startIndex-$numOfRota<0){
        return $arrayLength - (abs($startIndex-$numOfRota+1));
    }
    print("{$startIndex} {$numOfRota}");
    return $startIndex-$numOfRota;
}

function swap(&$array, &$swapCache, $numOfRota){
    $indexToSwap = &$swapCache[0];
    $valToSwap = &$swapCache[1];
    
    $tempValue = $array[$indexToSwap];
    
    $array[$indexToSwap] = $valToSwap;
    $valToSwap = $tempValue;
    $indexToSwap = getToLocation($indexToSwap, $numOfRota, count($array));
}

$swapCache[0] = 0;
$swapCache[1] = 0;

print_r($array);
print_r($swapCache);
swap($array, $swapCache, $numOfRota);
print_r($array);
print_r($swapCache);

print_r($array);
print_r($swapCache);
swap($array, $swapCache, $numOfRota);
print_r($array);
print_r($swapCache);

print_r($array);
print_r($swapCache);
swap($array, $swapCache, $numOfRota);
print_r($array);
print_r($swapCache);


/*do{
    print_r($array);
    print_r($swapCache);
    swap($array, $swapCache,$numOfRota);
    
}while($swapCache[0] != 0);*/




?>