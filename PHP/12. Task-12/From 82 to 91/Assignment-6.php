<?php

$fileName = fopen('Elzero.txt', 'r');

// Method 1
echo fread($fileName, 24) . "<br>";

// Method 2
rewind($fileName);

echo fgets($fileName);
echo fgets($fileName) . "<br>";

// Method 3

rewind($fileName);

for ($i = 0; $i <= mb_strlen("Hello Elzero Web School", '8bit'); $i++) {
    echo fgetc($fileName) ;
}
echo "<br>";
fclose($fileName);
// Method 4

echo file_get_contents('Elzero.txt',true,null,0,24);


