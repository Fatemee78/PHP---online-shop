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

#  mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_SCHEMA);

    define("DB_HOST","localhost");
    define("DB_USER","root");
    define("DB_PASSWORD","");
    define("DB_SCHEMA","orzalaa");

   $GLOBALS['DB'] = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_SCHEMA);

   if(!$GLOBALS['DB']){
       echo "debugging err " .mysqli_connect_errno();
       echo "<br>The error is : " .mysqli_connect_error();
       exit( "<br>connected faild ");

   }else{
    //    echo "connected to database...............!";
   }


#object oriented connection
//    $db =  new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_SCHEMA);
// if($db ->connect_error){
//     echo "not found" ;
// } else{
//     echo "connected...............!";

// }

?>