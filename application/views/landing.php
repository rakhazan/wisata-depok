<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $page ?> | Wisata Depok</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?= base_url('public/plugins/fontawesome-free/css/all.min.css') ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('public/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition layout-top-nav">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
			<div class="container">
				<a href="#" class="navbar-brand">
					<img src="<?= base_url('public/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">Wisata Depok</span>
				</a>

				<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse order-3" id="navbarCollapse">
					<!-- Left navbar links -->
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="index3.html" class="nav-link">Home</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Contact</a>
						</li>
						<li class="nav-item dropdown">
							<a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
							<ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
								<li><a href="#" class="dropdown-item">Some action </a></li>
								<li><a href="#" class="dropdown-item">Some other action</a></li>

								<li class="dropdown-divider"></li>

								<!-- Level two dropdown-->
								<li class="dropdown-submenu dropdown-hover">
									<a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
									<ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
										<li>
											<a tabindex="-1" href="#" class="dropdown-item">level 2</a>
										</li>

										<!-- Level three dropdown-->
										<li class="dropdown-submenu">
											<a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
											<ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
												<li><a href="#" class="dropdown-item">3rd level</a></li>
												<li><a href="#" class="dropdown-item">3rd level</a></li>
											</ul>
										</li>
										<!-- End Level three -->

										<li><a href="#" class="dropdown-item">level 2</a></li>
										<li><a href="#" class="dropdown-item">level 2</a></li>
									</ul>
								</li>
								<!-- End Level two -->
							</ul>
						</li>
					</ul>

					<!-- SEARCH FORM -->
					<form class="form-inline ml-0 ml-md-3">
						<div class="input-group input-group-sm">
							<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
							<div class="input-group-append">
								<button class="btn btn-navbar" type="submit">
									<i class="fas fa-search"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</nav>
		<!-- /.navbar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Layout</a></li>
								<li class="breadcrumb-item active">Top Navigation</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content">
				<div class="container">
					<!-- Content -->
					<div class="row">
						<div class="col-3">
							<div class="card overflow-hidden">
								<img src="<?= base_url('public/img/photo1.png') ?>" alt="thumbnail" class="card-img-top">
								<div class="card-img-overlay text-right mr-n1 mt-n2">
									<small class="badge badge-info">Kolam Renang</small>
								</div>
								<div class="card-body d-flex flex-column">
									<h3 class="card-title font-weight-bold">Water Park Ceria</h3>
									<small><b class="text-warning">4.2</b> / 5.0</small>
									<span class="text-muted">Rp <span class="h3">40.000</span> / org</span>
								</div>
								<div class="card-footer">
									<div class="d-flex justify-content-center">
										<a href="#" style="font-size: 0.8rem;" class="text-primary stretched-link">View Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.content -->
				</div>
			</div>
		</div>
		<!-- /.content-wrapper -->

		<!-- Main Footer -->
		<footer class="main-footer">
			<!-- To the right -->
			<div class="float-right d-none d-sm-inline">
				Anything you want
			</div>
			<!-- Default to the left -->
			<strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
		</footer>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
	<script src="<?= base_url('public/plugins/jquery/jquery.min.js') ?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('public/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('public/js/adminlte.min.js') ?>"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url('public/js/demo.js') ?>"></script>
</body>

</html>
