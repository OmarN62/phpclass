<?php

/** 
 * Simple function to echo out "Hello" to the screen
 * 
 * @return A simple string
 */
function sayHello($name){
    echo "Hello! $name!";
}

$returnValue = sayHello("Omar");
echo $returnValue;
