<?php
/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 01/02/17
 * Time: 12:16 PM
 */
$handle = fopen("php://stdin","r");

function isPrime($num){
    $numRoot = sqrt($num);
    if(floor($numRoot) == ceil($numRoot)){
        return false;
    }
    if($num>2 && $num%2==0){
        return false;
    }
    for($index = 3; $index<floor($numRoot); $index = $index+2){
        if($num%$index==0){
            return false;
        }
    }
    return true;
}

fscanf($handle, "%d", $numOfInput);

$inputs = array();

for ($index = 0;$index<$numOfInput;$index++){
    fscanf($handle, "%d", $input);
    $inputs[] = $input;
}

foreach ($inputs as $input){
    if(isPrime($input)){
        print("Prime\n");
    }else{
        print("Not prime");
    }
}