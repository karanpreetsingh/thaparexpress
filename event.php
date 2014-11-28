<?php $id=$_GET['id'];
include('config.php');
$query2 = "SELECT * FROM events WHERE eventid='$id'"; 	 
$result2 = mysql_query($query2) or die(mysql_error());
$event = mysql_fetch_array($result2) or die(mysql_error());

?><!-- here is the header file -->
<?php include('header.php'); ?>
				
				
        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php   echo $event['name']; ?>
                    <small></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="/img/<?php echo $event['image']?>" alt="">
            </div>

            <div class="col-md-4">
                <h3>Event Description</h3>
                <p><?php   echo $event['descrip']; ?></p>
                <h3>Event Details</h3>
                <ul>
                    <li><b>Venue  -  </b><?php   echo $event['venue'] ?></li>
                    <li><b>Time   -  </b><?php   echo $event['time'] ?></li>
                    <li><b>Cost   -  </b><?php   echo $event['cost'] ?></li>
                   
                </ul>
			<a class="btn btn-primary pull-right" href="participate.php?id=<?php echo $event['eventid'];?>">Participate</a>

            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>

        </div>
        <!-- /.row -->

<!-- here is the footer file -->
<?php include('footer.php');?>