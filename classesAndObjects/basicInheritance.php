<?php
/*
Getting used to inheritance,
Lets work with the classic example of animal, which would be the Parent
Followed by a land animal and a water animal
Followed by a cheetah and whale
*/

class Animal{
  private $weight;
  private $color;
  private $size;
  private $name;

  public function  __construct($name, $weight, $color, $size){
    $this->name = $name;
    $this->weight = $weight;
    $this->color = $color;
    $this->size = $size;
  }

  public function getName(){
    return $this->name;
  }

  public function getWeight(){
    return $this->weight;
  }

  public function getColor(){
    return $this->color;
  }

  public function getSize(){
    return $this->size;
  }
}

class LandAnimal extends Animal{
  private $numOfLegs;
  private $maxSpeed;

  public function __construct($name, $weight, $color, $size, $numOfLegs, $maxSpeed){
    parent::__construct($name, $weight, $color, $size);
    $this->numOfLegs = $numOfLegs;
    $this->maxSpeed = $maxSpeed;
  }

  public function getNumOfLegs(){
    return $this->numOfLegs;
  }

  public function getMaxSpeed(){
    return $this->maxSpeed;
  }
}

class WaterAnimal extends Animal{
  private $numOfFins;
  private $maxDepth;

  public function __construct($name, $weight, $height, $size, $numOfFins, $maxDepth){
    parent::__construct($name, $weight, $height, $size);
    $this->numOfFins = $numOfFins;
    $this->maxDepth = $maxDepth;
  }

  private function getNumOfFins(){
    return $this->numOfFins;
  }

  private function getMaxSpeed(){
    return $this->maxSpeed;
  }
}

$cheetah = new LandAnimal('cheetah',120,'yellow','medium',4,100);
$whale = new WaterAnimal('whale', 2000, 'blue', 'huge', 10, 10000);

print "Animal Dictionary!!\n";

print "Hi! my name is "
      ."{$cheetah->getName()}. "
      ."I weigh "
      ."{$cheetah->getWeight()} kilograms. "
      ."I am "
      ."{$cheetah->getColor()} in color."
      ."I have "
      ."{$cheetah->getNumOfLegs()} legs. "
      ."I can go "
      ."{$cheetah->getMaxSpeed()}km/hr fast.\n";

 ?>
