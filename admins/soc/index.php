<?php

ob_start();
    session_start();
if(isset($_SESSION['username'])){
         header("Location: http://thaparexpress.in/add.php");
    exit();
}?>
<!DOCTYPE html>
<html>
	
<head>
	<title>Thapar Express | Log In</title>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="KoxyJJZ2Y3RvONGZBKpFKrEktEv-P63nxyoLdNTkh4Q" />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	
				 <!-----start-main---->
				
				<div class="login-form">
						<a><div class="head">
						<img src="images/tx.png" alt="tx"/>
						</a>
					</div>
				
				<form method="post" action="login.php">
				
					<li>
						<input name="username" required="required" id="username" type="text" class="text"  placeholder="Admin Username">
					</li>
					<li>
						<input name="password" required="required"  id="password" type="password" placeholder="Password" }">
					</li>
					
					
								<input type="hidden" name="formsubmitted" value="TRUE" />
					<div class="p-container">
								<a   href="../login/index.php" class="reg_button">User Login</a>
								<input type="submit" onclick="myFunction()" class="log_button" value="Sign In" >
								
								<div class="clear"> </div>
					</div>
				
					<div class="p-container">
					
					
					</div>
					
				</form>
			</div>
			<!--//End-login-form-->
		  
		 		
</body>
</html>
</html>