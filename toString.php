<?php
class Player{
   public $name;
   public $age;
   public $skillSet;

  public function __construct($name, $age, $skillSet){
    $this->name = $name;
    $this->age = $age;
    $this->skillSet = $skillSet;
  }

  public function __toString(){
    return "{$this->name} aged {$this->age} is a {$this->skillSet} player\n";
  }
}

$abrines = new Player("Abrines","22","Good");

//This will cause an error if called without defining __toString()
if(method_exists($abrines, "__toString")){
  print $abrines;
}else{
  print "Please define a __toString() method\n";
}

 ?>
