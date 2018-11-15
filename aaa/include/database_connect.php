<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "db";
  $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }



error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);


 $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "db";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));

?>