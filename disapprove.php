<?php

//connect to database
require_once('connect/dbconnect.php');

session_start();

 $myusername = $_SESSION['myusername'];
	session_start();
	if(! isset( $_SESSION['myusername'] ) ){
	  header("location:index2.php");
 	}

 	$sql = "select * from user_accounts";
 	$result = mysql_query($sql);
 	while($rows = mysql_fetch_array($result)){
 	  if($rows['username']==$_SESSION['myusername']){
 		if($rows['user_type'] != 'admin'){
 		  header("location:index2.php");
 		}
 	  }
 	}
 	
 
$id = $_GET[id];


//delete user account
$sql = "DELETE FROM user_accounts WHERE username IN (SELECT uname FROM savings_accounts WHERE id = '$id')";
$result = mysql_query($sql) or die("Error: ".mysql_error());

//delete application
$sql = "DELETE FROM savings_accounts WHERE id = '$id'";
$result = mysql_query($sql) or die("Error: ".mysql_error());

header("location: admin.php");

?>