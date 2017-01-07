<?php

/*
Straightforward way of Doing it.
*/
require_once "tasks/SimpleTask.php";
$task = new tasks\SimpleTask();
$task->doTask();

/*
Adding extra checks to see the file and the class exists
*/
try{
  //A positive case
  $className = "HardTask";
  $fileName = "tasks/${className}.php";
  if(!file_exists($fileName)){
    throw new Exception("No such file found in the path : {$fileName}");
  }

  require_once $fileName;
  $qClassName = "tasks\\${className}";
  if(!class_exists($qClassName)){
    throw new Exception("No such class : {$qClassName} in the path {$fileName}");
  }

  $speaker = new $qClassName();
  $speaker->doTask();

  //A negative case where the file is not presemt
  $className2 = "HardTask123";
  $fileName2 = "tasks/${className}.php";
  if(!file_exists($fileName)){
    throw new Exception("No such file found in the path : {$fileName}");
  }

  //A negative case where the file is present but the class is not r=prest in the namespae
  $className3 = "HardTask";
  $className = "NoTask";
  $fileName3 = "tasks/${className}.php";
  if(!file_exists($fileName)){
    throw new Exception("No such file found in the path : {$fileName}");
  }

  require_once $fileName;
  $qClassName = "tasks\\${className}";
  if(!class_exists($qClassName)){
    throw new Exception("No such class : {$qClassName} in the path {$fileName}");
  }
}
catch(Exception $ex){
  print $ex->getMessage();
}

print "\nPrinting all the declared classes now!\n"

print_r(get_declared_classes());
 ?>
