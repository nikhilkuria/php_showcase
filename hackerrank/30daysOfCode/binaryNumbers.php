<?php

define("ONE",1);

$handle = fopen("php://stdin", "r");

function getBinary($decimalNum){
    $binaryNum = array();
    $oneStream = 0;
    $maxOneStream = 0;
    while(!($decimalNum==0 || $decimalNum==1)){
        $remainder = $decimalNum % 2;
        $decimalNum = intval($decimalNum / 2);
        $binaryNum[] = $remainder;
    }
    $binaryNum[] = $decimalNum;
    $binaryNum = array_reverse($binaryNum);
    foreach($binaryNum as $num){
        if($num == ONE){
            $oneStream++;
        }else{
            if($oneStream>$maxOneStream){
                $maxOneStream = $oneStream;
            }
            $oneStream = 0;
        }
    }
    if($oneStream>$maxOneStream){
        $maxOneStream = $oneStream;
    }
    return $maxOneStream;
}

fscanf($handle,"%d",$inputNum);

print(getBinary($inputNum));