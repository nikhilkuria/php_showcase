<?php

/*Creating a class which works on a boolean value passed
The boolean is read from an xml file using simplexml_load_file
The boolean value is passed as a string,
We expect "false" to be considered as a boolean false.
However this is not the case,
The string "false" will, in fact, resolve to true in a test.
This is because PHP will helpfully cast a nonempty string
value to the Boolean true for you in a test context. So
if ( "false" ) {
    // ...
}
is equivalent to
if ( true ) {
    // ...
}
*/

class AddressManager{
  private $addresses = array( "209.131.36.159", "74.125.19.106" );

  public function printAddresses($resolve){
    foreach ($this->addresses as $address) {
      print "{$address}";
        if($resolve){
          print (" and Resolved Address is {$this->resolve($address)}");
        }
      print "\n";
    }
  }

  public function validateAndPrintAddresses($resolve){

    foreach ($this->addresses as $address) {
      print "{$address}";
        if($resolve){
          print (" and Resolved Address is {$this->resolve($address)}");
        }
      print "\n";
    }
  }

  public function validateWithHintAndPrintAddresses(boolean $resolve){

    foreach ($this->addresses as $address) {
      print "{$address}";
        if($resolve){
          print (" and Resolved Address is {$this->resolve($address)}");
        }
      print "\n";
    }
  }

  private function resolve($address){
    return "##".$address."##";
  }
}

$settings = simplexml_load_file("resources/settings.xml");

$addressManager = new addressManager();

print "--Print Addresses with hardcoded boolean true\n";
$addressManager->printAddresses(true);
print "\n";

print "--Print Addresses with the property from settings,xml which is {$settings->resolvedomains}\n";
$addressManager->printAddresses($settings->resolvedomains);
print "\n";


print "--Print Addresses with hardcoded 'false' value\n";
$addressManager->printAddresses("false");
print "\n";

print "--Print Addresses with boolean false value\n";
$addressManager->printAddresses(false);
print "\n";

print "--Now trying everything with validation\n";

print "--Print Addresses with hardcoded boolean true\n";
$addressManager->validateAndPrintAddresses(true);
print "\n";

print "--Print Addresses with the property from settings,xml which is {$settings->resolvedomains}\n";
$addressManager->validateAndPrintAddresses($settings->resolvedomains);
print "\n";


print "--Print Addresses with hardcoded 'false' value\n";
$addressManager->validateAndPrintAddresses("false");
print "\n";

print "--Print Addresses with boolean false value\n";
$addressManager->validateAndPrintAddresses(false);
print "\n";

/*
Or use hints to prevent passing a non boolean variable as argument
*/

print "--Print Addresses with the property from settings,xml which is {$settings->resolvedomains}\n";
$addressManager->validateWithHintAndPrintAddresses($settings->resolvedomains);
print "\n";

 ?>
