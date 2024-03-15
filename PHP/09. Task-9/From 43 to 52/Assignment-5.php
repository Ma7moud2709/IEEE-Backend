<?php

function check_status($a, $b, $c)
{
    $statement = "";
    $name = "";
    $age = 0;
    $state = true;
    foreach (func_get_args() as $arg) :
        if (gettype($arg) == "string") {
            $name = $arg;
        } elseif (gettype($arg) == "boolean") {
            $state = $arg;
        } else {
            $age = (int)$arg;
        }
    endforeach;

    return "Hello $name, Your Age Is $age, You Are " . (($state) ? "" : "Not ") . "Available For Hire" . "<br>";
}



// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"