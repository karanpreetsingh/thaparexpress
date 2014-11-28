<?php 
  
$id=$_GET['id'];

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Thapar Express |</title>
		<meta name="description" content="A sidebar menu as seen on the Google Nexus 7 website" />
		<meta name="keywords" content="" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css">
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			
					<!-- here is the menu file -->
				<?php include('menu.php');?>
				
<!--THIS IS IT--><div class="content_main" >
                    <ol class="breadcrumb">
							<li><a href="index">Home</a></li>
							<li><a href="societies">Departments</a></li>
							
							<li class="active">Mechanical</li>
						</ol>
						<div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Choose a department</p>
                <div class="list-group">
                    <a href="societies?id=tech" class="list-group-item active" >Technical</a>
                    <a href="societies?id=dep" class="list-group-item  " >Departmental</a>
                    <a href="societies?id=cul" class="list-group-item ">Cultural</a>
                    <a href="societies?id=sc" class="list-group-item  ">Student Chapters</a>

                </div>
            </div>
						<div class="col-md-9">
				<?php 
				include('societies_cul.php'); ?>
				
                        </div>
                  
    <!-- Page Content -->
    
    </div>
    <!-- /.container -->
    </div>
    <!-- /.container -->
        </div><!-- /container -->
		<script src="js/classie.js"></script>
		
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
