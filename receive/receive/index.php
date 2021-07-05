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



$DTN = $CNT->query("select * from smsinbox ORDER BY id");  
$msg = $DTN->rowCount();

echo "<div width=\"auto\" align=\"center\">";
echo "Inbox: <b>$msg</b> text messages  <a style=\"background-color: #4CAF50;border:none;color: white;padding: 5px 11px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;\" href=\"$PHP_SELF\">Refresh</a> <br>";

  
if($msg > 0){ 

echo "<table cellpadding=\"10\" cellspacing=\"0\" style=\"border-color: #666666;border-width: 1px;padding:5px;border: 0px solid #666666;\">"
 ."<tr style=\"text-align:center;font-weight: bold; background-color: #ebf4fb;\"><td>Id</td><td>Phone</td><td>Text</td><td>Time</td></tr>";

	while($row = $DTN->fetch()) {
	
		echo "<tr>"
		."<td style=\"background-color:#efefef;\">$row[id]</td>"
		."<td style=\"background-color:#efefef;\">$row[phone]</td>"
		."<td style=\"background-color:#efefef;\">$row[text]</td>"
		."<td style=\"background-color:#efefef;\">$row[date]</td>"
		."</tr>";
		
	}

echo "</form>"
	."</table>"
	."</div><br>"
	."</td>"
	."</table>";
	
} else { 
	echo "<br><br><div style=\"width:20%;background-color: #efefef;padding: 8px 36px;\">inbox is empty<div>";
}

echo "</div>";
?>