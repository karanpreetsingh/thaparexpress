<?php

ob_start();
    session_start();
if(isset($_SESSION['rollnum'])){
        header("Location: http://thaparexpress.in/index.php");
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
           
 header("Location: http://thaparexpress.in/index.php");
          

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

 header("Location: http://thaparexpress.in/login/index.php"); ?>