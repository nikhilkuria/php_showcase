<?php
/*
The __call() method can be useful for delegation.
Delegation is the mechanism by which one object passes method invocations on to a second.
It is similar to inheritance, in that a child class passes on a method call to its parent implementation.
With inheritance the relationship between child and parent is fixed,
so the ability to switch the receiving object at runtime means that delegation can be more flexible than inheritance
*/
class Name{
  private $firstName;
  private $lastName;
  private $writer;

  function __construct($firstName, $lastName){
    $this->firstName =  $firstName;
    $this->lastName = $lastName;
    $this->writer = new NameWriter();
  }

  public function setFirstName($name){
    $this->firstName = $name;
  }

  public function setLastName($name){
    $this->lastName = $name;
  }

  public function getFirstName(){
    return $this->firstName;
  }

  public function getLastName(){
    return $this->lastName;
  }

  public function __get($property){
    $method = "get{$property}";
    if(method_exists($this, $method)){
      return $this->$method();
    }
    return "Attempt to asassinate the president!";
  }

 /*
 We are delegating the calls to the writer object
 */
  public function __call($methodName, $args){
    print "Calling {$methodName} ...";
    if(method_exists($this->writer, $methodName)){
      return $this->writer->$methodName($this);
    }
  }
}

class NameWriter{

  public function writeName($name){
    print "Ich heise {$name->firstName} {$name->lastName}\n";
  }
}

$nikhil = new Name("nikhil", "kuriakose");
$nikhil->writeName();

 ?>
