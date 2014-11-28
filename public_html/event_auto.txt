<?php 
    ob_start();
    session_start();
if(!isset($_SESSION['rollnum'])){
        $log=0;}
    else $log=1;


include('config.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Thapar Express | Notices</title>
		<meta name="description" content="One stop for all of Thapar. THAPAR EXPRESS" />
		<meta name="keywords" content="" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">

		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/timeline.css">
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
					<!-- here is the menu file -->
				<?php include('menu.php');?>
				
			
<!--THIS IS IT--><div class="content_main" >
					 <div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">Dashboard</h1>
							
						<ol class="breadcrumb">
							<li><a href="index">Home</a></li>
							
							<li class="active">Notices</li>
						</ol>
						</div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="not_time">
                    
            <div class="row">
                
                            <ul class="timeline"><li class="timeline-inverted">
                                    <div class="timeline-badge primary"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">INFORMALS@Chakravyuh</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>13-16th October (5:00PM onwards)<br>K lawns<br>Check Out the amazing fun waiting for you.</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>   
                                  <li >
                                    <div class="timeline-badge danger"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">CHAKRAVYUH</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>11-14th October<br>The Biggest Intra College Tech Fest of Thapar University</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>

                                 <li class="timeline-inverted">
                                    <div class="timeline-badge primary"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Ex-Quiz-Eat 3.0</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>14th October (5:30PM onwards)<br>Kababchi<br>Participate and get your food an Prizes.</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>   
                                  <li >
                                    <div class="timeline-badge danger"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Cineates</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>13th October (5:00PM)<br>E-103<br>Calling Out to every one interested in Movie making,photography and Graphic Design.</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>
                                 <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Robotics Workshop (6th sense)</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>18-19th October (9:00AM-5:00PM)<br>T-105<br>1100/- per head<br>The robotics workshop will introduce you to the basics and help you evolve in the feild of robotic devices</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>   
                                  <li >
                                    <div class="timeline-badge info"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Explore the wilderness at Ranthambore</h4></h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>6-8th November<br>BThis three days and 3 nights trip will amaze you.Awesomness is waiting.</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Mudra night</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>12th October (6:30PM onwards)<br>T-105<br>600/- per head<br>Microsoft Student Chapter in association WIth ARANYA presents hacking workshop.</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>
								 <li class="timeline-inverted">
                                    <div class="timeline-badge primary"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Discovering Yourself</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>13th October (5:00PM)<br>F-105<br>Unleash your inner potential.</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>   
                                  <li >
                                    <div class="timeline-badge danger"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Information Security Lecture</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>13th October<br>C-hall<br>Better to be secure than to be sorry.</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>
                                 <li class="timeline-inverted">
                                    <div class="timeline-badge warning"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">MUN</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>11-12th October (9:00AM-5:00PM)<br>T-105<br>300/- per head<br>Get Informed. Get Involved<br>If you chose to ignore you are much responsible.</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>   
                                  <li >
                                    <div class="timeline-badge info"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Industrail Trip to SLDC</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>14 & 16th October (2:00-4:00PM)<br>SLDC<br>50/- per person<br>Only for ECE , ELE and EIC students.Limited Seats</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Ethical Hacking</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>11-12th October (9:00AM-5:00PM)<br>T-105<br>600/- per head<br>Microsoft Student Chapter in association WIth ARANYA presents hacking workshop.</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>   
                                  <li >
                                    <div class="timeline-badge primary"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">TUMUN workshop and Registeration</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>7th October<br>D-203<br>Be a part of Thapar University Model United Nations Workshop and Register yourself.</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge danger"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Mata Bhagwati Jagaran</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>7th Octoberber <br>Aphitheater (COS)<br> Celebrating Thapar's Foundation day and Navratra</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>

                                <li >
                                    <div class="timeline-badge warning"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Aranya Orientation</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>2th September (5:15 PM)<br>D-203<br> First Meeting of Thapar Poetry Society Meeting.</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>
                               
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">The Pingalwara Visit</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>2-4th Octoberber <br>Enjoy the adrenalized flying trip at India's Best Paragliding Destination</p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>
                                <li >
                                    <div class="timeline-badge danger"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">TNT Auditions</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>12th September (5:15 PM)<br>D-203<br>Thapar Nautanki Team Auditions are back.<br>Register Today</p><br>
                                            <a class="btn btn-primary" href="yojna">View More   ></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge primary"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Thapar Poetry Society Meeting</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>2th September (5:15 PM)<br>D-203<br> First Meeting of Thapar Poetry Society Meeting.</p><br>
                                            <a class="btn btn-primary" href="yojna">View More   ></a>
                                        </div>
                                    </div>
                                </li>
                           

                                <li >
                                    <div class="timeline-badge warning"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">MUN Orientation </h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>2nd September (5:30 PM)<br>F Block<br>Model United Nations Orientation.Get Informed Get Involved</p><br>
                                            <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>
                                 <li class="timeline-inverted">
                                    <div class="timeline-badge info"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Adventure Club Trip (Pir Billing)</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>7th October (5:30 PM)<br>Audi<br>On the eve of Indian Air Force day,you are cordially invited to the Orientation of Aranya'14 </p><br>
                                              <a class="btn btn-primary" href="yojna">View more></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        
            </div>
            <!-- /.row -->
      
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
