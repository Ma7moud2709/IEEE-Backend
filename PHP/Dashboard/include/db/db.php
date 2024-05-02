<?php 

$dsn = "pgsql:host=localhost;dbname=dashboard;";
$user ="postgres";
$pass = "Ma7moud09"; 
$option = array(

        PDO::MYSQL_ATTR_INIT_COMMAND =>("SET NAMES  utf8"), 
);

try {
    $connect = new PDO($dsn,$user,$pass,$option);
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){
    echo "Failed to connect database " . $e->getMessage() ;
}


?> 