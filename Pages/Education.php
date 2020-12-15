
		

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
								<h3 class="card-title text-center">Education</h3>
							</div>
							<div class="card-body">

								<form action="../Backend/Education.php" method="POST">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-university"></i></span>
									</div>
									<input type="text" class="form-control" name="InstName" placeholder="Institute Name">
								</div>

								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
									</div>
									<select name="degree" class="form-control select2" >
										<option value="Matric" selected="selected">Matric</option>
										<option value="Intermediate">Intermediate</option>
										<option value="Bachelors (2 Years)">Bachelors (2 Years)</option>
										<option value="Bachelors (4 Years)">Bachelors (4 Years)</option>
										<option value="Masters">Masters</option>
				
									 </select>
								</div>
								
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-trophy"></i></span>
									</div>
									<select name="grade" class="form-control select2" >
										<option value="A+" selected="selected">A+</option>
										<option value="A">A</option>
										<option value="B">B+</option>
										<option value="B">B</option>
										<option value="A">C</option>
				
									 </select>
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

								
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-bookmark"></i></span>
									</div>
									<select name="status" class="form-control select2" >
										<option value="InComplet">InComplet</option>
										<option value="Completed">Completed</option>
										
										<option value="Continue">Continue</option>
										
				
									 </select>
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary flot-">Submit</button>
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





			