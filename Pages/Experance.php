<?php
session_start();
include "../Backend/Auth.php"; 

if(isset($_POST['exp'])){
 

$userid= $_SESSION["user_id"];
$CompanyName=$_REQUEST['CName'] ;
 $DesignitionName=$_REQUEST['DName'];
 $sdate=$_REQUEST['sdate'];
 $edate=$_REQUEST['edate'];
 $Jobsummry=$_REQUEST['Jobsummry'];




 include('../Backend/db.php');

 $sql = "INSERT INTO experience (CName,DName,sdate,edate,Jobsummry,user_id)
 VALUES ('$CompanyName','$DesignitionName','$sdate','$edate','$Jobsummry','$userid')";
 
 
 include('../Backend/db2.php');

}



?>
		

			<?php
			include '../layouts/Header.php';
			include '../layouts/SideBar.php';
			
			?>
		
		<div class="content-wrapper">
			<!-- Content Header (Page header) 
			<section class="content-header">
				<div class="container-fluid">
					
				</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<section class="content">

				<!-- Default box -->
				<div class="card">
					<div class="card-header">
						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
								<i class="fas fa-minus"></i>
							</button>
							
						</div>
					</div>
					<div class="card-body">
						<div class="card card-info">
							<div class="card-header">
								<h3 class="card-title text-center">Experience</h3>
							</div>
							<div class="card-body">

								<form  method="POST">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-university"></i></span>
									</div>
									<input type="text" class="form-control" name="CName" placeholder="Company  Name">
								</div>

								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user-cog"></i></span>
									</div>
									<input type="text" class="form-control" name="DName" placeholder="Designation  Name">
								</div>

								
								
							
								<div class="row">
									<div class="col-sm-6">
									<div class="input-group mb-3 ">
									<div class="input-group-prepend">
										<span class="input-group-text">Start Date </span>
									</div>
									<input type="date" class="form-control" name="sdate" >
								</div>
									</div>


									<div class="col-sm-6">
									<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">End Date </span>
									</div>
									<input type="date" class="form-control" name="edate" >
								</div>
									</div>

								</div>	

								
								<div class="form-group">
                        
                        	<textarea class="form-control" name="Jobsummry" rows="3" placeholder="Enter your Job Summary"></textarea>
                      		</div>
								<div class="card-footer">
									<input name="exp" type="submit" class="btn btn-primary flot-"></input>
								  </div>
								</form>
							</div>
							<!-- /.card-body -->
						</div>
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						Footer
					</div>
					<!-- /.card-footer-->
				</div>
				<!-- /.card -->

			</section>
			<!-- /.content -->
		</div>
			
			

			
<?php
  
include '../layouts/Footer.php';



?>





			