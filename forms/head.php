<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?echo($pagename);?> | BankSys: Simple. Secure. Sure.</title>
	<link rel="stylesheet" type="text/css" href="../style.css" />
	<script src="../script/jquery.min.js" type="text/javascript"></script>
	<script src="../script/jquery.validate.pack.js" type="text/javascript"></script>
	<script type="text/javascript">
	    $(document).ready(function(){
		$("#contactform").validate();
	    });
	</script>
	<?@include('../parts/loginscript.php');?>
</head>