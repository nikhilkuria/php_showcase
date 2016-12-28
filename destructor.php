<?php

class Fruit{
  private $name;

  function __construct($name){
    $this->name = $name;
  }

  public function getName(){
    return $name;
  }

  function __destruct(){
    print "Above to destroy the fruit {$this->name}\n";
  }

}

$apple = new Fruit("Apple");

var_dump(isset($apple));
unset($apple);

 ?>
