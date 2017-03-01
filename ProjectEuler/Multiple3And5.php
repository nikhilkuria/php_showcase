<?php

//https://projecteuler.net/problem=1

function findAPSum($firstTerm, $lastTerm, $difference){
    $count = (($lastTerm-$firstTerm)/$difference)+1;
    return ($count/2)*($firstTerm+$lastTerm);
}

function getHighestMultiple($difference, $limit){
    $offset = ($limit%$difference);
    if($offset==0){
        return $limit-$difference;
    }
    return $limit - $offset;
}

print(findAPSum(3, getHighestMultiple(3,1000), 3)+findAPSum(5, getHighestMultiple(5,1000), 5)-findAPSum(15, getHighestMultiple(15,1000), 15));