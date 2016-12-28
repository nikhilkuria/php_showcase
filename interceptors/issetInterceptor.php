<?php

class Move{

  public $name;
  private $founder;
  private $dominating;

  function __construct($name, $founder, $dominating){
    $this->name = $name;
    $this->founder = $founder;
    $this->dominating = $dominating;
  }

  function getName(){
    return $this->name;
  }

  function getFounder(){
    return $this->founder;
  }

  function getDominating(){
    return $this->dominating;
  }

  function __get($property){
    $method ="get{$property}";
    print "Searching if we have a {$method} to access {$property}\n";
    if(method_exists($this,$method)){
      return $this->$method();
    }
    throw new Exception("Attempted to access undefined property");
  }

  function __isset($property){
    print "We are here because {$property} is not set and we have called isset on it!\n";
    //Therefore we see if ther is a getter method which can serve our purpose
    //It so, we return true;
    return method_exists($this,"get{$property}");
  }
}

$euroStep = new Move("Euro Step", "Manu Ginobli", false);

//take note here bitte. When using terniary operator in string concat
//USE BRACKET!!
print "{$euroStep->name} was invented by {$euroStep->founder} and is ".($euroStep->dominating?"":"not")." dominating\n";


$tearDrop = new Move("Tear Drop", "Payton", false);

if(isset($tearDrop->name, $tearDrop->founder, $tearDrop->dominating)){
  print "{$tearDrop->name} was invented by {$tearDrop->founder} and is ".($tearDrop->dominating?"":"not")." dominating\n";
}

 ?>
