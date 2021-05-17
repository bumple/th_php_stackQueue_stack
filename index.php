<?php
include_once "Stack.php";
$slack = new Stack(10);
$slack->push(1);
$slack->push(2);
$slack->push(3);
$slack->push(4);
$slack->push(5);
$slack->push(6);
$slack->push(7);
$slack->push(8);

var_dump($slack->isEmpty());
echo '<br>';
$slack->showStack();
echo '<hr>';
$slack->pop();
$slack->showStack();
echo '<br>';
echo $slack->top();

