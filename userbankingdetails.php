<?php
  if($approved == "FALSE")
	$approved_stat = 'Waiting for approval';
  else if($approved == "APPROVED")
	$approved_stat = 'Approved!';
	
?>

<h3>Savings Account Application Status: <span style="color: red;"><?echo $approved_stat?></span></h3>

<a href="viewmydetails.php?id=<?echo $rows[id]?>">View Details</a>

