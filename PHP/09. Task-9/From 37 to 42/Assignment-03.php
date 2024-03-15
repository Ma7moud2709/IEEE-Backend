<?php
$num = 2;
while ($num < 520) {
    $num--;
    echo $num . "<br>";
    $num = $num * 2 + 2;
    $num++;
}

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382