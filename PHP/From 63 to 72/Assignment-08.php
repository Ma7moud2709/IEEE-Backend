<?php

$chars = ["A", "B", "C"];

// Method 1

array_push($chars, "D");
echo '<pre>';
print_r($chars);
echo '</pre>';

// Method 2
$chars = ["A", "B", "C"];

$chars[count($chars)] = "D";
echo '<pre>';
print_r($chars);
echo '</pre>';

// Methdo 3
$chars = ["A", "B", "C"];

$chars[] = "D";
echo '<pre>';
print_r($chars);
echo '</pre>';

// Method 3
$chars = ["A", "B", "C"];

echo '<pre>';
print_r(array_merge($chars, ['D']));
echo '</pre>';

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )