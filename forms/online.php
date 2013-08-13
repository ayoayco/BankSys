<?php
$pagename = 'Online Account Application';
@include('head.php');
?>


<body>
<a name="top"></a>

<?@include('../parts/header.php');?>
<?@include('navmenu.php');?>

    <div id="bodydiv">
	<h2>Online Account Application Form</h2>
	<form method="post" action="onlineinsert.php" id="contactform">
	<fieldset>
		<table>
		<tr>
		  <td>Username:</td>
		  <td><input id="uname" name="uname" size="8"  class="required" /></td>
		</tr>
		<tr>
		  <td>Password:</td>
		  <td><input id="pword" name="pword" type="password" size="8"  class="required" /></td>
		</tr>
		</table>
	</fieldset>
	<br />
	<br />
	
	<div id="submitclass">
		<input type="submit" value="Submit" id="submit1" name="smethod" />
	</div>
	</form>
    </div>

<?@include('../parts/footer.php');?>
</body>
</html>