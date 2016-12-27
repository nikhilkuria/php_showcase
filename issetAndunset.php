<?php

class Example{

  private $name;

  private function isNameSet(){
    if(isset($this->name)){
      return "Set";
    }else{
      return "Not Set";
    }
  }

  function doTest(){
    //$name = "Nikhil";
    print "Is name set : "
          .$this->isNameSet()
          ."\n";

    print "Is name set : "
          .$this->isNameSet()
          ."\n";

    $this->name = "Santa";
    print "Is name set : "
          .$this->isNameSet()
          ."\n";
    unset($this->name);

    print "Is name set : "
          .$this->isNameSet()
          ."\n";
  }
}

$example = new Example();
$example->doTest();

 ?>
