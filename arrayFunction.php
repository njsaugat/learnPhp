<?php

$numbers=[1,2,4,5,6];
$numbersModified=array_map(function ($num){
    return "Number is ${num}";
},$numbers);
