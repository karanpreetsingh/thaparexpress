<?php

ob_start();
    session_start();
if(isset($_SESSION['rollnum'])){
        echo '<meta http-equiv="refresh" content="0; url=http://thaparexpress.in">';
    exit();

}
$aa=0;
include ('config.php');
if (isset($_POST['formsubmitted'])) {
    // Initialize a session:
session_start();
    $error = array();//this array will store all error messages
	

    if (empty($_POST['rollnum'])) {//if the email supplied is empty 
        $error[] = 'You forgot to enter  your Email ';
    } 	else {        $rollnum = $_POST['rollnum'];    }


    if (empty($_POST['password'])) {
        $error[] = 'Please Enter Your password ';
    } else {
        $password = $_POST['password'];
    }


       if (empty($error))//if the array is empty , it means no error found
    { 

       

        $query_check_credentials = "SELECT * FROM members WHERE (rollnum='$rollnum' AND password='$password') AND Activation IS NULL";
   
        

        $result_check_credentials = mysqli_query($dbc, $query_check_credentials);
        if(!$result_check_credentials){//If the QUery Failed 
            echo 'Query Failed ';
        }

        if (@mysqli_num_rows($result_check_credentials) == 1)//if Query is successfull 
        { // A match was made.

           


            $_SESSION = mysqli_fetch_array($result_check_credentials, MYSQLI_ASSOC);//Assign the result of this query to SESSION Global Variable
           
?><meta http-equiv="refresh" content="0; url=<?echo $site?>"><?
          

        }else
        { 
            
            $msg_error= 'Either Your Account is inactive or rollnum /password is Incorrect';
        }

    }  else {
        
        

echo '<div class="errormsgbox"> <ol>';
        foreach ($error as $key => $values) {
            
            echo '	<li>'.$values.'</li>';
       }
        echo '</ol></div>';
    }
   if(isset($msg_error)){
        $aa=1;  
  }
    /// var_dump($error);
    mysqli_close($dbc);

} // End of the main Submit conditional.
?>



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
					<a href="http://ThaparExpress.in/login/"><div class="head">
						<img src="images/tx.png" alt="tx"/>
						
					</div></a>
				
				<form method="post" action="./index">
					<li>
						<input name="rollnum" required="required" id="rollnum" type="text" class="text"  placeholder="ROLL NUMBER"><a  class=" icon user"></a>
					</li>
					<li>
						<input name="password" required="required"  id="password" type="password" placeholder="PASSWORD" }"><a class=" icon lock"></a>
					</li>
					<a href="./forgot">
					<span class="forgot_pass">Forgot password?</span>
					</a>
					
								<input type="hidden" name="formsubmitted" value="TRUE" />
					<div class="p-container">
								
								<input type="submit" onclick="myFunction()" class="log_button" value="Sign In" >
								
								<a   href="./register.html" class="reg_button">Join Now</a>
								
								
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