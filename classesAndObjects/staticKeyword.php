<?php

/*
Using another classic car example to show static keyword
Attemp to create a samll factory here
*/

abstract class Car{

  abstract function drive();

  public static function createCar(){
    return new static();
  }

  public function getPurpose(){
    return "should move.";
  }

  public function talk(){
    print "I am a car and my mission is "
          ." \""
          .static::getPurpose()
          ."\"\n";
  }

}

class CommuteCar extends Car{
  public function drive(){
    print "Driving a commute car!!\n";
  }

  public function getPurpose(){
    return "should be efficient.";
  }
}

class SportsCar extends Car{
  public function drive(){
    print "Driving a sports car!!\n";
  }

  public function getPurpose(){
    return "should be schnell!";
  }
}

$commuteCar = CommuteCar::createCar();

$sportsCar = SportsCar::createCar();

$commuteCar->drive();
$sportsCar->drive();

$commuteCar->talk();
$sportsCar->talk();

 ?>
