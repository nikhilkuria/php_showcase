<?php

$name = "Nikhil";

function addToName(&$name2){
    print("{$name2}\n");
    $name2 = $name2." Kuria";
    print("{$name2}\n");
}

addToName($name);
print("{$name}\n");

?>