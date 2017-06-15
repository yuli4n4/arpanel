<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>ARPanel 1.0 | Starter</title>
	<link rel="stylesheet" href="<?= base_url('assets/themes/default/bootstrap/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/themes/default/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/themes/default/dist/css/AdminLTE.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/themes/default/dist/css/skins/skin-blue.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/themes/default/bootstrap/css/bootstrap-dialog.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/themes/default/jasny-bootstrap/css/jasny-bootstrap.min.css') ?>">
	<script src="<?= base_url('assets/themes/default/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
</head>
<body class="<?= $class ?>">
	<?= $this->load->get_section('header'); ?>
	<?= $this->load->get_section('sidebar')?>
	<?= $output ?>
	<?= $this->load->get_section('footer')?>
	<script src="<?= base_url('assets/themes/default/bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/themes/default/dist/js/app.min.js') ?>"></script>
	<script src="<?= base_url('assets/themes/default/bootstrap/js/bootstrap-dialog.min.js') ?>"></script>
	<script src="<?= base_url('assets/themes/default/jasny-bootstrap/js/jasny-bootstrap.min.js') ?>"></script>
</body>
</html>
