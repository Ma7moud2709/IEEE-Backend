<?php

$arr = ["A", "B", "C", "D", "E"];

$count = 0;
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i]) {
    $count += 1;
    }
}

echo $count;

// Output
// 5