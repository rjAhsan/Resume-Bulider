

<?php

require ('profiledata.php');
require ('Educationdata.php');
require ('Expdata.php');
require  ('skillsdata.php');

?>

<div class="card-body">
		<div class="row">
			<div class="col-sm-8 databorede">
			
				<!-- //profile data -->

				<table class="table table-hover text-nowrap">
				<tr><thead><strong>Profile Data</strong></thead></tr>
				<tr><td><?php echo $fname?> <?php echo $lname?></tr> </td>
				
				<tr><td><?php echo $email?></tr> </td>
				<tr><td><?php echo $address?></tr></td>
				<tr><td><?php echo $phone?></tr> </td>
				<tr><td><?php echo $link?> </tr></td>
				
				</table>
				
				
				
				
				</div>
				<div class="col-sm-4 databorede"> <img class="attachment-img img-circle" src="../assets/template/dist/img/user2-160x160.jpg" alt=""> </div>
			
		</div>


<hr>
		<div class="row">
			
				<div class="col-sm-3 databorede">
				
				<table class="table table-hover text-nowrap">
				
				<tr><thead><strong>Instuite</strong></thead></tr>
				<?php 
				foreach( $instName as $intnamedata){
				        
				   
				 ?>
				<tr><td><?php
				  echo $intnamedata ;

				?></td> </tr>
			  <?php	
				
			}
				 ?>


				</table>
				
				</div>

				
				<div class="col-sm-3 databorede">
			
				<table class="table table-hover text-nowrap">
				<tr><thead><strong>Degree</strong></thead></tr>
				<?php 
				foreach( $degree as $degreedata){
				        
				   
				 ?>
				<tr><td><?php
				  echo $degreedata ;

				?></td> </tr>
			  <?php	
				
			}
				 ?>


				</table>
				
				</div>





				<div class="col-sm-3 databorede">
				
				<table class="table table-hover text-nowrap">
				<tr><thead><strong>Grade</strong></thead></tr>
				
				<?php 
					foreach($grade as $gradedata){
				?>
				
				<tr><td><?php echo $gradedata?></tr> </td>
				
				<?php
					}
				?>
				
				
				</table>
				
				
				</div>
				<div class="col-sm-3 databorede">
				
				<table class="table table-hover text-nowrap">
				<tr><thead><strong>Status</strong></thead></tr>
				<?php 
				foreach($edate as $edatedata){

				
				?>
				<tr><td> <?php echo $edatedata?></td> </tr>
				
				<?php
				}
				?>
				
				</table>
				
				
				</div>
				
		
		</div>


<hr>
<div class="row">
			
			<div class="col-sm-2 databorede">
			
			<table class="table table-hover text-nowrap">
			
			<tr><thead><strong>Designation</strong></thead></tr>
			<?php 
			foreach( $CName as $intnamedata){
					
			   
			 ?>
			<tr><td><?php
			  echo $intnamedata ;

			?></td> </tr>
		  <?php	
			
		}
			 ?>


			</table>
			
			</div>

			
			<div class="col-sm-2 databorede">
		
			<table class="table table-hover text-nowrap">
			<tr><thead><strong>Company Name</strong></thead></tr>
			<?php 
			foreach( $DName as $degreedata){
					
			   
			 ?>
			<tr><td><?php
			  echo $degreedata ;

			?></td> </tr>
		  <?php	
			
		}
			 ?>


			</table>
			
			</div>





			<div class="col-sm-6 databorede">
			
			<table class="table table-hover ">
			<tr><thead><strong>jobsummry</strong></thead></tr>
			
			<?php 
				foreach($jobsummary as $gradedata){
			?>
			
			<tr><td><?php echo $gradedata?></tr> </td>
			
			<?php
				}
			?>
			
			
			</table>
			
			
			</div>
			<div class="col-sm-2 databorede">
			
			<table class="table table-hover text-nowrap">
			<tr><thead><strong>Date</strong></thead></tr>
			<?php 
			foreach($jobedate as $edatedata){

			
			?>
			<tr><td> <?php echo $edatedata?></td> </tr>
			
			<?php
			}
			?>
			
			</table>
			
			
			</div>
			
	
	</div>



	<hr>

		<div class="row">
			
				<div class="col-sm-8 databorede">
				
				<table class="table table-hover text-nowrap">
				<tr><thead><strong>SKill Name</strong></thead></tr>
				<?php 
				foreach($SkillName as $skill){

				
				?>
				<tr><td> <?php echo $skill?></td> </tr>
				
				<?php
				}
				?>
				
				</table>
				
				
				</div>
				<div class="col-sm-4 databorede">
				
				<table class="table table-hover text-nowrap">
				<tr><thead><strong>Skill Level</strong></thead></tr>
				<?php 
				foreach($SkillLevel as $skilllevel){

				
				?>
				<tr><td> <?php echo $skilllevel?></td> </tr>
				
				<?php
				}
				?>
				</table>

				</div>
			
		</div>
	</div>
	

