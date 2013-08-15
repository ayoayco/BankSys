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
 		if($rows['user_type'] != 'user'){
 		  header("location:index2.php");
 		}
 	  }
 	}
 	
 

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Home | BankSys: Simple. Secure. Sure.</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
</head>

<body>
<a name="top"></a>

<? @include('parts/header.php');?>
<?php
	//get user applications
	$sql = "SELECT * FROM savings_accounts WHERE id = '$_GET[id]'";
	$result = mysql_query($sql, $con) or die('Error: ' . mysql_error());
	if($rows = mysql_fetch_array($result)){
// 		echo $rows['user_type'];
		$title		=$rows[title];
		$lname		=$rows[lname];
		$fname		=$rows[fname];
		$minitial	=$rows[minitial];
		$suffix		=$rows[suffix];
		$momname		=$rows[momname];
		$birthmonth	=$rows[birthmonth];
		$birthday	=$rows[birthday];
		$birthyear	=$rows[birthyear];
		$sex		=$rows[sex];
		$civilstatus	=$rows[civilstatus];
		$nationality	=$rows[nationality];
		$tin		=$rows[tin];
		$occupation	=$rows[occupation];
		$dependents	=$rows[dependents];
		$email		=$rows[email];
		$faxnumber	=$rows[faxnumber];
		$cellnumber	=$rows[cellnumber];
		$mailingaddress	=$rows[mailingaddress];
		$homestreet	=$rows[homestreet];
		$homecity	=$rows[homecity];
		$homeprovince	=$rows[homeprovince];
		$homezip		=$rows[homezip];
		$homephone	=$rows[homephone];
		$bizstreet	=$rows[bizstreet];
		$bizcity		=$rows[bizcity];
		$bizprovince	=$rows[bizprovince];
		$bizzip		=$rows[bizzip];
		$bizphone	=$rows[bizphone];
		$approved	=$rows[approved];
		$refbranch	=$rows[refbranch];
		$refbranchcode	=$rows[refbranchcode];

	}
// 	echo $sql;
// 	echo "<br /><br />$myusername!";
?>


<div id="bodydiv">
<h2>View Application Details</h2>
<table>
	<tr>
		<td><ul>
			<li>&rarr; <a href="user.php">Back</a></li>
			<li>&rarr; <a href="forms/savingsupdate.php?id=<?echo $rows[id]?>">Edit My Information</a></li>
			</ul>
		</td>
	</tr>
</table>
 <?@include('userdetails.php');?>

</div>

<?@include('parts/footer.php');?>

</body>
</html>