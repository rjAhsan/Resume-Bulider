<?php
session_start();

if(isset($_POST['Skills'])){
	$userid= $_SESSION["user_id"];

$SKillName=$_REQUEST['SName'] ;
$Level=$_REQUEST['skilllevel'] ;

include('../Backend/db.php');

 $sql = "INSERT INTO skills (SName,skilllevel,user_id)
 VALUES ('$SKillName','$Level',$userid)";
 
 
 
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
								<h3 class="card-title text-center">Skills</h3>
							</div>
							<div class="card-body">

								<form  method="POST">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-university"></i></span>
									</div>
									<input type="text" class="form-control" name="SName" placeholder="Skill Name">
								</div>

								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-bookmark"></i></span>
									</div>
									<select name="skilllevel" class="form-control select2" >
										<option value="New">New</option>
										<option value="Intermidate">intermadiate</option>
										<option value="Master">Master</option>
										
				
									 </select>
								</div>

								
							
								<div class="card-footer">
									<input name="Skills" type="submit" class="btn btn-primary flot-"></button>
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





			