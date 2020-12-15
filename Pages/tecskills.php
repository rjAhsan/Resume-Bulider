
		

			<?php
			include '../layouts/Header.php';
			include '../layouts/SideBar.php';
			
			?>
			
			<div class="content-wrapper">
				<!-- Content Header (Page header) -->
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
									<h3 class="card-title text-center">Technical Skills</h3>
								</div>
								<div class="card-body">

									<form action="../home.php" method="POST">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-user-check"></i></span>
										</div>
										<input type="text" class="form-control" name="fname" placeholder="First Name">
									</div>

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-user-friends"></i></span>
										</div>
										<input type="text" class="form-control" name="lname" placeholder="Last Name">
									</div>

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-envelope"></i></span>
										</div>
										<input type="email" class="form-control" name="email" placeholder="Email">
									</div>

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-map-marker"></i></span>
										</div>
										<input type="text" class="form-control" name="address" placeholder="Address">
									</div>

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-phone"></i></span>
										</div>
										<input type="tel" class="form-control" name="phone" placeholder="Contact No">
									</div>

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fab fa-internet-explorer"></i></span>
										</div>
										<input type="url" class="form-control" name="link" placeholder="Portfolio">
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

	




			