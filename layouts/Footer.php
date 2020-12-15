
<?php

echo
   '<footer class="main-footer">
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
		<script src="../assets/template/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="../assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="../assets/template/plugins/moment/moment.min.js"></script>
		<script src="../assets/template/plugins/inputmask/jquery.inputmask.min.js"></script>
		<script src="../assets/template/plugins/daterangepicker/daterangepicker.js"></script>
		<script src="../assets/template/plugins/select2/js/select2.full.min.js"></script>
		<script src="../assets/template/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script
		<!-- AdminLTE App -->
		<script src="../assets/template/dist/js/adminlte.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="../assets/template/dist/js/demo.js"></script>

			<script>
			$(document).ready(function(){
				

				$("#daterange-btn").daterangepicker(
					{
					
					  startDate: moment().subtract(29, "days"),
					  endDate  : moment()
					},
					function (start, end) {
					  $("#reportrange span").html(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"))
					}
				  )

			});
			</script>
		
		
</body>

</html>'
?>

