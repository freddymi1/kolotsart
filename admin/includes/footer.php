<?php  if($page != 'login' && $page != 'deconnexion'): ?>
		<footer class="main-footer">
		    <div class="pull-right hidden-xs">
		      <b>Version</b> 1.0.0
		    </div>
		    <strong>Copyright &copy; 2020 <a class="name-dev" href="#">Freddy Michel</a>.</strong>.
		  </footer>

		</div>
		<!-- jQuery 2.2.3 -->
		<script src="assets/js/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- FastClick -->
		<script src="assets/js/fastclick.js"></script>
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap.min.js"></script>
		<!-- AdminLTE App -->
		<script src="assets/js/app.min.js"></script>
		<!-- Sparkline -->
		<script src="assets/js/jquery.sparkline.min.js"></script>
		<!-- jvectormap -->
		<script src="asets/js/jquery-jvectormap-1.2.2.min.js"></script>
		<script src="assets/js/jquery-jvectormap-world-mill-en.js"></script>
		<!-- SlimScroll 1.3.0 -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		<!-- ChartJS 1.0.1 -->
		<script src="assets/js/Chart.min.js"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="assets/js/dashboard2.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="assets/js/demo.js"></script>
		<script type="text/javascript">
			$(function () {
		    $('#example').DataTable({
		      "paging": true,
		      "lengthChange": true,
		      "searching": true,
		      "ordering": true,
		      "info": false,
		      "autoWidth": true
		    });
		  });
		</script>
	</body>
</html>
<?php endif ?>
