<!-- Assignment 1 -->
<?php

use function PHPSTORM_META\type;

echo nl2br(
  "Assignment 1
    ###########"
);
echo "<br>";

echo (int)15.2 + (int)14.7 + (10.5 + 10.5); // 50
// echo (int)(15.2 + 14.7 + (10.5 + 10.5)); // 50

echo "<br>";
echo gettype((int)(15.2 + 14.7 + (10.5 + 10.5))); // Integer
echo '<hr>';

// --------------------------------------------------------------
echo nl2br(
  "Assignment 2
    ###########"
);
echo "<br>";
$number = 100;

// Method One
echo gettype($number);
echo "<br>";
// Method Two
var_dump($number);
echo '<hr>';

// --------------------------------------------------------------

echo nl2br(
  "Assignment 3
    ###########"
);
echo "<br>";
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";

echo '<hr>';

// --------------------------------------------------------------

echo nl2br(
  "Assignment 4
    ###########"
);
echo "<br>";
echo nl2br("We \n Love \n Elzero \n Web \n School");
echo '<hr>';
// --------------------------------------------------------------

echo nl2br(
  "Assignment 5
    ###########"
);
echo "<br>";
echo nl2br(
  "Hello \"\'Elzero\'\"
We Love \$Programming\$
Languages Specially \"PHP\""
);
echo '<hr>';
// --------------------------------------------------------------

echo nl2br(
  "Assignment 6
    ###########"
);
echo "<br>";
$something = "Programming";

echo <<<"code"
Hello \PHP\
We Love $something
code;
echo '<hr>';
// --------------------------------------------------------------

echo nl2br(
  "Assignment 7
    ###########"
);
echo "<br>";

echo 1 + (int)"Hello PHP";
echo '<br>';
echo gettype(1 + (int)"Hello PHP");


echo '<hr>';
// --------------------------------------------------------------

echo nl2br(
  "Assignment 8
    ###########"
);
echo "<br>";
print_r([
  "FrontEnd" => [
    0 => "HTML",
    1 => "CSS",
    "JS" => [
      "Vuejs" => [
        2 => "v2",
        3 => "v3"
      ],

      0 => "Reactjs",
      1 => "Svelte"
    ]
  ],

  "BackEnd" => [
    0 => "PHP",
    1 => "MySQL",
    2 => "Security"
  ],

  0 => "Git",
  1 => "Github",
  "Testing" => [
    0 => "Unit Testing",
    1 => "End To End",
    2 => "Integration"
  ]
]);
echo '<hr>';
