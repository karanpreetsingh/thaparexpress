<?
if(isset($_POST['ans']))
{
$un = ($_POST['ans']);
$error = array();
if (empty($_POST['ans'])) {//if the email supplied is empty 
        $error[] = 'You forgot to enter  your Email ';
    }
else if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['ans'])) {
           $error[] = 'Invalid Email!';
		   }
else
{


include ('config.php');

$query = "SELECT * FROM members WHERE Email = '$un'";
$result = mysql_query($query) ; 

if(!$result){
            $error[] = 'Invalid Email!';
        }
else
{		
$user = mysql_fetch_array($result) or die(mysql_error());
$uu = $user['Username'];
$up = $user['Password'];


	
		
	$message = " The password for username $uu is $up ";
                
                mail($un, 'Password', $message, '');
$error[] = 'Password sent via Email Successfully!';
				}}
echo '<div class="errormsgbox"> <ol>';
        foreach ($error as $key => $values) {
            
            echo '	<li>'.$values.'</li>';


       
        }
        echo '</ol></div>';

    }
?>
<!DOCTYPE html>
<html>
	
<head>
	<title>Thapar Express | Forgot</title>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="KoxyJJZ2Y3RvONGZBKpFKrEktEv-P63nxyoLdNTkh4Q" />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
	
				 <!-----start-main---->
				<div class="login-form">
					<a href="http://ThaparExpress.in/login/"><div class="head">
						<img src="images/tx.png" alt=""/>
						</div></a>
						<br>
				<form method="post" action="./forgot">
					<li>
						<input type="text" name="ans" id="ans" class="text" placeholder="EMAIL" ><a href="#" class=" icon user"></a>
					</li>
					<a href="./index">
					<span class="forgot_pass">Suddenly remembered?</span>
					</a>
							
					<div class="p-container">
								
								
								<input type="submit" onclick="myFunction()" class="log_button" value="SUBMIT" >
							<a   href="./register" class="reg_button">JOIN NOW</a>
							<div class="clear"> </div>
					</div>
				
					<div class="p-container">
					
					
					</div>
					
				</form>
			</div>
			<!--//End-login-form-->
		 
		 		
</body>
</html>