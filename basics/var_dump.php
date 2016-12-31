<?php

/*
This function displays structured information about one or more expressions
that includes its type and value.
Arrays and objects are explored recursively with values indented to show structure.
http://php.net/manual/en/function.var-dump.php
*/

$dummy_array = array(1, 2, array('a','b','c'));

var_dump($dummy_array);

$dummy_float = 3.1;
$dummy_boolean = true;

//var_dump can take multiple values too
var_dump($dummy_float, $dummy_boolean);
