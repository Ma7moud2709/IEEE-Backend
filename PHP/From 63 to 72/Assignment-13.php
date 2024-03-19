<?php

$nums = [10, 100, -20, 50, 30];
$tmp = 0;
foreach ($nums as $num) {
    if ($num > $tmp) {
        $tmp = $num;
    }
}

echo $tmp;
// Output
// 100