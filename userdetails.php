<?php
  if($approved == "FALSE")
	$approved_stat = 'Waiting for approval';
  else if($approved == "APPROVED")
	$approved_stat = 'Approved!';
	
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