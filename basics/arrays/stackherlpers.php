<?php

//This example demonstrates
//array_unshift - add element to the begenning of the array
//array_shift - remove element from the begenning of the array
//array_push - add elements to the end of the array
//array_pop - remove element from the end of the array

//good to read
//http://stackoverflow.com/questions/14232766/difference-between-array-push-and-array
//http://www.evardsson.com/blog/2010/02/05/comparing-php-array_shift-to-array_pop/

$input = array();
$input[] = 1;
$input[] = 2;
$input[] = 3;

print("We shall start with \n");
print_r($input);

print_r("\nNow adding element at the start using array_unshift");
array_unshift($input,0);
print_r("\nAnd we have\n");
print_r($input);
print_r("\nAnother one\n");
array_unshift($input,-1);
print_r("And we have\n");
print_r($input);

print_r("\nAdding elements to the end of the array using the usual way\nAnd we have\n");
$input[] = 4;
$input[] = 5;
print_r($input);

print_r("\nLets take out elements using array_shift. This will return the first element of the array\n");
print_r(array_shift($input));
print_r($input);

print_r("\nAnd another one..\n");
print_r(array_shift($input));
print_r($input);


print_r("\nCalling the exact same operations as above using array_push and array_pop\n");

$input2 = array();
$input2[] = 1;
$input2[] = 2;
$input2[] = 3;

print("We shall start with \n");
print_r($input2);

print_r("\nNow adding element at the end using array_push");
array_push($input2,0);
print_r("\nAnd we have\n");
print_r($input2);
print_r("\nAnother one\n");
array_push($input2,-1);
print_r("And we have\n");
print_r($input2);

print_r("\nAdding elements to the end of the array using the usual way\nAnd we have\n");
$input2[] = 4;
$input2[] = 5;
print_r($input2);

print_r("\nLets take out elements using array_pop. This will return the last element of the array\n");
print_r(array_pop($input2));
print_r($input2);

print_r("\nAnd another one..\n");
print_r(array_pop($input2));
print_r($input2);




