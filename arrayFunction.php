<?php

$numbers=[1,2,4,5,6];
$numbersModified=array_map(function ($num){
    return "Number is ${num}";
},$numbers);

$numberLT5=array_filter($numbers, function($number){
    return $number>5;
});

