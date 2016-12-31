<?php

//Understand how autoload actually works and its use

class Writer{
  public function helloWorld(){
    $writer = new HelloWorldWriter();
    print "Hello World!";
  }

  function __autoload($className){
    print "Attempt to load {$className}\n";
  }
}

$writer = new Writer();
$writer->helloWorld();

 ?>
