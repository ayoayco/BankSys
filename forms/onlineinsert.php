<?php

//connect to database
require_once('../connect/dbconnect.php');

//query string
$sql="INSERT INTO user_accounts (username, password, user_type) VALUES ('$_POST[uname]', md5('$_POST[pword]'), 'user')";

//execute query or die
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

//redirect to form
$_SESSION['successinsert'] = "true";
echo "<meta http-equiv='Refresh' content='0; url=online.php'>";

?>