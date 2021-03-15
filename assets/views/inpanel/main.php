<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Mochamad Farid Husein">
	<meta name="robots" content="noindex,follow">

	<link rel="shortcut icon" href='<?= base_url("assets/dist/img/logo_icon/icon_48x48.png"); ?>'>
	<link rel="apple-touch-icon" href='<?= base_url("assets/dist/img/logo_icon/icon_48x48.png"); ?>'>
	<link rel="apple-touch-icon" sizes="76x76" href='<?= base_url("assets/dist/img/logo_icon/icon_72x72.png") ?>'>
	<link rel="apple-touch-icon" sizes="120x120" href='<?= base_url("assets/dist/img/logo_icon/icon_144x144.png") ?>'>
	<link rel="apple-touch-icon" sizes="152x152" href='<?= base_url("assets/dist/img/logo_icon/icon_192x192.png"); ?>'>

	<?= $this->load->view('inpanel/style', TRUE) ?>
</head>

<body class="hold-transition login-page">
	<?= $content; ?>

	<?= $this->load->view('inpanel/script', TRUE) ?>
</body>

</html>