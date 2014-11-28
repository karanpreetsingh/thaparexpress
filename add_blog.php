<?php 

    ob_start();
    session_start();
if(!isset($_SESSION['username'])){
       header("Location: http://thaparexpress.in/admin/index.php");
    exit();

}
include('config.php');
$query2 = "SELECT * FROM events";
$result2 = mysql_query($query2) or die(mysql_error());
$level = (mysql_num_rows($result2) + 1);
if (isset($_POST['formsubmitted'])) 
{  
	
	
$error = array();
$descrip = '';
	$bname = '';

	$code = '';
	$bname = $_POST['bname'];    
	$descrip = $_POST['descrip'];
	$venue = $_POST['venue'];
	$time = $_POST['time'];
	$cost = $_POST['cost'];
	
	
	$code = $_POST['code'];
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
	$query = "INSERT into `blogs` (`blogid`,`name`,`image`,`code`,`descrip`) values ('$level','$bname','$actual_image_name','$code','$descrip')"; 
	$result = mysql_query($query) or die(mysql_error());
	}
}
	?>


<!-- here is the header file -->
<?php include('header.php'); ?>
					          
            <header>
                <h1><?php echo $sitetitle?></h1>
	
				
            </header>
            <section>				
                <div id="container_demo" >
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
							<b><h1>Add EVENT (id: <?php echo $level;?>)</h1></b>
							<form method="post" action="add.php" enctype="multipart/form-data" class="login">
							<div class="col-lg-6">
								<p>
      								<label for="username" class="uname" data-icon="u" > </br> </label>
									<input name="bname" type="text" id="Username" class="form-control" placeholder="Event Name">
								</p>
									</div>
								
								<div class="col-lg-6">
								<p>
      								<label for="username" class="uname" data-icon="u" > </br> </label>
									<input name="descrip" type="text" id="Username"  class="form-control" placeholder="decription">
								</p>
								
								
								<p>Upload Poster
									<input type="file" name="photoimg" id="photoimg" />						
								</p>
								<p>
      								<label for="username" class="uname" data-icon="u" > </br> </label>
									<input name="code" type="textarea" id="Username" rows="4" cols="50" placeholder="html code">
								</p>
								

									<input type="hidden" name="formsubmitted" value="TRUE" />
                                    <input type="submit" class="btn btn-default navbar-btn"  value="Submit" /> 
									

							</form>
                        </div>
						
						
                    </div>
                </div>  </section><section><div id="wrapper"><div id="container_demo" ><div id="login" class="animate form">
            
			<h1>Instructions!</h1>
			<p>1)	Entering image, html code and nametion are optional.</br>
2)	Entering the answer is mandatory.</br>
3)  Question can also contain html code.<br>
</p>
			</div></div></div>
			</section>

			</div>			
					        
<!-- here is the footer file -->
<?php include('footer.php');?>