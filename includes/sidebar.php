<?php
  require('session.php');
  confirm_logged_in();
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<style type="text/css">
		#overlay {
			position: fixed;
			display: none;
			width: 100%;
			height: 100vh;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: rgba(0, 0, 0, 0.5);
			z-index: 2;
			cursor: pointer;
		}

		#text {
			position: absolute;
			top: 50%;
			left: 50%;
			font-size: 50px;
			color: white;
			transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
		}

		.sidebar {

			width: 50px;
			z-index: 1000;
			display: block;
			padding: 20px;
			overflow-x: hidden;
			overflow-y: auto;

		}

		.bg-side {
			background-color: hsl(356, 82%, 21%);
			background-image: radial-gradient(650px circle at 0% 0%,
					hsl(356, , 41%, 40%) 15%,
					hsl(356, , 41%, 30%) 36%,
					hsl(356, , 41%, 20%) 75%,
					hsl(356, , 41%, 19%) 80%,
					transparent 100%),
				radial-gradient(1250px circle at 100% 100%,
					hsl(356, , 41%, 45%) 15%,
					hsl(356, , 41%, 30%) 36%,
					hsl(356, , 41%, 20%) 75%,
					hsl(356, , 41%, 19%) 80%,
					transparent 100%);
		}
	</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Amelia's Kitchen Cafe Sales & Inventory Tracking System</title>
	<link rel="icon" href="logo_amelia.png">

	<!-- Custom fonts for this template-->
	<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="../css/sb-admin-2.min.css" rel="stylesheet">

	<!-- Custom styles for this page -->
	<link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#BBA732;">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
				<div class="sidebar-brand-icon">
					<img src="logo_amelia.png" height="100" width="100">
				</div>

			</a>


			<!-- Nav Item - Dashboard -->
			<li class="nav-item">
				<a class="nav-link" href="index.php">
					<i class="fas fa-fw fa-home text-white"></i>
					<span class="text-white">Dashboard</span></a>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading text-white">
				Tables
			</div>
			<!-- Tables Buttons -->

			<li class="nav-item">
				<a class="nav-link" href="product.php">
					<i class="fas fa-fw fa-cookie text-white"></i>
					<span class="text-white">Product</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="inventory.php">
					<i class="fas fa-fw fa-archive text-white"></i>
					<span class="text-white">Inventory</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="transaction.php">
					<i class="fas fa-fw fa-receipt text-white"></i>
					<span class="text-white">Transaction</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="employee.php">
					<i class="fas fa-fw fa-user text-white"></i>
					<span class="text-white">Employee</span></a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="user.php">
					<i class="fas fa-fw fa-users text-white"></i>
					<span class="text-white">Accounts</span></a>
			</li>
			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->
		<?php include_once 'topbar.php'; ?>