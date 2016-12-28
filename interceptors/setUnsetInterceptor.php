<?php

class Move{

  private $name;
  private $founder;
  private $dominating;

  function __construct($name,$founder,$dominating){
    $this->name = $name;
    $this->founder = $founder;
    $this->dominating = $dominating;
  }

  public function getName(){
    return $this->name;
  }

  public function getFounder(){
    return $this->founder;
  }

  public function getDominating(){
    return $this->dominating;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function setFounder($founder){
    $this->founder = $founder;
  }

  public function setDominating($dominating){
    $this->dominating = $dominating;
  }

  public function __get($property){
    $method = "get{$property}";
    if(method_exists($this, $method)){
      return $this->$method();
    }
    return "Attempt to asassinate the president!";
  }

  public function __set($property, $value){
    print "Attempting to set {$property} with {$value}\n";
    $method = "set{$property}";
    if(method_exists($this, $method)){
      return $this->$method($value);
    }
  }

  public function __unset($property){
    print "Attempting to unset {$property}\n";
    $method = "set{$property}";
    if(method_exists($this, $method)){
      return $this->$method(null);
    }
  }

}

$lebronDunk = new Move("LeBron Dunk", "LeBron James", false);

print "{$lebronDunk->name} was invented by {$lebronDunk->founder} and is".($lebronDunk->dominating?"":" not")." dominating.\n";
unset($lebronDunk->dominating);
var_dump(isset($lebronDunk->dominating));
$lebronDunk->dominating = true;

print "{$lebronDunk->name} was invented by {$lebronDunk->founder} and is".($lebronDunk->dominating?"":" not")." dominating.\n";

 ?>
