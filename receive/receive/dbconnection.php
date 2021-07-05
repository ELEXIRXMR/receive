<?php
$host = "localhost"; // host
$dbname = "*****"; // database name
$user = "*****"; // username
$pass = "*****"; // password

try {
  $CNT = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $CNT->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
}  
catch(PDOException $e) {  
    echo $e->getMessage();  
}


?>