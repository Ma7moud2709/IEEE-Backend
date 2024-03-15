<?php 
$mix = [1, 2, "A", "B", "C", 3, 4];
$numbersCount = 0;
$lettersCount = 0;
for( $i = 0; $i < count($mix); $i++ ){
    if(gettype($mix[$i]) == "string"){
        $lettersCount++;
    }
    else{
        $numbersCount++;
        echo "$mix[$i]" . "<br>";
    }
}

echo $numbersCount . " Numbers Printed". "<br>";
echo $lettersCount . " Letters Ignored". "<br>";

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"