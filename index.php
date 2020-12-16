<?php
session_start();
$user_id = $_SESSION["user_id"];
$email = $_SESSION["email"];
$_SESSION["password"];

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Resume Bulider App Main-Page">
	<meta name="keywords" content="CV, Resume, Job">
	<meta name="author" content="Ahsan Ashraf">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/template/plugins/fontawesome-free/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="assets/template/dist/css/adminlte.min.css">

</head>

<body>

	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Left navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
								class="fas fa-bars"></i></a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="#" class="nav-link">Home</a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="#" class="nav-link">Contact</a>
					</li>
				</ul>

				<!-- Right navbar links -->

			</nav>
			
			<!-- /.navbar -->

			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="index.php" class="brand-link">
					<img src="assets/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
						class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light"><strong>Resume Bulider</strong> </span>
				</a>

				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user (optional) -->

					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="image">
							<img src="assets/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
								alt="User Image">
						</div>
						<div class="info">
							<a href="#" class="d-block">Alexander Pierce</a>
						</div>
					</div>

					<!-- SidebarSearch Form -->
					<div class="form-inline">
						<div class="input-group" data-widget="sidebar-search">
							<input class="form-control form-control-sidebar" type="search" placeholder="Search"
								aria-label="Search">
							<div class="input-group-append">
								<button class="btn btn-sidebar">
									<i class="fas fa-search fa-fw"></i>
								</button>
							</div>
						</div>
					</div>

					<!-- Sidebar Menu -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
							data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
					   with font-awesome or any other icon font library -->


							<li class="nav-item">
								<a href="Pages/personanl.php" class="nav-link">
									<i class="nav-icon fas fa-user-clock"></i>
									<p>
										Personal-Info
										<i class="right fas fa-angle-left"></i>
									</p>
								</a>

							</li>

							<li class="nav-item">
								<a href="Pages/Education.php" class="nav-link">
									<i class="nav-icon fas fa-school"></i>
									<p>
										Education
										<i class="right fas fa-angle-left"></i>
									</p>
								</a>

							</li>

							<li class="nav-item">
								<a href="Pages/Experance.php" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>
										Experiance
										<i class="right fas fa-angle-left"></i>
									</p>
								</a>

							</li>

							<li class="nav-item">
								<a href="Pages/Skills.php" class="nav-link">
									<i class="nav-icon fas fa-tools"></i>
									<p>
										Skills
										<i class="right fas fa-angle-left"></i>
									</p>
								</a>
								
							</li>




						</ul>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
			</aside>

			<!-- Content Wrapper. Contains page content -->
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
								<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
									<i class="fas fa-times"></i>
								</button>
							</div>
						</div>
						<h2>
						<?php
							echo $user_id . "<br>";
							echo $email . "<br>";
						
						?>
						
						
						</h2>
						
						<div class="card-footer">
							Footer
						</div>
						<!-- /.card-footer-->
					</div>
					<!-- /.card -->

				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<footer class="main-footer">
				<div class="float-right d-none d-sm-block">
					<b>Version</b> 1.0LTS
				</div>
				<strong>Copyright &copy; 2014-2020 <a href="#">ResumeBulider</a>.</strong> All rights
				reserved.
			</footer>

			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>
			<!-- /.control-sidebar -->
		</div>
		<!-- ./wrapper -->

		<!-- jQuery -->
		<script src="assets/template/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="assets/template/dist/js/adminlte.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="assets/template/dist/js/demo.js"></script>
	</body>
</body>

</html>

?>