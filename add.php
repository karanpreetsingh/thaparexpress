<?php 

    ob_start();
    session_start();
if(!isset($_SESSION['username'])){
       header("Location: http://thaparexpress.in/admin/index.php");
    exit();

}
$soc=$_SESSION['username'];
include('config.php');
$query2 = "SELECT * FROM events";
$result2 = mysql_query($query2) or die(mysql_error());
$level = (mysql_num_rows($result2) + 1);
if (isset($_POST['formsubmitted'])) 
{  
	
	
$error = array();
$descrip = '';
	$ename = '';
	$venue = '';
	$time = '';
	$cost = '';
	
	$ename = $_POST['ename'];    
	$descrip = $_POST['descrip'];
	$venue = $_POST['venue'];
	$time = $_POST['time'];
	$cost = $_POST['cost'];
	
	
	
		$path = "img/";
		$actual_image_name = '';
		$ie = 0;
	   $valid_formats = array("jpg", "png", "gif", "bmp", "jpeg");
	   
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(1024*1024))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
									$fm = 'EVENT Added!';
								}
							else
								{$fm = 'failed';
								$ie = 1;
								}
						}
						else
						{
						$fm = 'Image file size max 1 MB';			
						$ie = 1;
						}
						
					}
						
					else
					{
					$fm = 'Invalid file format';
					$ie=1;
					}
				}
				
			else  $fm = 'Event Added!';
				
			
		
		if ($ie==0)
		{
	$query = "INSERT into `events` (`eventid`,`name`,`image`,`venue`,`time`,`cost`,`descrip`,`soc`) values ('$level','$ename','$actual_image_name','$venue','$time','$cost','$descrip','$soc')"; 
	$result = mysql_query($query) or die(mysql_error());
		$newevent = "CREATE TABLE IF NOT EXISTS event_". $level ." ( ". 
  "participantid int(10) NOT NULL AUTO_INCREMENT, ".
  "rollnum varchar(36) NOT NULL, ".
  "time timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,". 
  "PRIMARY KEY (participantid)".
  ")";
	$run = mysql_query($newevent) or die(mysql_error());

	}
}
	?>
<!-- here is the header file -->
<?php include('header.php'); ?>
				
<div class="container">
<div class="row">
<div class="col-sm-4">
<h3>Drop me a line!</h3>

<address>
</br>
<p><h1> AddEvent() </h1></p>
</br>
<h3>Event ID : <?php echo $level;?> </h3>
<p><h2> Instructions </h3>
<h3> Things that are optional : </h4>
<h4> Image, HTML Code</h5>
<h3> One must not leave the fields empty.</h3>
<h4> For example, if the event has no fee,
then you write 'Free' or 'No Fee' in the cost field.
Event Name, Venue, Time fields are compulsory fields.</br>
There is no mandotary format for Time and Cost but
we'd appreciate this: 'November 5, 1994, 8:15 AM' and this: '500  ₹'.</h4>

<h3>Image size must not exceed 1 MB.</h3></p>
</br>
<small>Let's make Thapar a better place to be at. :)</small>
</address>
</div>
    
<div class="col-sm-8 contact-form">
	<form id="contact" method="post" action="add.php" enctype="multipart/form-data" class="login" role="form">
		<div class="row">
			<div class="col-xs-6 col-md-6 form-group">
				<input class="form-control" id="ename" name="ename" placeholder="Event Name" type="text" required autofocus />
			</div>
			<div class="col-xs-6 col-md-6 form-group">
				<input class="form-control" id="venue" name="venue" placeholder="Venue" type="text" required />
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-md-6 form-group">
				<input class="form-control" id="time" name="time" placeholder="Time" type="text" required />
			</div>
			<div class="col-xs-6 col-md-6 form-group">
				<input class="form-control" id="venue" name="cost" placeholder="Fee" type="text" required />
			</div>
		</div>
	<textarea class="form-control" id="descrip" name="descrip" placeholder="Description" rows="5"></textarea>
	</br>
			
           
	<br />
	<div class="row">
			<div class="col-xs-6 col-md-6 form-group">
				<input type="file" class="btn btn-primary btn-lg btn-block" name="photoimg" id="photoimg" />	
			<input type="hidden" name="formsubmitted" value="TRUE" />
			</div>
			<div class="col-xs-6 col-md-6 form-group">
				<input type="submit" class="btn btn-primary btn-lg btn-block"  value="Submit" />
			</div>
		</div>
	
	</form>
</div>

<style>
.contact-form {
    margin-top:70px;
}
</style>
<!--THE END-->
		        
<!-- here is the footer file -->
<?php include('footer.php');?>