<?php
/**
 * Created by PhpStorm.
 * User: nikhilkuria
 * Date: 15/01/17
 * Time: 3:01 PM
 */

$handle = fopen("php://stdin","r");

$phoneBook = array();

fscanf($handle, "%d", $numOfEntries);

for ($index = 0; $index < $numOfEntries ;$index++){
    $entry = explode(" ", trim(fgets($handle)));
    $phoneBook[$entry[0]] = $entry[1];
}

do{
    fscanf($handle,"%s",$name);
    print_r()
    if(array_key_exists($name, $phoneBook)){
        $num = $phoneBook[$name];
        print("{$num}\n");
    }else{
        print("Not found\n");
    }

}while(true);
