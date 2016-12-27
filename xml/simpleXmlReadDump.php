<?php

if($argc!=2){
  echo "Please use using two params\n";
  exit;
}
echo $argv[1];

$conf = simplexml_load_file($argv[1]);
print_r($conf);
 ?>
