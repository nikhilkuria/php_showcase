<?php

define("SPACE", " ");

$handle = fopen("php://stdin","r");
$grid = array();
$maxHourGlassSum = -INF;

function findHourGlassSum($array, $startXIndex, $startYIndex){
    return $array[$startXIndex][$startYIndex] +
            $array[$startXIndex][$startYIndex+1] +
            $array[$startXIndex][$startYIndex+2] +
            $array[$startXIndex+1][$startYIndex+1] +
            $array[$startXIndex+2][$startYIndex] + 
            $array[$startXIndex+2][$startYIndex+1] + 
            $array[$startXIndex+2][$startYIndex+2];
}


for($index=0;$index<6;$index++){
    $arrayLine = trim(fgets($handle));
    $grid[] = explode(SPACE,$arrayLine);
}

for($xIndex=0;$xIndex<4;$xIndex++){
    for($yIndex=0;$yIndex<4;$yIndex++){
        $hourGlassSum = findHourGlassSum($grid, $xIndex, $yIndex);
        if($hourGlassSum>$maxHourGlassSum){
            $maxHourGlassSum = $hourGlassSum;
        }
    }
}

print($maxHourGlassSum);