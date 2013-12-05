<?php

//connect to database
require_once('connect/dbconnect.php');

//get login input
$myusername = $_POST['myusername'];
$mypassword = md5($_POST['mypassword']);

	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);

echo "username: ".$_POST['myusername']."<br />password: ".$_POST['mypassword'];

//check if login input is in db
$sql="SELECT * FROM user_accounts WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);
	

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
		session_start();
		$_SESSION['myusername'] = $_POST['myusername'];
		//header("location:success.php");
		if($row = mysql_fetch_array($result)){
			if($row['user_type']=="admin"){
				header("location:admin.php");}
			else{
				header("location:user.php");
			}
		}
	}
	else {
		echo "<meta http-equiv='Refresh' content='0; url=index2.php'>";
	}

?>