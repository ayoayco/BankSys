
<!--
<body>
<a name="top"></a>

<?@include('../parts/header.php');?>
<?@include('navmenu.php');?>


<div id="bodydiv">

  <?include('../parts/loginbody.php');?>
  <h2>Application Submission Success</h2>
  
  <p class="notice">Your application for a <?php
  
  switch($account_type){
      case "savings_accounts": echo "SAVINGS ACCOUNT";break;
      case "":;break;
  }
  
  ?> was successfully submitted and will be reviewed for approval. Please wait for an email that will be sent to "<?echo $_POST[email]?>" regarding your application.</p>

  <table>
    <tr>
      <td>Name:</td>
      <td><?echo $_POST[mrms]." ".$_POST[lname]." ".$_POST[mname].". ".$_POST[fname]." ".$_POST[suffix]?></td>
    </tr>
    <tr>
      <td>Mother's Maiden Name:</td>
      <td><?echo $_POST[momname]?></td>
    </tr>
    <tr>
      <td>Birth Day:</td>
      <td><?php
      
		switch($_POST[bmonth]){
		    case 1: echo "January"." ".$_POST[bday].", ".$_POST[byear]; break;
		    case 2: echo "February"." ".$_POST[bday].", ".$_POST[byear]; break;
		    case 3: echo "March"." ".$_POST[bday].", ".$_POST[byear]; break;
		    case 4: echo "April"." ".$_POST[bday].", ".$_POST[byear]; break;
		    case 5: echo "May"." ".$_POST[bday].", ".$_POST[byear]; break;
		    case 6: echo "June"." ".$_POST[bday].", ".$_POST[byear]; break;
		    case 7: echo "July"." ".$_POST[bday].", ".$_POST[byear]; break;
		    case 8: echo "August"." ".$_POST[bday].", ".$_POST[byear]; break;
		    case 9: echo "September"." ".$_POST[bday].", ".$_POST[byear]; break;
		    case 10: echo "October"." ".$_POST[bday].", ".$_POST[byear]; break;
		    case 11: echo "November"." ".$_POST[bday].", ".$_POST[byear]; break;
		    case 12: echo "December"." ".$_POST[bday].", ".$_POST[byear]; break;
		}
		
	   ?></td>
    </tr>
    <tr>
      <td>Gender:</td>
      <td><?if($_POST[sex] == "F") echo "Female"; else echo "Male";?></td>
    </tr>
    <tr>
      <td>Civil Status:</td>
      <td><?echo $_POST[status]?></td>
    </tr>
    <tr>
      <td>Nationality:</td>
      <td><?echo $_POST[nationality]?></td>
    </tr>
    <tr>
      <td>Tax Payer's ID Number:</td>
      <td><?echo $_POST[tin]?></td>
    </tr>
    <tr>
      <td>Occupation:</td>
      <td><?echo $_POST[occupation]?></td>
    </tr>
    <tr>
      <td>Number of Dependents:</td>
      <td><?echo $_POST[dependents]?></td>
    </tr>
    <tr>
      <td>E-mail Address:</td>
      <td><?echo $_POST[email]?></td>
    </tr>
    <tr>
      <td>Fax Number:</td>
      <td><?echo $_POST[fax]?></td>
    </tr>
    <tr>
      <td>Cellular Phone Number:</td>
      <td><?echo $_POST[celphone]?></td>
    </tr>
    <tr>
      <td>Mailing Address:</td>
      <td><?echo $_POST[billaddr]?></td>
    </tr>
    <tr>
      <td>Home Address:</td>
      <td><?echo $_POST[hstreet].", ".$_POST[hcity].", ".$_POST[hprovince]?></td>
    </tr>
    <tr>
      <td>Home Zip:</td>
      <td><?echo $_POST[hzip]?></td>
    </tr>
    <tr>
      <td>Home Phone:</td>
      <td><?echo $_POST[resphone]?></td>
    </tr>
    <tr>
      <td>Business Address:</td>
      <td><?echo $_POST[bstreet].", ".$_POST[bcity].", ".$_POST[bprovince]?></td>
    </tr>
    <tr>
      <td>Business Zip:</td>
      <td><?echo $_POST[bzip]?></td>
    </tr>
    <tr>
      <td>Business Phone:</td>
      <td><?echo $_POST[ofcphone]?></td>
    </tr>

  </table>

</div>

<?@include('../parts/footer.php');?>

</body>
</html>-->