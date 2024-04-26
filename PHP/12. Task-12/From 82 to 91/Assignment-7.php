<?php

$str = implode("", file('Elzero2.txt'));
$fileName = fopen('Elzero2.txt', 'w');
$str = str_replace('Osamaa', "Elzero", $str);
fwrite($fileName, $str, strlen($str));
echo fread($fileName,1024);
fclose($fileName);
