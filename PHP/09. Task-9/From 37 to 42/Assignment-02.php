<?php
$index = 0;

// Needed Output
// 2
// 4
// 6
// 8
// 10
// 12
// 14
// 16
// 18
// 20


echo "<br>" . "___For Loop___" . "<br>";

$index = 0;
for ($index = 0; $index <= 20; $index += 2) {
    if ($index % 2 == 0) {
        if ($index == 0) {
            continue;
        }

        echo "$index<br>";
    }
}
// ---------------------------------------
echo "___While Loop___" . "<br>";

$index = 0;
while ($index <= 20) {
    if ($index % 2 == 0 && $index != 0) {
        echo "$index<br>";
    }
    $index += 2;
}
// ---------------------------------------
echo "<br>" . "___Do While Loop___" . "<br>";
$index = 0;
do {
    if ($index % 2 == 0 && $index != 0) {
        echo "$index<br>";
    }
    $index += 2;
} while ($index <= 20);
