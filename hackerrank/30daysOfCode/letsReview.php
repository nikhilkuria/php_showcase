<?php

$handle = fopen("php://stdin","r");

function isEven($num){
    return $num%2==0;
}

function splitString($input){
    $inputArray = str_split($input);
    $evenString = array();
    $oddString = array();
    $output;
    
    for($index = 0;$index<count($inputArray);$index++){
        if(isEven($index)){
            $evenString[] = $inputArray[$index];
        }else{
            $oddString[] = $inputArray[$index];
        }
    }
    
    $output[0] = implode('', $evenString);
    $output[1] = implode('', $oddString);
    
    return $output;
}

fscanf($handle, "%d", $numInputs);

for($index = 0;$index<$numInputs;$index++){
    fscanf($handle,"%s",$input);
    $result = splitString($input);
    print("{$result[0]} {$result[1]}\n");
    
}


?>