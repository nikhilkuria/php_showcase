<?php

$handle = fopen("php://stdin","r");

fscanf($handle, "%d", $numOfArrays);


$leftToRighDiag = 0;
$rightToLeftDiag = 0;

for($arrayIndex = 0; $arrayIndex < $numOfArrays;$arrayIndex++){
    $arrayString = fgets($handle);
    $array = explode(" ", $arrayString);
    
    $leftToRighDiagVal = $array[$arrayIndex];
    $rightToLeftDiagVal = $array[$numOfArrays - $arrayIndex - 1];
    
    //print("{$leftToRighDiagVal} and {$rightToLeftDiagVal}\n");
    
    $leftToRighDiag = $leftToRighDiag + $leftToRighDiagVal;
    $rightToLeftDiag = $rightToLeftDiag + $rightToLeftDiagVal;
    
}

$diff = abs($leftToRighDiag - $rightToLeftDiag);

print("{$diff}");

?>