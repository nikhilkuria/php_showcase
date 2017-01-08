<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";


// Declare second integer, double, and String variables.

// Read and save an integer, double, and String to your variables.
fscanf($handle,"%d",$intVal);
fscanf($handle,"%f",$floatVal);
//fscanf($handle,"%s",$stringVal);
$stringVal = fgets($handle);
// Print the sum of both integer variables on a new line.
print($i+$intVal);
print("\n");
// Print the sum of the double variables on a new line.
print(number_format($d+$floatVal,1));
print("\n");
// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
print("{$s}"."{$stringVal}\n");


fclose($handle);
?>
