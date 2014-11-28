<!DOCTYPE html>
<html>
	
<head>
	<title>Thapar Express | Log In</title>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="KoxyJJZ2Y3RvONGZBKpFKrEktEv-P63nxyoLdNTkh4Q" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
		<link rel="shortcut icon" href="../favicon.ico">

		<link rel="stylesheet" type="text/css" href="../css/component.css" />
					<link href="css/style.css" rel='stylesheet' type='text/css' />

</head>
<body>
				
					<!-- here is the menu file -->
				<?php include('../menu.php');?>

				 <!-----start-main---->
				<div class="reg-form">
				
				<form method="post" action="reg" autocomplete="on">
					<li>
						<input type="text"  id="name" name="name" required="required"  class="text" placeholder="Name"  >
					</li>
						
							
					
					<li>
							<select name="hostel">
							<option value="0">Hostel</option>
							<option value="1">A</option>
							<option value="1">B</option>
							<option value="1">C</option>
							<option value="1">E</option>
							<option value="1">G</option>
							<option value="1">H</option>
							<option value="1">I</option>
							<option value="1">FRC</option>
							<option value="1">Day Scholar</option>
							</select>
							
					</li>
					
					
			
					</li>
					<li>
						<input type="text"   required="required" id="email" name="email" class="text" placeholder="E-mail"  ><a  class=" icon user"></a>
					</li>
					<li>
						<input type="text"   required="required" id="mobile" name="mobile" class="text" placeholder="Contact Number"  >
					</li>
					<li>
						<input type="text"   required="required" id="rollnum" name="rollnum" class="text" placeholder="Roll Number"  >
					</li>
					<li>
						<input id="password"  required="required"  name="password" type="password" placeholder ="Password" > 
					</li>
					<li>
						
						<input type="hidden" name="formsubmitted" value="TRUE" />
					</li>
					
								
					<div class="p-container">
								
								
								<input type="submit" onclick="myFunction()" class="log_button" value="Register" >
							<a   href="./index" class="reg_button">Back</a>
							<div class="clear"> </div>
					</div>
				
					<div class="p-container">
					
					
					</div>
					
				</form>
			</div>
			<!--//End-login-form-->
			
			<script src="../js/classie.js"></script>
			<script src="../js/modernizr.custom.js"></script>
  
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>

		  
		  
		 		
</body>
</html>