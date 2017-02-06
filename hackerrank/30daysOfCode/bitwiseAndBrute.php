<?php

function findLargestAnd($range, $lessThan){
    
    $maxAndValue = 0;
    
    for($aIndex = 0 ; $aIndex <= $range ; $aIndex++){
        for($bIndex = $aIndex+1 ; $bIndex <= $range ; $bIndex++){
            $andValue = $aIndex & $bIndex;
            if($andValue < $lessThan && $andValue > $maxAndValue){
                $maxAndValue = $andValue;
            }
        }
    }
    
    return $maxAndValue;
}

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);

$result = array();
//$myfile = fopen("out.txt", "w");
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$n,$k);
    $result[] = findLargestAnd($n, $k);
}

$txt = implode("\n", $result);
print($txt);
//fwrite($myfile, $txt);
//fclose($myfile);
