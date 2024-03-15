<?php
// Anonymous function
$greet = function ($name) {
    return "Greetings";
};

// Arrow function
$greetArrow = fn($name) => "Greetings";

// Output
echo $greet("Osama"); // Greetings
echo "<br>";
echo $greetArrow("Osama"); // Greetings
