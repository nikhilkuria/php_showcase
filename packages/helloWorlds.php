<?php
namespace{
  //Namespace without any name would be treated as the global Namespace

  class Hello{
    static function helloWorld(){
      print "Hello World from Global\n";
    }
  }
}

namespace com\sc\output{
  class Hello{
    static function helloWorld(){
      print "Hello World from ".__NAMESPACE__."\n";
    }
  }
}

namespace com\sc\output\again{
  class Hello{
    static function helloWorld(){
      print "Hello World from ".__NAMESPACE__."\n";
    }
  }
}
 ?>
