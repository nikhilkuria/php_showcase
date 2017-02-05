<?php
/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 05/02/17
 * Time: 12:33 PM
 */

//The basic sort is sort() which sorts the items alphabetically

//With just numbers

$numArray = array(2,3,7,8,5,6,4,1);

print(implode(" ", $numArray));
print(" to ");
sort($numArray);
print(implode(" ", $numArray));
print("\n");

//with nums and words

$alpahaNumArray = array("one",2,"three",4,"five",6);

print(implode(" ", $alpahaNumArray));
print(" to ");
sort($alpahaNumArray);
print(implode(" ", $alpahaNumArray));
print("\n");


//The next possible useful one is the ksort, which sorts an associative array based on keys

$learnWordsArray = array("b"=>"Ball", "d"=>"Dog", "a"=>"Apple", "c"=>"Cat");

print_r($learnWordsArray);
print("\n");
print(" to ");
print("\n");
ksort($learnWordsArray);
print_r($learnWordsArray);
print("\n");

//Using asort the sort happens based on the values

$learnWordsArray = array("w"=>"Ball", "x"=>"Dog", "y"=>"Apple", "z"=>"Cat");

print_r($learnWordsArray);
print("\n");
print(" to ");
print("\n");
asort($learnWordsArray);
print_r($learnWordsArray);
print("\n");

//To sort an array based on user defined comparision function, using usort

function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}