<?php

// Write Function Content Here

function calculate($n1, $n2, $op = "add"){
    $result = 0;
    if($op == "a" || $op == "add"){
        $result = $n1 + $n2;
    }elseif($op == "s"|| $op == "subtract"){
        $result = $n1 - $n2;
    }elseif($op == "m"|| $op == "multiply"){
        $result = $n1 * $n2;
    }else{
        "Invalid Operation";
    }
    return ($result . "<br>");
}
// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200