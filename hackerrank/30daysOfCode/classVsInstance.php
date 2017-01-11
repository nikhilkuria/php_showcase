<?php

class Person{
    private $age;
    
    public function __construct($initAge){
        if($initAge<0){
            print("Age is not valid, setting age to 0.\n");
            $initAge = 0;
        }
        $this->age = $initAge;
    }
    
    public function yearPasses(){
        $this->age++;
    }
    
    public function amIOld(){
        if($this->age < 13){
            print("You are young..");
        }else if($this->age >= 13 && $this->age < 18){
            print("You are a teenager..");
        }else{
            print("You are old..");
        }
        print("\n");
    }
}

?>