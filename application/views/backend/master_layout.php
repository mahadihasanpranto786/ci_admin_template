<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>AdminLTE 3 | Dashboard 1</title>

	<link rel="stylesheet" href="<?= base_url() ?>build/assets/app-a87fc204.css">
	<script src="<?= base_url() ?>build/assets/app-6e0eadfb.js"></script>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/font-awesome-6/css/all.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/dist/css/adminlte.min.css">
	<!-- Toastr -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/toastr/toastr.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/imageuploader/image-uploader.min.css">
	<!--	Datatable -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">


	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/imagelightbox/css/lightbox.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/jquery-ui/jquery-ui.css" />

	<link rel="stylesheet" href="<?= base_url() ?>assets/backend/css/custom.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="wrapper">
		<!-- Preloader -->
		<div class="preloader flex-column justify-content-center align-items-center">
			<img class="animation__wobble" src="{{URL::asset("assets/backend/dist/img/AdminLTELogo.png")}}" alt="AdminLTELogo" height="60" width="60">
		</div>

		<!-- Navbar -->

		<!-- /.navbar -->
		<!-- Main Sidebar Container -->
		<?php echo $side_menu; ?>


		<section id="main-content">
			<section class="wrapper">
				<?= $main_content; ?>
			</section>
		</section>
		<footer class="main-footer">
			<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
			All rights reserved.
			<div class="float-right d-none d-sm-inline-block">
				<b>Version</b> 3.2.0
			</div>
		</footer>

	</div>



	<script src="<?= base_url() ?>assets/backend/plugins/jquery/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<script src="<?= base_url() ?>assets/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?= base_url() ?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="<?= base_url() ?>assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url() ?>assets/backend/dist/js/adminlte.js"></script>
	<!-- SweetAlert2 -->
	<script src="<?= base_url() ?>assets/backend/plugins/sweetalert2/sweetalert2.all.min.js"></script>
	<!-- PAGE PLUGINS -->
	<!-- Select2 -->
	<script src="<?= base_url() ?>assets/backend/plugins/select2/js/select2.full.min.js"></script>
	<!-- Toastr -->
	<script src="<?= base_url() ?>assets/backend/plugins/toastr/toastr.min.js"></script>
	<!-- Datatable -->
	<script src="<?= base_url() ?>assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js">
	</script>
	<script src="<?= base_url() ?>assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
	</script>
	<!-- ChartJS -->
	<script src="<?= base_url() ?>assets/backend/plugins/chart.js/Chart.min.js"></script>
	<!-- daterangepicker -->
	<script src="<?= base_url() ?>assets/backend/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="<?= base_url() ?>assets/backend/plugins/imageuploader/image-uploader.min.js"></script>
	<script src="<?= base_url() ?>assets/backend/js/custom.js"></script>


	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2();

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>
	<script>
		$(function() {
			$("#example1").DataTable({
				"responsive": true,
				"autoWidth": false,
			});
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": true,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			});
		});
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	</script>

</body>

</html>