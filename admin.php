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
<?@include('parts/adminnavmenu.php');?>

<div id="bodydiv">

<h2>Welcome, Administrator (<?echo $_SESSION['myusername']?>)!</h2>

<!-- list applications for approval -->
<?php

$count = 0;
$sql = "SELECT * FROM savings_accounts WHERE approved = 'FALSE'";
$results = mysql_query($sql) or die('Error: '.mysql_error());
echo '<h3>Pending Applications:</h3><table style="width: 650px;"><tr><th></th>
<th>Name</th>
<th>Email Address</th>
<th>Action</th>
</tr>';
while($rows = mysql_fetch_array($results)){
	echo '<tr>';
	echo '<td>'.++$count.'</td>';
	echo '<td>'.$rows[title]." ".$rows[fname]." ".$rows[minitial].". ".$rows[lname]." ".$rows[suffix].'</td>';
	echo '<td>'.$rows[email].'</td>';
	echo '<td><a href="viewdetails.php?id='.$rows[id].'">View</a> | <a href="approve.php?id='.$rows[id].'">Approve</a> | <a href="disapprove.php?id='.$rows[id].'">Disapprove</a></td>';
	echo '</tr>';
}
echo '</table>';

$count = 0;
$sql = "SELECT * FROM savings_accounts WHERE approved = 'APPROVED'";
$results = mysql_query($sql) or die('Error: '.mysql_error());
echo '<h3>Approved Applications:</h3><table style="width: 650px;"><tr><th></th>
<th>Name</th>
<th>Email Address</th>
<th>Actions</th>
</tr>';
while($rows = mysql_fetch_array($results)){
	echo '<tr>';
	echo '<td>'.++$count.'</td>';
	echo '<td>'.$rows[title]." ".$rows[fname]." ".$rows[minitial].". ".$rows[lname]." ".$rows[suffix].'</td>';
	echo '<td>'.$rows[email].'</td>';
	echo '<td><a href="viewdetails.php?id='.$rows[id].'">View</a> | <a href="backtopending.php?id='.$rows[id].'">Move back to Pending</a></td>';
	echo '</tr>';
}
echo '</table>';

?>

</div>

<?@include('parts/footer.php');?>

</body>
</html>