<?php 
   
include('config.php');

$query = "SELECT * FROM `events` ORDER BY  eventid DESC"; 
	 
$result = mysql_query($query) or die(mysql_error());

?>	<script language = "JavaScript">
		function preloader()
		{
		heavyImage = new Image();
		heavyImage.src = "/images/bg2.png";
		}
		</script>
	<!-- here is the header file -->
<?php include('header.php'); ?>
				
			
					
                <!-- Title -->
                <h1>Events</h1>
				<ol class="breadcrumb">
					<li><a href="index">Home</a></li>
				
					<li class="active">Blog</li>
				</ol>
				
				<div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li class="" data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li class="" data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
				
				</br>
				</br>
				
								<div class="row">
								<div class="not_time">
											<ul class="timeline">
												
												
													
													
											<?php 											
												$a=1;
											
											while($row = mysql_fetch_array($result)){ 
										$a++;
										if (($a%2)==0)
											{ 
												echo "<li ><div class=\"timeline-badge danger\"><i class=\"fa fa-graduation-cap\"></i>
														</div>";
											} 
											else { echo "<li class=\"timeline-inverted\"><div class=\"timeline-badge primary\"><i class=\"fa fa-graduation-cap\"></i>
														</div>
											";}
											
											
											?>
													
														<div class="timeline-panel">
															<div class="timeline-heading">
																<h3 class="timeline-title"><?php echo $row['name']; ?></h3>
																</div>
															<div class="timeline-body">
																<p>
				                                             

											<?php echo   $row['descrip'] ;?></p><br>
											<ul> 
													<li><b>Venue  -  </b><?php   echo $row['venue']; ?></li>
													<li><b>Time   -  </b><?php   echo $row['time']; ?></li>
													<li><b>Cost   -  </b><?php   echo $row['cost'] ;?></li>
												   
												</ul>
											
											 <a class="btn btn-primary pull-right" href="event?id=<?php echo $row['eventid'];?>">View more></a>
															</div>
														</div>
													</li> 
													<?php }?>
													
												</ul>
																	</div>

<!-- here is the footer file -->
<?php include('footer.php');?>