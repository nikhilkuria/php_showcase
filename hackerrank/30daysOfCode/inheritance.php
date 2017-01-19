<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}


class Student extends person {
    private $testScores;
    
    public function __construct($first_name, $last_name, $id, $scores){
        parent::__construct($first_name, $last_name, $id);
        $this->testScores = $scores;
    }
    
    public function calculate(){
        //hack
        $avg = floor(array_sum($this->testScores) / count($this->testScores));
        print($avg);

        switch(true){
            case in_array($avg, range(0,40)):
                $grade = "T";
                break;
            case in_array($avg, range(40,54)):
                $grade = "D";
                break;
            case in_array($avg, range(55,69)):
                $grade = "P";
                break;
            case in_array($avg, range(70,79)):
                $grade = "A";
                break;
            case in_array($avg, range(80,89)):
                $grade = "E";
                break;
            case in_array($avg, range(90,100)):
                $grade = "O";
                break;
        }
        
        return $grade;
    }
}


$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");