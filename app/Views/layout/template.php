<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <link rel="stylesheet" href="<?= base_url('public/assets/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/bootstrap.css'); ?>">
    <script src="<?= base_url('public/assets/jquery.css'); ?>"></script>
    <script src="<?= base_url('public/assets/popper.css'); ?>"></script>

<style>
	@media print{
		.btn,
		header,
		footer 
		{
			display: none;
		}
	}
</style>
</head>

<?php $this->renderSection('content'); ?>

</html>