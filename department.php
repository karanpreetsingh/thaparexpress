<?php 
   
$id=$_get['id'];

include('config.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Thapar Express | Departments</title>
        <meta name="description" content="One stop for all of Thapar. THAPAR EXPRESS" />
        <meta name="keywords" content="" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/component.css" />
        <script src="js/modernizr.custom.js"></script>
    </head>
    <body>
        <div class="container">
            
					<!-- here is the menu file -->
				<?php include('menu.php');?>
				
            

<!--THIS IS IT--><div class="content_main" >
                    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Choose a department</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Mechanical</a>
                    <a href="#" class="list-group-item">Electrical</a>
                    <a href="#" class="list-group-item">Computer Science</a>
                </div>
            </div>

                  <?php include('litsoc.html');?>
						
                </div>
                   <ol class="breadcrumb">
							<li><a href="index">Home</a></li>
							<li><a href="societies">Departments</a></li>
							
							<li class="active">Mechanical</li>
						</ol>
    <!-- Page Content -->
    
    </div>
    <!-- /.container -->
    </div>
    <!-- /.container -->
        </div><!-- /container -->
        <script src="js/classie.js"></script>
         <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
        
        <script>
            new gnMenu( document.getElementById( 'gn-menu' ) );
        </script>
    </body>
</html>
