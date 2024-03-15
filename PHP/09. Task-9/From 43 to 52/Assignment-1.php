<?php

// Write Function Content Here
function greeting($name, $gender = "") {
    echo "Hello ". (($gender == "Male") ? "Mr " : (($gender == "Female") ? "Miss " : "")) . $name . "<br>";

}

// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh