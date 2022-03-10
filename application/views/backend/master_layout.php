<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $tittle ?></title>
	<!--	datatable start-->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!--	datatable end-->

	<!-- chart link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/summernote/summernote-bs4.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Bootstrap4 Duallistbox -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/dist/css/adminlte.min.css">

	<!-- form wizard -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/css/form_wizard.css">

	<!--custom css-->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/css/custom.css">
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/css/morris.css">
	<!-- SweetAlert2 -->
	<link rel="stylesheet" href="<?php echo base_url('') ?>assets/backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<!--	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">-->
	<style>
		/* Only logout button style  */
		.logout__button .btn-danger:hover {
			color: #fff;
			background-color: #ff0019;
			border: 2px solid #ff0019;
			border-radius: 0;
		}

		.yoooButton {
			pointer-events: none;
			opacity: 0.2;
		}
	</style>
</head>

<body class="
<?php
if (StyleEdition == '1') {
	echo 'sidebar-mini layout-fixed';
} elseif (StyleEdition == '2') {
	echo 'hold-transition sidebar-mini sidebar-collapse layout-fixed';
}

?>
">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-lightblue" style="background: linear-gradient(to right, #04203c 14%, #ffffff 95%);">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<!-- Burger icon color changed  -->
					<a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>
			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Messages Dropdown Menu -->
				<!-- <li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-comments"></i>
						<span class="badge badge-danger navbar-badge">3</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<a href="#" class="dropdown-item">
							
							<div class="media">
								<img src="<?php echo base_url('') ?>assets/backend/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Brad Diesel
										<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">Call me whenever you can...</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							
							<div class="media">
								<img src="<?php echo base_url('') ?>assets/backend/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										John Pierce
										<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">I got your message bro</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							
							<div class="media">
								<img src="<?php echo base_url('') ?>assets/backend/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Nora Silvester
										<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
									</h3>
									<p class="text-sm">The subject goes here</p>
									<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
								</div>
							</div>
							
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
					</div>
				</li> -->
				<!-- Notifications Dropdown Menu -->
				<!-- <li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="far fa-bell"></i>
						<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<span class="dropdown-item dropdown-header">15 Notifications</span>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-envelope mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-users mr-2"></i> 8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<i class="fas fa-file mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
					</div>
				</li> -->


				<li class="nav-item">
					<a href="<?php echo base_url('logout') ?>" class="logout__button">
						<button type="button" class="btn btn-block btn-danger">Logout</button>
					</a>
				</li>


				<!-- Second Logout system  -->
				<!-- <li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#">
						<i class="fas fa-cog text-dark" style="font-size: 22px;"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
						<a href="#" class="dropdown-item">
							<div class="media pt-2">
								<div class="">
									<i class="fas fa-users mr-4"></i>
								</div>
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Profile
									</h3>
								</div>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">
							<div class="media py-2">
								<div class="">
									<i class="fas fa-edit mr-4"></i>
								</div>
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Edit Profile
									</h3>
								</div>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a href="" class="dropdown-item">
							<div class="media py-2">
								<div class="">
									<i class="fas fa-sign-out-alt mr-4"></i>
								</div>
								<div class="media-body">
									<h3 class="dropdown-item-title">
										Logout
									</h3>
								</div>
							</div>
						</a>
					</div>
				</li> -->
				<!-- Second Logout system  -->


			</ul>
		</nav>
		<!-- /.navbar -->
		<!-- Main Sidebar Container -->
		<?php echo $side_menu; ?>


		<section id="main-content">
			<section class="wrapper">
				<?= $main_content; ?>
			</section>
		</section>
	</div>
	<!-- /.content-wrapper -->
	<footer class="main-footer">

		<strong>Page rendered in <strong>{elapsed_time}</strong> seconds.</strong>

		<div class="float-right d-none d-sm-inline-block">
			<b><?php echo (ENVIRONMENT === 'development') ? '<strong>' . '<i class="fab fa-aws mr-2"></i> <i class="fab fa-php mr-2"></i> <i class="fab fa-free-code-camp mr-2"></i> <i class="fab fa-bootstrap mr-2"></i> <i class="fab fa-js mr-2"></i> <i class="fab fa-react mr-2"></i> <i class="fas fa-database mr-2"></i> - ' . '</strong>' : '' ?></b>
		</div>
	</footer>

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
	</div>
	<!-- chart react link -->
	<script src="<?php echo base_url('') ?>assets/backend/react/react.production.min.js"></script>
	<script src="<?php echo base_url('') ?>assets/backend/react/react-dom.production.min.js"></script>
	<script src="<?php echo base_url('') ?>assets/backend/react/prop-types.min.js"></script>
	<script src="<?php echo base_url('') ?>assets/backend/react/browser.min.js"></script>
	<script src="<?php echo base_url('') ?>assets/backend/react/apexcharts.js"></script>
	<script src="<?php echo base_url('') ?>assets/backend/react/react-apexcharts.iife.min.js"></script>

	<script src="<?php echo base_url('') ?>assets/backend/plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url('') ?>assets/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url('') ?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="<?php echo base_url('') ?>assets/backend/plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url('') ?>assets/backend/plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="<?php echo base_url('') ?>assets/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?php echo base_url('') ?>assets/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo base_url('') ?>assets/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url('') ?>assets/backend/plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url('') ?>assets/backend/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?php echo base_url('') ?>assets/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="<?php echo base_url('') ?>assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="<?php echo base_url('') ?>assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('') ?>assets/backend/dist/js/adminlte.js"></script>

	<!-- SweetAlert2 -->

	<script src="<?php echo base_url('') ?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url('') ?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url('') ?>assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url('') ?>assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

	<!-- Our Used JS  -->
	<script src="<?php echo base_url('') ?>assets/backend/plugins/sweetalert2/sweetalert2.min.js"></script>
	<script src="<?php echo base_url('') ?>assets/backend/custom/client_site.js"></script>
	<!--<script src="--><?php //echo base_url('') 
						?>
	<!--assets/backend/custom/jquery.min.js"></script>-->
	<script src="<?php echo base_url('') ?>assets/backend/custom/select2.full.min.js"></script>
	<!-- form wizard -->
	<script src="<?php echo base_url('') ?>assets/backend/custom/main.js"></script>


	<script>
		$(function() {
			$("#example1").DataTable({
				"responsive": true,
				"autoWidth": false,
			});
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			});
		});
	</script>
	<script>
		$.validate({
			lang: 'en'
		});
	</script>
	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})

			$('.textarea').summernote()

			//Datemask dd/mm/yyyy
			$('#datemask').inputmask('dd/mm/yyyy', {
				'placeholder': 'dd/mm/yyyy'
			})
			//Datemask2 mm/dd/yyyy
			$('#datemask2').inputmask('mm/dd/yyyy', {
				'placeholder': 'mm/dd/yyyy'
			})
			//Money Euro
			$('[data-mask]').inputmask()

			//Date range picker
			$('#reservationdate').datetimepicker({
				format: 'L'
			});
			//Date range picker
			$('#reservation').daterangepicker()
			//Date range picker with time picker
			$('#reservationtime').daterangepicker({
				timePicker: true,
				timePickerIncrement: 30,
				locale: {
					format: 'MM/DD/YYYY hh:mm A'
				}
			})
			//Date range as a button
			$('#daterange-btn').daterangepicker({
					ranges: {
						'Today': [moment(), moment()],
						'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
						'Last 7 Days': [moment().subtract(6, 'days'), moment()],
						'Last 30 Days': [moment().subtract(29, 'days'), moment()],
						'This Month': [moment().startOf('month'), moment().endOf('month')],
						'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
					},
					startDate: moment().subtract(29, 'days'),
					endDate: moment()
				},
				function(start, end) {
					$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
				}
			)

			//Timepicker
			$('#timepicker').datetimepicker({
				format: 'LT'
			})

			//Bootstrap Duallistbox
			$('.duallistbox').bootstrapDualListbox()

			//Colorpicker
			$('.my-colorpicker1').colorpicker()
			//color picker with addon
			$('.my-colorpicker2').colorpicker()

			$('.my-colorpicker2').on('colorpickerChange', function(event) {
				$('.my-colorpicker2 .fa-square').css('color', event.color.toString());
			});

			$("input[data-bootstrap-switch]").each(function() {
				$(this).bootstrapSwitch('state', $(this).prop('checked'));
			});


		})
	</script>
</body>

</html>
