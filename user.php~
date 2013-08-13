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
<?@include('parts/usernavmenu.php');?>

<?php
	//get user applications
	$sql = "SELECT * FROM savings_accounts WHERE uname = '$myusername'";
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
<h2>Welcome, <?echo $fname?> (<?echo $myusername?>)</h2>

<div class="notice">
    <p>You are now logged in. You will be notified here when your application is approved.</p>
    <ul>
	<li>&rarr; <a href="forms/savingscancel.php">Cancel Application</a></li>
	<li>&rarr; <a href="forms/savingsupdate.php?id=<?echo $rows[id]?>">Edit Application</a></li>
    </ul>
</div>

<?php
  if($approved == "FALSE")
	$approved_stat = 'Waiting for approval';
  else if($approved == "APPROVED")
	$approved_stat = 'Approved!';
  else if($approved == "DISAPPROVED")
	$approved_stat = 'Disapproved!';
	
?>

<h3>Savings Account Application Status: <span style="color: red;"><?echo $approved_stat?></span></h3>


  <table>
    <tr>
      <td width="220px">Name:</td>
      <td><?echo $rows[title]." ".$rows[fname]." ".$rows[minitial].". ".$rows[lname]." ".$rows[suffix]?></td>
    </tr>
    <tr>
      <td>Mother's Maiden Name:</td>
      <td><?echo $rows[momname]?></td>
    </tr>
    <tr>
      <td>Birth Day:</td>
      <td><?php
      
		switch($rows[birthmonth]){
		    case 1: echo "January"." ".$rows[birthday].", ".$rows[birthyear]; break;
		    case 2: echo "Fe$fnamebruary"." ".$rows[birthday].", ".$rows[birthyear]; break;
		    case 3: echo "March"." ".$rows[birthday].", ".$rows[birthyear]; break;
		    case 4: echo "April"." ".$rows[birthday].", ".$rows[birthyear]; break;
		    case 5: echo "May"." ".$rows[birthday].", ".$rows[birthyear]; break;
		    case 6: echo "June"." ".$rows[birthday].", ".$rows[birthyear]; break;
		    case 7: echo "July"." ".$rows[birthday].", ".$rows[birthyear]; break;
		    case 8: echo "August"." ".$rows[birthday].", ".$rows[birthyear]; break;
		    case 9: echo "September"." ".$rows[birthday].", ".$rows[birthyear]; break;
		    case 10: echo "October"." ".$rows[birthday].", ".$rows[birthyear]; break;
		    case 11: echo "November"." ".$rows[birthday].", ".$rows[birthyear]; break;
		    case 12: echo "December"." ".$rows[birthday].", ".$rows[birthyear]; break;
		}
		
	   ?></td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td><?if($rows[sex] == "F") echo "Female"; else echo "Male";?></td>
    </tr>
    <tr>
      <td>Civil Status:</td>
      <td><?echo $rows[civilstatus]?></td>
    </tr>
    <tr>
      <td>Nationality:</td>
      <td><?echo $rows[nationality]?></td>
    </tr>
    <tr>
      <td>Tax Payer's ID Number:</td>
      <td><?echo $rows[tin]?></td>
    </tr>
    <tr>
      <td>Occupation:</td>
      <td><?echo $rows[occupation]?></td>
    </tr>
    <tr>
      <td>Number of Dependents:</td>
      <td><?echo $rows[dependents]?></td>
    </tr>
    <tr>
      <td>E-mail Address:</td>
      <td><?echo $rows[email]?></td>
    </tr>
    <tr>
      <td>Fax Number:</td>
      <td><?echo $rows[faxnumber]?></td>
    </tr>
    <tr>
      <td>Cellular Phone Number:</td>
      <td><?echo $rows[cellnumber]?></td>
    </tr>
    <tr>
      <td>Mailing Address:</td>
      <td><?echo $rows[mailingaddress]?></td>
    </tr>
    <tr>
      <td>Home Address:</td>
      <td><?echo $rows[homestreet].", ".$rows[homecity].", ".$rows[homeprovince]?></td>
    </tr>
    <tr>
      <td>Home Zip:</td>
      <td><?echo $rows[homezip]?></td>
    </tr>
    <tr>
      <td>Home Phone:</td>
      <td><?echo $rows[homephone]?></td>
    </tr>
    <tr>
      <td>Business Address:</td>
      <td><?echo $rows[bizstreet].", ".$rows[bizcity].", ".$rows[bizprovince]?></td>
    </tr>
    <tr>
      <td>Business Zip:</td>
      <td><?echo $rows[bizzip]?></td>
    </tr>
    <tr>
      <td>Business Phone:</td>
      <td><?echo $rows[bizphone]?></td>
    </tr>
    <tr>
      <td>Referral Branch:</td>
      <td><? if($rows[refbranch]=="") echo "None"; else echo $rows[refbranch]?></td>
    </tr>
    <tr>
      <td>Referral Branch Code:</td>
      <td><? if($rows[refbranchcode]=="") echo "None"; else echo $rows[refbranchcode]?></td>
    </tr>
    <tr>
      <td>Referral Employee:</td>
      <td><? if($rows[refemployee]=="") echo "None"; else echo $rows[refemployee]?></td>
    </tr>

  </table>



</div>

<?@include('parts/footer.php');?>

</body>
</html>