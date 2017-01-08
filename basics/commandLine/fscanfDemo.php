<?php

$handle = fopen("php://stdin", "r");

//Adding a third param
//like below will make the char set to $num
fscanf($handle,"%d",$num);

print("{$num}");

//must add more later

 ?>
