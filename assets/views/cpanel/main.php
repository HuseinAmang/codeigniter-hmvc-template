<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta charset="utf-8">
	<meta name="author" content="Mochamad Farid Husein">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="shortcut icon" href='<?= base_url("assets/dist/img/logo_icon/icon_48x48.png"); ?>'>
	<link rel="apple-touch-icon" href='<?= base_url("assets/dist/img/logo_icon/icon_48x48.png"); ?>'>
	<link rel="apple-touch-icon" sizes="76x76" href='<?= base_url("assets/dist/img/logo_icon/icon_72x72.png") ?>'>
	<link rel="apple-touch-icon" sizes="120x120" href='<?= base_url("assets/dist/img/logo_icon/icon_144x144.png") ?>'>
	<link rel="apple-touch-icon" sizes="152x152" href='<?= base_url("assets/dist/img/logo_icon/icon_192x192.png"); ?>'>
	
	<?php $this->session->set_userdata('referred_from', current_url()); ?>
	<!-- Start Style -->
	<?= $this->load->view('cpanel/style', TRUE) ?>
	<!-- End Style -->
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm accent-navy">
	<div class="wrapper">
		<!-- Start Header -->
		<?= $this->load->view('cpanel/header', TRUE) ?>
		<!-- end-header -->

		<!-- Start content -->
		<?= $content ?>
		<!-- End content -->

		<!-- Start Footer -->
		<?= $this->load->view('cpanel/footer', TRUE) ?>
		<!-- End Footer -->
	</div>
	<!-- Start js -->
	<?= $this->load->view('cpanel/script', TRUE) ?>
	<!-- End js -->
</body>

</html>