<?php 

date_default_timezone_set('Africa/Cairo');
$date = strtotime('1990-10-01');
$epoch = strtotime(time());

$diff = $date - $epoch ; 

$days = number_format($diff/60/60/24, 1);
$years = number_format($diff/60/60/24/365, 1);
echo "From Epoch Time Till 1990-10-01 Is Approximately $days Days <br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $years Years";
