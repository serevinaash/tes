<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Base URL -->
  <base href="<?= base_url(); ?>">
  <!-- Title -->
  <title>InDrain</title>
  <!-- Required Meta Tag -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="handheldfriendly" content="true" />
	<meta name="MobileOptimized" content="width" />
	<meta name="title" property="og:title" content="InDrain (Inspeksi Drainase)">
	<meta name="image" property="og:image" content="assets/front/images/logos/og-image.png">
	<meta name="description" property="og:description" content="Aplikasi yang mengintegrasikan hasil inventarisasi, inspeksi, penilaian kondisi dan program penanganan/pemeliharaan sistem drainase jalan.">
	<meta name="author" property="og:author" content="Balai Perkerasan dan Lingkungan Jalan Direktorat Jenderal Bina Marga Kementerian PUPR">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/front/images/logos/favicon.png" />
	<!-- Core Css -->
	<link id="themeColors" rel="stylesheet" href="assets/front/css/style.min.css" />
	<!-- Bootstrap Datepicker - https://bootstrap-datepicker.readthedocs.io/en/latest/index.html -->
	<link href="assets/node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

	<!-- Maps -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
	<?= $this->renderSection('style') ?>
</head>

<body class="cardwithborder">
	<!-- Preloader -->
  <div class="preloader">
		<img src="assets/front/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
	</div>

	<!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="horizontal" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Header Start -->
		<?= $this->include('layout/front/_header') ?>
    <!-- Header End -->

    <!-- Sidebar Start -->
    <?php # include '_sidebar.php' ?>
    <!-- Sidebar End -->

    <!-- Main wrapper -->
    <div class="body-wrapper">
			<?= $this->renderSection('content') ?>
    </div>
  </div>

	<!-- Import Js Files -->
	<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  	<script src="assets/front/libs/jquery/dist/jquery.min.js"></script>
	<script src="assets/front/libs/simplebar/dist/simplebar.min.js"></script>
	<script src="assets/front/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!-- core files -->
	<script src="assets/front/js/app.min.js"></script>
	<script src="assets/front/js/app.horizontal.init.js"></script>
	<script src="assets/front/js/app-style-switcher.js"></script>
	<script src="assets/front/js/sidebarmenu.js"></script>

	<script src="assets/front/js/custom.js"></script>

	
	<!-- Bootstrap Datepicker - https://bootstrap-datepicker.readthedocs.io/en/latest/index.html -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="assets/node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/node_modules/bootstrap-datepicker/js/locales/bootstrap-datepicker.id.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
	<!-- Bootstrap Datepicker CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<!-- Bootstrap Datepicker JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

	<script>
        $(document).ready(function () {
            $("#periode").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true 
            });
        });
    </script>
  <?= $this->renderSection('script') ?>
</body>

</html>
