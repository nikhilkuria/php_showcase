<?php

define("WEIRD", "Weird");
define("NOT_WEIRD","Not Weird");

$handle = fopen("php://stdin","r");

fscanf($handle, "%d", $num);

function getOutString($num){
    if($num%2==1){
        return WEIRD;
    }else{
        if($num>=2 && $num<=5){
            return NOT_WEIRD;
        }
        if($num>=6 && $num<=20){
            return WEIRD;
        }
        return NOT_WEIRD;
    }

}

$outString = getOutString($num);
print($outString);


?>