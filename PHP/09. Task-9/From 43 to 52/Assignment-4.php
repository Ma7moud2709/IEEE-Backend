<?php
// Write Function Content Here
function multiply(...$args){
    $result = 1;
    foreach($args as $arg){
        if(gettype($arg) == "string"){
            continue;
        }else
            $result *= (int)$arg;
    }
    return "$result <br>";
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000