<?php

$splStack = new SplStack();

$splStack->push(1);
$splStack->push(2);
$splStack->push("top");

print("{$splStack->top()}\n");

for($index = 0; $index<3; $index++){
    print($splStack->pop());
    print("\n");
}