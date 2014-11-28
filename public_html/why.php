<?php 
    ob_start();
    session_start();
if(!isset($_SESSION['Username'])){
        echo '<meta http-equiv="refresh" content="0; url=http://thaparexpress.in/login">';
    exit();

}
include('config.php')
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Thapar Express | Why?</title>
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
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								
								<li><a href="index.php" class="gn-icon gn-icon-cog">Home</a></li>
								<li><a  class="gn-icon gn-icon-cog">Societies</a>
								 <ul class="gn-submenu">
                                        <li><a href="soc_casual.php" class="gn-icon gn-icon-photoshop">Casual</a></li>
                                        <li><a href="soc_tech.php" class="gn-icon gn-icon-photoshop">Technical</a></li>
                                        <li><a href="soc_dept.php" class="gn-icon gn-icon-photoshop">Departmental</a></li>
                                    </ul></li>
                                <li><a href="events_all.php" class="gn-icon gn-icon-cog">Events</a></li>
								<li><a href="pictures.php" class="gn-icon gn-icon-cog">Pictures</a></li>
								 					
								<li><a href="blog.php" class="gn-icon gn-icon-cog">Blog</a></li>
																
								<li><a href="logout.php" class="gn-icon gn-icon-cog">Log Out</a></li>
								
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				
				<li class="hero"><a class="codrops-icon codrops-icon-prev" href="http://thaparexpress.in/Home/"><span>THAPAR EXPRESS</span></a></li>
				<li><a class="codrops-icon codrops-icon-drop" href="why.php"><span> Why?</span></a></li>
			</ul>
			

<!--THIS IS IT--><div class="content_main" >
					<div class="row">
           				 <div class="col-lg-12">
              	 			 <h1 class="page-header">Why?
                  		 	 
        		       		 </h1>
      		  		    </div>
						<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
  
						<li class="active">Why?</li>
						</ol>
    		    </div>
				
				<div>
				<center>
				<img src="../images/aboutus.png">
				</center>

				</div>
		</div><!-- /container -->

		</div><!-- /container -->
		<script src="js/classie.js"></script>
		
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
