<?php

$handle = fopen("php://stdin", "r");

function factorial($num){
    if($num==1){
        return $num;
    }
    
    return $num * factorial($num-1);
}

fscanf($handle,"%d",$num);

$factorial = factorial($num);

print($factorial);

