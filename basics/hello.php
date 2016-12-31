<?php

/*
php has two special variables to handle passed args
$argc - the count of the number of paramters
$argv - an array corresponding to the actual paramters

the first parameter is always the file name , i.e argv[0]
*/

echo "running php $argv[0] \n";

if($argc !==2 ){
  echo "Usage is php hello.php [name] \n";
  exit(1);
}

$name = $argv[1];
echo "Hello $name \n ";
