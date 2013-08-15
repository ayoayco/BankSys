<?php
include("dbConnector.php");
$connector = new DbConnector();

$email = trim(strtolower($_POST['email']));
$email = mysql_escape_string($email);

$query = "SELECT email FROM user_accounts WHERE email = '$email' LIMIT 1";
$result = $connector->query($query);
$num = mysql_num_rows($result);

echo $num;
mysql_close();
