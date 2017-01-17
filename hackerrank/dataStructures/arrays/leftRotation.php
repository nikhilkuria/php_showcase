<?php

$handle = fopen("php://stdin", "r");
$inputString =explode(" ", trim(fgets($handle)));
$arrayLength = $inputString[0];
$numOfRota = $inputString[1];
$arrayString = trim(fgets($handle));
$array = explode(" ", $arrayString);

$swapCache = array();

function getToLocation($startIndex, $numOfRota, $arrayLength){
    if($startIndex-$numOfRota<0){
        return $arrayLength - (abs($startIndex-$numOfRota+1)) - 1;
    }
    return $startIndex-$numOfRota;
}

function swap(&$array, &$swapCache, $numOfRota){
    $indexToSwap = $swapCache[0];
    $valToSwap = $swapCache[1];
    //print("About to swap {$indexToSwap} with value {$valToSwap} ");
    
    $toLocation = getToLocation($indexToSwap, $numOfRota, count($array));
    //print("to location index {$toLocation}\n");
    
    $swapCache[0] = $toLocation;
    $swapCache[1] = $array[$toLocation];
    
    $array[$toLocation] = $valToSwap;
}

$swapCache[0] = 0;
$swapCache[1] = $array[0];

for($index = 0;$index< count($array);$index++){
        swap($array, $swapCache,$numOfRota);
}

print(implode(" ",$array));

?>