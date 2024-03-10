<?php
$a = "10";

// Needed Ouput
echo gettype(+$a);
// "integer"
echo "<br>";
echo gettype(1 * $a);
// "integer"
echo "<br>";
echo gettype($a/1);
// "integer"
echo "<br>";

// For The People Who Love Searching
echo gettype((int)$a);
// "integer"
