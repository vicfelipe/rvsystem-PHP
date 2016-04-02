<?php if ( ! defined('ABSPATH')) exit; ?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="pt-BR">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="pt-BR">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="pt-BR">
<!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link type="text/css" href="<?php echo HOME_URI;?>/views/_css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="<?php echo HOME_URI;?>/views/_css/datepicker3.css" rel="stylesheet">
	<link type="text/css" href="<?php echo HOME_URI;?>/views/_css/style.css" rel="stylesheet">

	<!--Icons-->
	<script src="<?php echo HOME_URI;?>/views/_js/lumino.glyphs.js"></script>


	<!--[if lt IE 9]>
	<script src="<?php echo HOME_URI;?>/views/_js/scripts.js"></script>
	<![endif]-->

	<title><?php echo $this->title; ?></title>
</head>

<body>