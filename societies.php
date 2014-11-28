<?php $id=$_GET['id'];?>

<!-- here is the header file -->
<?php include('header.php'); ?>
				
                    <h1>Societies</h1>
					<ol class="breadcrumb">
							<li><a href="index">Home</a></li>
							<li><a class="active">Societies</a></li>
							
							
						</ol>
						<div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Choose a department</p>
                <div class="list-group">
                    <a href="societies?id=tech" class="list-group-item " >Technical</a>
                    <a href="societies?id=dep" class="list-group-item  " >Departmental</a>
                    <a href="societies?id=cul" class="list-group-item ">Cultural</a>
                    <a href="societies?id=sc" class="list-group-item  ">Student Chapters</a>

                </div>
            </div>
						<div class="col-md-9">
				<?php if($id=='cul'){
				include('societies_cul.php');}
				else if($id=='dep'){
				include('societies_departmental.php');}
				else if($id=='sc'){
				include('societies_studentchap.php');}
				else {
				include('societies_tech.php');}
				?>
				
                        </div>
                  
    <!-- Page Content -->
    
    </div>
    <!-- /.container -->
    </div>
    <!-- /.container -->
	  <footer class="footer">
      <div class="container">
        <p class="text-muted"><b>Thapar Express.</b> Let's make <b>Thapar</b> a better place to be at.</p>
      </div>
    </footer>
	
<!-- here is the footer file -->
<?php include('footer.php');?>
	