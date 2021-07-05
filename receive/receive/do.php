<?php
include("dbconnection.php");

/*
 Simple and easy for modification, PHP script for SMS receiving.
 Proovl SMS number with Mysql database connection. Receive SMS to database MySQL. 
 
 https://www.proovl.com/numbers
 https://www.facebook.com/2WaySMSGateway
 https://www.twitter.com/2waysms
 
 Video Istruction:
 https://www.youtube.com/watch?v=bdMM6O3uTl8
  
 Istruction:
 
1. Set up your database connection. File - (dbconnection.php)
2. Import Mysql table from sql file. File - (dbmysql.sql)
3. Connect “do.php” file with Proovl SMS number (forward sms to URL). File - (do.php)
4. Upload files on server. 
*/

$token = $_REQUEST['token'];
$phone = $_REQUEST['from'];
$text = $_REQUEST['text'];

if (($phone == "") AND ($text == "")) {

	echo "";
	
} else {

	$date = date('Y-m-d H:i:s');
	$sql = "INSERT INTO smsinbox (phone,text,date) VALUES (:phone,:text,:date)";
	$q = $CNT->prepare($sql);
	$q->execute(
	array(
	':phone'=>"$phone",
	':text'=>"$text",
	':date'=>"$date"
	)
	);	

}

?>