<?php $id=$_get['id']; ?>
<!-- here is the header file -->
<?php include('header.php'); ?>
				 
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
    
<!-- here is the footer file -->
<?php include('footer.php');?>