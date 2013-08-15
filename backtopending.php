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

$sql = "UPDATE savings_accounts SET approved = 'FALSE' WHERE id = '$id'";

$result = mysql_query($sql) or die("Error: ".mysql_error());

header("location: admin.php");

?>