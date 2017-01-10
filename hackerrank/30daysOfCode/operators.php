<?php

$handle = fopen("php://stdin","r");

fscanf($handle,"%f",$mealCost);
fscanf($handle,"%d",$tipPercent);
fscanf($handle,"%d",$taxPercent);

$tip = $mealCost * ($tipPercent/100);
$tax = $mealCost * ($taxPercent/100);

$total = round($mealCost + $tip + $tax);

print("The total meal cost is {$total} dollars.\n");

?>