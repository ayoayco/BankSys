<?php
	$host="localhost"; // Host name 
	$username="banksys-user"; // Mysql username 
	$password="UR9dUn28LBcAa4Kh"; // Mysql password 
	$db_name="bank_it210"; // Database name 

	// Connect to server and select databse.
	$con = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");
?>