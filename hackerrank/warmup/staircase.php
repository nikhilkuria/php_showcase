<?php

$handle = fopen("php://stdin","r");

fscanf($handle,"%d",$stairSize);

$stairHeight =1;

while($stairHeight <= $stairSize){
    $stairWidth = 1;
    $stairSpaceWidth = 0;

    while($stairSpaceWidth<($stairSize - $stairHeight)){
        print(" ");
        $stairSpaceWidth++;
    };
    
    do{
        print("#");
        $stairWidth++;
    }while($stairWidth<=$stairHeight);
    print("\n");
    $stairHeight++;
}

?>