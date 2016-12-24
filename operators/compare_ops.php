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

echo "! and <> serve the same purpose..\n";
echo "5 != '5' : ";
var_dump($premise != '5');
echo "5 <> '5' : ";
var_dump($premise <> '5');

echo "\n The spaceship operator \n";
/*
Return 0 if values on either side are equal
Return 1 if value on the left is greater
Return -1 if the value on the right is greater
*/

echo " 5 <=> 5 : ";
echo 5 <=> 5;
echo "\n 5 <=> 4 : ";
echo 5 <=> 4;
echo "\n 4 <=> 5 : ";
echo 4 <=> 5;
echo "\n";

echo "\n Comparing numbers as Strings\n";
/*If you compare a number with a string or the comparison involves numerical strings,
then each string is converted to a number and the comparison performed numerically.
*/
echo " \"1\" == \"01\" : ";
var_dump("1" == "01");
echo "\n";
echo " 0 == \"a\" : ";
var_dump(0 == "a");

var_dump(min(-100, -10, NULL, 10, 100));
