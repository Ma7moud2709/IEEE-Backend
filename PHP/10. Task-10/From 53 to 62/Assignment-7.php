<?php 

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

echo $chars[0];
for ($i = 0; $i < count($chars); $i++) {
    if(gettype($chars[$i]) == "integer" || $i == 0) {
        continue;
    }
    else{
        echo strtolower($chars[$i]);
    }
}

// Output
// "Elzero"