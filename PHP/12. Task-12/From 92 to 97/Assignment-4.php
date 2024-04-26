<?php
date_default_timezone_set("Africa/Cairo");

$date =date_create("1990-10-01");
$epoch=date_create("1970-01-01");
$diff = date_diff($date,$epoch);

$days = $diff->days;
$years = $diff->y;

echo "From Epoch Time Till 1990-10-01 Is Approximately $days Days <br>";
echo "From Epoch Time Till 1990-10-01 Is Approximately $years Years <br>";