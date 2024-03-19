<?php 

$nums = [5, 10, 20, 5, 30, 40];

$sum = 0;

foreach ($nums as $num) {
    if(gettype($num) == "integer" && $num != 5) {
        $sum += $num;
    }
}

echo $sum;

// Output
// 100