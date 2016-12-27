<?php
/*
simplexml_load_file convert an XML file
into a SimpleXMLElement object
*/
class Conf{
  private $note;

  function __construct($file){
    $this->note = simplexml_load_file($file);
  }

  public function dumpConfToScreen(){
    print_r($this->note);
  }

  public function printIndividualValues(){
    print $this->note->to . "\n";
    print $this->note->from . "\n";
    print $this->note->heading . "\n";
    print $this->note->body . "\n";
  }
}

$conf = new Conf("resources/note.xml");
$conf->dumpConfToScreen();
print "\n";
$conf->printIndividualValues();
 ?>
