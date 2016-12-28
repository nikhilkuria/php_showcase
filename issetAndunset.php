<?php

/*Understanding how isset and unset works
*/

//Obviously a false
var_dump(isset($name));

$name;

//Now that we have defined the variable
//isset would still be false
//as $name is NULL
//From docs:Determine if a variable is set and is not NULL.
var_dump(isset($name));
//var_dump($name);

$name = "Nikhil";

//Now that is has been set
//this should give us something meaningful
var_dump(isset($name));

//let us now unset $name
unset($name);

//should be back to sq one
var_dump(isset($name));
 ?>
