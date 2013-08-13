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
$sql = "SELECT * FROM savings_accounts";
$results = mysql_query($sql) or die('Error: '.mysql_error());
echo '<table><tr><th></th>
<th>Name</th>
<th>Email Address</th>
</tr>';
while($rows = mysql_fetch_array($results)){
	echo '<tr>';
	echo '<td>'.++$count.'</td>';
	echo '<td>'.$rows[title]." ".$rows[fname]." ".$rows[minitial].". ".$rows[lname]." ".$rows[suffix].'</td>';
	echo '<td>'.$rows[email].'</td>';
	echo '</tr>';
}
echo '</table>';
?>

</div>

<?@include('parts/footer.php');?>

</body>
</html>