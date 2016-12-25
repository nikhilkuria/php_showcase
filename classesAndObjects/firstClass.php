<?php

class Player{
  private $firstName;
  private $lastName;
  private $role;

  function __construct($firstName, $lastName, $role){
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->role = $role;
  }

  public function getName(){
    return "$this->firstName"
          ." $this->lastName";

  }
}

$idealGuard = new Player("Chris", "Paul", "Guard");
$idealCenter = new Player("DeMarcus", "Cousins", "Center");

print "The ideal guard : {$idealGuard->getName()}\n";
print "The ideal center : {$idealCenter->getName()}\n";
