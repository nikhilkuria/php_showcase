<?php

class XMLLoader{
  private $file;
  private $xml;

  function __construct($file){
    $this->file = $file;
  }

  function validateIfFileExists(){
    if(!file_exists($this->file)){
      throw new Exception ("The file does not exist\n");
    }
  }

  function loadXml(){
    $this->xml = simplexml_load_file($this->file);
  }

}

class XMLEditor{
  private $loader;

  function __construct($file){
    $this->loader = new XMLLoader($file);
  }

  function performSanityCheck(){
    try{
      $this->loader->validateIfFileExists();
    }catch(Exception $ex){
      //print_r(ex);
      //or being subtle
      print $ex->getMessage();
    }
  }

  function loadXml(){
    try{
      $this->loader->loadXml();
      //learn why this does not throw ex!!
    }catch(Exception $ex){
      print $ex->getMessage();
    }
  }
}

$editor = new XMLEditor("resources/noexist.xml");

$editor->performSanityCheck();

$editor->loadXml();

 ?>
