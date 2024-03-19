<?php

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo "<pre>";
print_r(array_combine(
    array_map(
        fn ($code) =>
        strtolower($code),
        $codes
    ),
    $means
));
echo "</pre>";

// Output
// Array
// (
//   [h] => HTML
//   [c] => CSS
//   [j] => JavaScript
// )