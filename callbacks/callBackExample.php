<?php

class Product{
  public $name;
  public $price;

  function __construct($name,$price){
    $this->name = $name;
    $this->price = $price;
  }
}

class ProcessSale{
  private $callbacks;

//This function can accept a function as a callback,
// and save it to an array
  public function attachCallback($callback){
    if(!is_callable($callback)){
      throw new Exception("Callback cannot be called");
    }
    $this->callbacks[] = $callback;
  }
//The vallbacks are then iterated and executed
  public function process($product){
    print "Processing item sales\n";
    foreach ($this->callbacks as $callback) {
      call_user_func($callback,$product);
    }
    print "{$product->name} sold for {$product->price}.\n";
  }
}

//a function can be assigned to a variable and then passed along
$logger = function($product){
  print "Sale of item : {$product->name}\n";
};

//a function defined in a class can also be used
//$processSale->attachCallback(array(new DiscountCalculator(), "addDiscount"));
class DiscountCalculator{
  function addDiscount($product){
    $product->price = $product->price - 10;
  }
}

//a static factory function can be used as well
class LoyaltyClub{
  static function enroll(){
    return function($product){
      if($product->price>50){
        print "Welcome to Loyalty Club\n";
      }else{
        print "Please purchase for 50 or more to get a free membership\n";
      }
    };
  }
}

//Intro to closures
//Will be taken up in more detail later
class PurchaseLimitter{
  static function setUpperLimit($upperLimit){
    $currentValue = 0;
    return function($product) use ($upperLimit, &$currentValue){
      $currentValue = $currentValue + $product->price;
      print "Count so far is {$currentValue}\n";
      if($currentValue>$upperLimit){
        print "Upper limit reached\n";
      }else{
        print "Upper limit is not yet reached\n";
      }
    };
  }
}

$processSale = new ProcessSale();
$processSale->attachCallback($logger);
$processSale->attachCallback(array(new DiscountCalculator(), "addDiscount"));
$processSale->attachCallback(LoyaltyClub::enroll());
$processSale->attachCallback(PurchaseLimitter::setUpperLimit(150));
$processSale->process(new Product("Shoe",100));
print "\n";
$processSale->process(new Product("Shirt",80));

 ?>
