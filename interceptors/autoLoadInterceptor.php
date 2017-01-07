<?php

//Understand how autoload actually works and its use

class Writer{
  public function helloWorld(){
    print "Hello World!";
  }
}


function __autoload($className){
  print "Attempt to load {$className}\n";
}

$writer = new Writer();
$writer = new HelloWorldWriter();

$writer->helloWorld();

 ?>
