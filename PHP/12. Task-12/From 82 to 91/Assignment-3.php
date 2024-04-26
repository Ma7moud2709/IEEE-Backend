<?php 

$dir = 'Programming\PHP';
mkdir($dir,0711,true);

if(file_exists($dir)){
    rmdir($dir);
    echo "Directory Removed";
}