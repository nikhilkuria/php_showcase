<?php
/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 05/02/17
 * Time: 12:11 PM
 */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$N);
$validNames = array();

for($a0 = 0; $a0 < $N; $a0++){
    fscanf($handle,"%s %s",$firstName,$emailID);
    if(preg_match("/@gmail.com$/",$emailID)){
        $validNames[] = $firstName;
    }
}

sort($validNames);

foreach ($validNames as $name){
    print("{$name}");
    print("\n");
}