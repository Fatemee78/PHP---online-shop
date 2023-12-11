<?php 

//check fod production error
    define("Is_ENVIRONMET_PRODUCTION",TRUE);

    If(!Is_ENVIRONMET_PRODUCTION){
        error_reporting(E_ALL & ~E_WARNING);

    }
//display errors
ini_set("display_errors", Is_ENVIRONMET_PRODUCTION);

//error logs

ini_set("error_log","../log/log.txt");

//timezone
date_default_timezone_set("Asia/Kabul");

//connect to database by PDO library

$host = "localhost";
$user = "root";
$password = "";
$database = "";

try{
    $connection = new PDO("mysql: host = $host;dbName =$database ", $user, $password);
    echo "successfully connected.......!";
}catch(PDOExeption $error){
    echo "connection faild.......!".$error->getMessage();
}
?>