<?php

//connect to database
require_once('../connect/dbconnect.php');

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
 		if($rows['user_type'] != 'user'){
 		  header("location:index2.php");
 		}
 	  }
 	}
 	
  echo "Session username: ".$myusername."<br />PAGE UNDER CONSTRUCTION.";

$sql = "UPDATE savings_accounts SET 
title = '$_POST[mrms]',
lname = '$_POST[lname]',
fname = '$_POST[fname]',
minitial = '$_POST[mname]',
suffix = '$_POST[suffix]',
momname = '$_POST[momname]',
birthmonth = '$_POST[bmonth]',
birthday = '$_POST[bday]',
birthyear = '$_POST[byear]',
sex = '$_POST[sex]',
civilstatus = '$_POST[status]',
nationality = '$_POST[nationality]',
tin = '$_POST[tin]',
occupation = '$_POST[occupation]',
dependents = '$_POST[dependents]',
email = '$_POST[email]',
faxnumber = '$_POST[fax]',
cellnumber = '$_POST[celphone]',
mailingaddress = '$_POST[billaddr]',
homestreet = '$_POST[hstreet]',
homecity = '$_POST[hcity]',
homeprovince = '$_POST[hprovince]',
homezip = '$_POST[hzip]',
homephone = '$_POST[resphone]',
bizstreet = '$_POST[bstreet]',
bizcity = '$_POST[bcity]',
bizprovince = '$_POST[bprovince]',
bizzip = '$_POST[bzip]',
bizphone = '$_POST[ofcphone]',
refbranch = '$_POST[refBranch]',
refbranchcode = '$_POST[refBranchCode]',
refemployee = '$_POST[refemployee]'
WHERE uname = '$myusername'";

$result = mysql_query($sql) or die('Error: '.mysql_error());
$rows = mysql_fetch_array($result);

// echo $sql;

header("location: ../user.php");
?>
