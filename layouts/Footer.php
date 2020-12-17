
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
		<script src="../assets/template/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="../assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="../assets/template/plugins/moment/moment.min.js"></script>
		<script src="../assets/template/plugins/inputmask/jquery.inputmask.min.js"></script>
		<script src="../assets/template/plugins/daterangepicker/daterangepicker.js"></script>
		<script src="../assets/template/plugins/select2/js/select2.full.min.js"></script>
		<script src="../assets/template/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
		
		
		
		<script src="../assets/template/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="../assets/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="../assets/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="../assets/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script src="../assets/template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
		<script src="../assets/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
		<script src="../assets/template/plugins/jszip/jszip.min.js"></script>
		<script src="../assets/template/plugins/pdfmake/pdfmake.min.js"></script>
		<script src="../assets/template/plugins/pdfmake/vfs_fonts.js"></script>
		<script src="../assets/template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
		<script src="../assets/template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
		<script src="../assets/template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
		
		<!-- AdminLTE App -->
		<script src="../assets/template/dist/js/adminlte.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="../assets/template/dist/js/demo.js"></script>

			<script>
			$(document).ready(function(){

				$("#example1").DataTable({
					"responsive": true, "lengthChange": false, "autoWidth": false,
					"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
				  }).buttons().container().appendTo("#example1_wrapper .col-md-6:eq(0)");



				

			});
			</script>
		
		
</body>

</html>


