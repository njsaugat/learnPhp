<?php
// everything in php is kinda inside this tag
// variable name should be started in $;

    $name="saugat";
    $lastname="poudel";
    // vardump is like echo but with more info;
    // also we have print; but its slower;
    var_dump($lastname);
    echo $name." ".$lastname;
    echo "\n";
    echo "the name of the person is ${name}";
    echo "Hello world";


    // way to define constants in php:
    // for constansts no dollar like in qbasic
    define('PORT',80);
    echo PORT;
?>