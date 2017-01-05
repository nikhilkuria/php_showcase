<?php

class Person{
    public $firstName;
    public $lastName;
    
    function _construct($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}

class SuperPerson extends Person{
    public $superPower;
    
    function _construct($fistName, $lastName, $superPower){
        super::_constuct($firstName, $lastName);
        $this->superPower = $superPower;
    }
}

//example for get_class
$nikhil = new Person("Nikhil", "Kuriakose");

print("nikhil belogs to the class : ");
print_r( get_class($nikhil) );
print("\n");

//example for instanceof
$superman = new SuperPerson("Clarke", "Kent", "fly");

print_r("\$superman instanceof Person : " . $superman instanceof Person);
print_r("\n\$superman instanceof SuperPerson : " . $superman instanceof SuperPerson);
print_r("\n\$nikhil instanceof Person : " . $nikhil instanceof Person);
print_r("\n\$nikhil instanceof SuperPerson : " . $nikhil instanceof SuperPerson);


print("\n");


?>