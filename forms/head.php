<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?echo($pagename);?> | BankSys: Simple. Secure. Sure.</title>
	<link rel="stylesheet" type="text/css" href="../style.css" />
	<script src="../script/jquery.min.js" type="text/javascript"></script>
	<script src="../script/jquery.validate.pack.js" type="text/javascript">
	<script src="script.js" type="text/javascript">
	</script><script type="text/javascript" src="../script.js"></script>
	<script type="text/javascript">
	    $(document).ready(function(){
		$("#contactform").validate();
	    });
	</script>
	<?@include('../parts/loginscript.php');?>
	
	<style>
		#username{
			padding:3px;
			font-size:18px;
			border:3px #CCC solid;
		}
		
		#email{
			padding:3px;
			font-size:18px;
			border:3px #CCC solid;
		}

		#tick{display:none}
		#cross{display:none}
		#tick2{display:none}
		#cross2{display:none}
			

	</style>
	<script>
		$(document).ready(function(){
			$('#username').keyup(username_check);
			$('#email').keyup(email_check);
			
		});
		
		function username_check(){	
			var username = $('#username').val();
			if(username == ""){
				$('#username').css('border', '3px #CCC solid');
				$('#tick').hide();
				$('#tick').hide();
				$('#submit1').hide();
			}else{
				jQuery.ajax({
					type: "POST",
					url: "../check.php",
					data: 'username='+ username,
					cache: false,
					success: function(response){
					if(response == 1){
						$('#username').css('border', '3px #C33 solid');	
						$('#tick').hide();
						$('#cross').fadeIn();
						}else{
						$('#username').css('border', '3px #090 solid');
						$('#cross').hide();
						$('#tick').fadeIn();
						}

					}
				});
			}
		}
		
		function email_check(){	
			var email = $('#email').val();
			if(email == ""){
				$('#email').css('border', '3px #CCC solid');
				$('#tick2').hide();
				$('#submit1').hide();
			}else{
				jQuery.ajax({
					type: "POST",
					url: "../checkemail.php",
					data: 'email='+ email,
					cache: false,
					success: function(response){
					if(response == 1){
						$('#email').css('border', '3px #C33 solid');	
						$('#tick2').hide();
						$('#cross2').fadeIn();
						}else{
						$('#email').css('border', '3px #090 solid');
						$('#cross2').hide();
						$('#tick2').fadeIn();
						}

					}
				});
			}
		}

	</script>
</head>