<?php
//Finding an effective sol for
//https://www.hackerrank.com/challenges/30-bitwise-and


function findLargestAnd($range, $lessThan){

    $high2 = pow(2,floor(log($lessThan)/log(2)));
    if(($high2*2)-1<=$range){
        return $lessThan-1;
    }else{
        return $lessThan-2;
    }
}

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
$myfile = fopen("out.txt", "w");

$result = array();
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$n,$k);
    $result[] = findLargestAnd($n, $k);
}

$txt = implode("\n", $result);
print($txt);
fwrite($myfile, $txt);
fclose($myfile);
