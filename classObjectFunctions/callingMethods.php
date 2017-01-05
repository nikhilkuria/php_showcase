<?php

class Calculator{
    
    public function add($num1, $num2){
        return $num1+$num2;
    }
    
    public function plusOne($num){
        return $num+1;
    }
    
}

$calculator = new Calculator();
//Different ways to call methods
//plain old
print("{$calculator->add(2,5)}\n");

//using call_user_func
$result = call_user_func(array($calculator,"add"),2,5);
print("{$result}\n");

//using call_user_func_array where the args are passed as array
//helpful when we get the args as an array from the client
$result = call_user_func_array(array($calculator,"add"),array(2,5));
print("{$result}\n");

?>