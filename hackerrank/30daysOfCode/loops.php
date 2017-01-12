<?php

$handle = fopen("php://stdin", "r");
fscanf($handle,"%d",$num);

for($index = 1; $index <=10; $index++){
    $result = $num * $index;
    print("{$num} x {$index} = {$result}\n");
}

?>