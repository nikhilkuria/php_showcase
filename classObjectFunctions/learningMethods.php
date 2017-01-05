<?php

class Person{
    private $name;
    
    function  __construct($name){
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function resetName(){
        $this->setName("Cleared");
    }
    
    private function setName($name){
        $this->name = $name;
    }
    
}

//List all methods available in the class
print("Listing all methods available in Person (private methods are not shown) : \n");
print_r(get_class_methods("Person"));
print_r(get_class_methods(new Person("Hello Moto")));

//Calling a method with variable names
$nikhil = new Person("Nikhil");
$reset = "resetName";

print("The name now is : {$nikhil->getName()}\n");

$nikhil->$reset();

print("The name now is : {$nikhil->getName()}\n");

//now a safer way to do this.

if(in_array($reset, get_class_methods("Person"))){
    print("Safe to call the method in here\n");
}

//better ways to do this.

if(is_callable(array("Person", $reset))){
    print("The method is callable \n");
}

if(is_callable(array("Person", "setName"))){
    print("The method is callable \n");
}else{
    print("The method setName is not callable\n");
}

if(method_exists("Person", "setName")){
    print("The method setName exists \n");
}

if(method_exists("Person", "setName2")){
    print("The method setName2 exists \n");
}else{
    print("The method setName2 does not exist \n");
}
?>
