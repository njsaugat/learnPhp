<?php
    $names=[1,2,3,4,5];
    $numbersModified=array_map(function ($num){
        return "Number is ${num}";
    },$names);

    $numberLT5=array_filter($numbers, function($number){
        return $number>5;
    });