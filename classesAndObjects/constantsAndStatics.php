<?php

/*
I have enough taste to know this is a poor design.
But suffices to verstehen how things work!
*/

class CustomerCounter{

  const COUNTER_TYPE = "Geiger";

  static public $counter = 0;
  static public function addCounter(){
    print "Customer walks in!!\n";
    self::$counter++;
  }
  static public function printCounter(){
    print "The customer count is ".self::$counter." \n";
  }
}



print "Welcome to counter app using ".CustomerCounter::COUNTER_TYPE." counter\n";

CustomerCounter::printCounter();

CustomerCounter::addCounter();
CustomerCounter::addCounter();

CustomerCounter::printCounter();

 ?>
