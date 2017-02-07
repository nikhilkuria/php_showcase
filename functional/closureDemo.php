<?php

function getCriteriaGreater($num){
    return function($item) use ($num){
        return $item<$num;
    };
}

$greaterThan5Checker = getCriteriaGreater(5);
$greaterThan10Checker = getCriteriaGreater(10);

for($index = 0; $index<15; $index++){
    print($greaterThan5Checker($index));
    print(" - ");
    print($greaterThan10Checker($index));
    print("\n");
}
