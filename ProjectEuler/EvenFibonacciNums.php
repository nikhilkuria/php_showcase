<?php
//https://projecteuler.net/problem=2

$num1 = 1;
$num2 = 1;

$evenSum = 0;

while($num2<4000000){
    $tempNum = $num2;
    $num2 = $num1 + $num2;
    $num1 = $tempNum;
    if($num2%2==0){
        $evenSum = $evenSum+$num2;
    }
}

print($evenSum);