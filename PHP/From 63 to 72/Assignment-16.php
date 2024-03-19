<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
function str_odd($item)
{
    if (gettype($item) == "string") {
        $item = "";
    } elseif ($item % 2 != 0) {
        return $item;
    } else {
        $item = 0;
    }
}
echo '<pre>';
print_r(array_values(array_filter($mix, "str_odd")));
echo '</pre>';
