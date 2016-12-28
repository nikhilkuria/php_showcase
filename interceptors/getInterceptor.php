<?php

class Person{

  public $name;
  public $familyName;
  public $age;

  function __construct($name, $familyName, $age){
    $this->name = $name;
    $this->familyName = $familyName;
    $this->age = $age;
  }

  public function getFullName(){
    return "{$this->name} "."{$this->familyName}";
  }

  /*
    whenever an attempt is made to access an undefined or private property
    the __get method is invoked.
  */
  public function __get($property){
    print "attempt to access {$property}\n";
    $method = "get{$property}";
    print "checking if {$method} is defined..\n";
    if(method_exists($this,$method)){
      print "yes!\n";
      return $this->$method();
    }
    print "no\n";
    return "Not defined";
  }

}

$nikhil = new Person('Nikhil','Kuriakose',28);
$neha = new Person('Neha','Joseph',28);

print "{$nikhil->name} ist {$nikhil->age} Jahre alt.\n";
print "{$neha->name} ist {$neha->age} Jahre alt.\n";

print "{$nikhil->name}'s voller name ist {$nikhil->fullName}\n";

 ?>
