<?php 
ob_start();
    session_start();
if(isset($_SESSION['blogger']))
{
         session_destroy();
}
header("Location: index");
?>