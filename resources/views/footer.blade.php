<!-- Main Footer -->
<footer class="main-footer">
		<!-- To the right -->
		<div class="pull-right hidden-xs">
				Anything you want
		</div>
		<!-- Default to the left -->
		<strong>Copyright © 2015 <a href="#">Company</a>.</strong> All rights reserved.
</footer>


    </div><!-- ./wrapper -->
    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.1.3 -->
    <script src="{{ asset("/bower_components/AdminLTE/plugins/jQuery/jQuery-2.2.3.min.js")}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js")}}" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset("/bower_components/AdminLTE/dist/js/app.min.js")}}" type="text/javascript"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
    Both of these plugins are recommended to enhance the
    user experience -->
		<!-- jQuery UI 1.11.4 -->
		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
		<script>
		  $.widget.bridge('uibutton', $.ui.button);
		</script>
		<!-- Morris.js charts -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="{{ asset("/bower_components/AdminLTE/plugins/morris/morris.min.js")}}"></script>
		<!-- Sparkline -->
		<script src="{{ asset("/bower_components/AdminLTE/plugins/sparkline/jquery.sparkline.min.js")}}"></script>
		<!-- jvectormap -->
		<script src="{{ asset("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js")}}"></script>
		<script src="{{ asset("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js")}}"></script>
		<!-- jQuery Knob Chart -->
		<script src="{{ asset("/bower_components/AdminLTE/plugins/knob/jquery.knob.js")}}"></script>
		<!-- daterangepicker -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
		<script src="{{ asset("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.js")}}"></script>
		<!-- datepicker -->
		<script src="{{ asset("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js")}}"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="{{ asset("/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>
		<!-- Slimscroll -->
		<script src="{{ asset("/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js")}}"></script>
		<!-- FastClick -->
		<script src="{{ asset("/bower_components/AdminLTE/plugins/fastclick/fastclick.js")}}"></script>
		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="{{ asset("/bower_components/AdminLTE/dist/js/pages/dashboard.js")}}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{ asset("/bower_components/AdminLTE/dist/js/demo.js")}}"></script>
		<!-- DataTables -->
		<script src="{{ asset("/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js")}}"></script>
		<script src="{{ asset("/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js")}}"></script>
		<script>
			$(function () {
				$("#example1").DataTable({
					"paging": true,
					"lengthChange": false,
					"searching": false,
					"ordering": true,
					"info": true,
					"autoWidth": false
				});
			});

			// TR link
			$(document).ready(function(){
	    $('table tr').click(function(){
	        window.location = $(this).attr('href');
	        return false;
	    });
			});
			</script>
    </body>
</html>
