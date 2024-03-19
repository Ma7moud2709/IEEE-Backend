<?php
$nums = [1, 2, 3, 4, 5, 6];


for ($i = count($nums) - 1; $i > 0; $i--) {
    $j = mt_rand(0, $i);
    if ($j != $i) {
        $temp = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $temp;
    }
}

// Display shuffled array

echo '<pre>';
print_r($nums);
echo '</pre>';

// Output
// Every Time The Array Elements Will Be Shuffled

// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )