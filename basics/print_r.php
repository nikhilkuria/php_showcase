<?php

/*
displays information about a variable in a way that's readable by humans.
*/

$dummy_array = array(1,2,array('a','b','c'));

print_r($dummy_array);

$dummy_float = 3.14;
$dummy_boolean = true;

print_r($dummy_float);
echo "\n";
print_r($dummy_boolean);
echo "\n";

/*
The second param is optional and can be used to return the result
rather than print it.
*/

$print_r_result = print_r($dummy_array, true);

echo "Printing print_r result....\n\n";
echo $print_r_result;
