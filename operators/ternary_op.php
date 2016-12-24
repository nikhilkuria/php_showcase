<?php

$result = $argc==2 ? "Hello ".$argv[1] : "No params passed";

echo "$result";
echo "\n";

echo "Non obvious terniary operators.";
echo "\n";

$result = true?'true':false?'t':'f';
//The above statement will be evaluated from left to right
//((true ? 'true' : false) ? 't' : 'f')
echo $result;
echo "\n";

echo "It is also possible to make it even more minimal";
echo "\n";
$name = $argv[1]?:"John Deere";
echo $name;
echo "\n";
