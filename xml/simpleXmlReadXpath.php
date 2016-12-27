<?php
/*
Example where the SimpleXMLElement is searched using an XPath
*/
class Conf{
  private $conf;

  function __construct($file){
    $this->conf = simplexml_load_file($file);
  }

  function findNameInFile($propName){
    $matches = $this->conf->xpath("/conf/item[@name=\"{$propName}\"]");
    print_r($matches[0]);
  }
}

$confFile = new Conf($argv[1]);
$confFile->findNameInFile($argv[2]);
 ?>
