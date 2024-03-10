<?php
$a = @$b or die("Error");

// Code 2
@$f = file("Not_A_File") or die("Error");

// Code 3
@include("Not_A_File") or die("Error");
