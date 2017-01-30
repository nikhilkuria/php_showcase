<?php

$splQueue = new SplQueue();


//STACK CAN WORK TOO AS THE PARENT IS THE SAME
$splQueue->push(0);
$splQueue->push(1);
$splQueue->push(2);

for($index = 0; $index<3; $index++){
    print($splQueue->pop());
    print("\n");
}

print("\n");
print("\n");

//queue
$splQueue->enqueue("one");
$splQueue->enqueue("two");
$splQueue->enqueue("three");

for($index = 0; $index<3; $index++){
    print($splQueue->dequeue());
    print("\n");
}