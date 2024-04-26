<?php 
$fileSize = filesize('D:\Courses\Database\PostgerSQL\01.PostgreSQL_ What is a Database _ Course _ 2019(720P_HD).mp4');
echo "Size In Megabyte Is ". round($fileSize/1024/1024);
echo "<br>";
echo "Size In Kilobyte Is ". round($fileSize/1024);
