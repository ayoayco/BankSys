<?php

//connect to database
require_once('../connect/dbconnect.php');

$account_type = "savings_accounts";

$email = $_POST['email'];

//query strings
$sql="INSERT INTO ".$account_type." (title, lname, fname, minitial, suffix, momname, birthmonth, birthday, birthyear, sex, civilstatus, nationality, tin, occupation, dependents, email, faxnumber, cellnumber, mailingaddress, homestreet, homecity, homeprovince, homezip, homephone, bizstreet, bizcity, bizprovince, bizzip, bizphone, refbranch, refbranchcode, refemployee, uname) VALUES ('$_POST[mrms]', '$_POST[lname]', '$_POST[fname]', '$_POST[mname]', '$_POST[suffix]', '$_POST[momname]', '$_POST[bmonth]', '$_POST[bday]', '$_POST[byear]', '$_POST[sex]', '$_POST[status]', '$_POST[nationality]', '$_POST[tin]', '$_POST[occupation]', '$_POST[dependents]', '$_POST[email]', '$_POST[fax]', '$_POST[celphone]', '$_POST[billaddr]', '$_POST[hstreet]', '$_POST[hcity]', '$_POST[hprovince]', '$_POST[hzip]', '$_POST[resphone]', '$_POST[bstreet]', '$_POST[bcity]', '$_POST[bprovince]', '$_POST[bzip]', '$_POST[ofcphone]', '$_POST[refBranch]', '$_POST[refBranchCode]', '$_POST[refemployee]', '$_POST[uname]')";

$sql2 = "INSERT INTO user_accounts (username, password, user_type, email) VALUES ('$_POST[uname]', md5('$_POST[pword]'), 'user', '$_POST[email]')";


	//execute query or die
	if (!mysql_query($sql,$con)){
	die('Query 1 Error: ' . mysql_error());
	}
	
	if (!mysql_query($sql2,$con)){
	die('Query 2 Error: ' . mysql_error());
	}
	

//login new user
session_start();
$_SESSION['myusername'] = $_POST['uname'];
echo $_SESSION['myusername'];
header("location:../user.php");


?>