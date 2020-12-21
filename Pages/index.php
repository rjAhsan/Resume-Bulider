<?php
	
	session_start();
	include "../Backend/Auth.php";
	
	
	?>
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
								
                                    <form  method="post">
                                    <div class="col-12">
            <input name="print"  type="submit" value="PRINT" class="btn btn-primary btn-block"></input>
           
             </div>
                                    </form>
								
								</div>
						</div>
					 
                     <?php 
					
					
					include ('../Backend/downlaod.php')
					
					?>




                    

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
