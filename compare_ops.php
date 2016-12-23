<?php

/* this file deals with understanding the behavior of
 ==
 ===
*/

$premise = 5;

echo "5 == 5 : ";
var_dump($premise == 5);
echo "\n";

echo "5 == '5' : ";
var_dump($premise == '5');
echo "\n";

echo "5 === 5 : ";
var_dump($premise === 5);
echo "\n";

echo "5 === '5' : ";
var_dump($premise === '5');
echo "\n";

//Equality comparisons
if (strpos('testing', 'test')) {    // 'test' is found at position 0, which is interpreted as the boolean 'false'
    echo " this will not be print";
}

if (strpos('testing', 'test') != false) {    // false, as weak comparison was made (0 != false)
    echo " this will not be print";
}

// vs. strict comparisons
if (strpos('testing', 'test') !== false) {    // true, as strict comparison was made (0 !== false)
    echo " this will be print";
    echo " \n" ;
}
