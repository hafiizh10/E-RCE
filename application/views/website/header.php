<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $aplikasi['title_aplikasi']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/aplikasi/' . $aplikasi['favicon']); ?>">
	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?= base_url('assets/lawmaker/') ?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?= base_url('assets/lawmaker/') ?>css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?= base_url('assets/lawmaker/') ?>css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?= base_url('assets/lawmaker/') ?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/all.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?= base_url('assets/lawmaker/') ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/lawmaker/') ?>css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?= base_url('assets/lawmaker/') ?>css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?= base_url('assets/lawmaker/') ?>fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?= base_url('assets/lawmaker/') ?>css/style.css">

	<link rel="stylesheet" href="<?= base_url('assets/lawmaker/') ?>wa/floating-wpp.min.css">

	<!-- Modernizr JS -->
	<script src="<?= base_url('assets/lawmaker/') ?>js/modernizr-2.6.2.min.js"></script>
	<style>
		.content {
			width: 450px;
			overflow: hidden;
			margin: auto;
			margin-bottom: 10px;
		}

		.content img {
			margin-right: 5px;
			float: left;
			height: 80px;
			width: 80px;
		}

		.content p {
			-webkit-text-stroke: 1px white;
			font-family: 'Work Sans', sans-serif;
			font-size: 18px;
			margin: auto;
			padding: 15px;
			text-align: left;
			display: block;
			margin: 5px 0 0 0;
			line-height: 1.2;
			color: #ffffff;
		}

		.tombol_wa {
			z-index: 10;
		}

		@media only screen and (max-width: 600px) {
			.content {
				width: 350px;
				overflow: hidden;
				margin: auto 10px;
				margin-bottom: 10px;
			}

			.content img {
				margin-right: 5px;
				float: left;
				height: 80px;
				width: 80px;
			}

			.content p {
				-webkit-text-stroke: 1.5px white;
				font-family: 'Work Sans', sans-serif;
				margin: auto;
				padding: 10px;
				text-align: left;
				display: block;
				color: #ffffff;
			}
		}
	</style>
</head>

<body>
	<div id="page">
		<nav class="ftco-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="content" style="cursor: pointer;" onclick="location.href='<?= base_url('') ?>'"><img src="<?= base_url('assets/img/aplikasi/' . $aplikasi['image']); ?>" alt="Logo <?= $aplikasi['nama_aplikasi']; ?>">
								<p><?= $aplikasi['nama_aplikasi']; ?></p>
							</div>
						</div>
						<div class="col-md-10 text-right menu-1">
							<ul>
								<li class="active"><a href="<?= base_url(); ?>">Beranda</a></li>
								<li><a href="<?= base_url('auth'); ?>">Login Aplikasi</a></li>
								<li><a href="<?= base_url('website/galeri'); ?>">Galeri Kegiatan</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<aside id="ftco-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li style="background-image: url(<?= base_url('assets/lawmaker/') ?>images/<?= $slideshow['slideshow_1']; ?>);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
									<div class="slider-text-inner">
										<h1><strong><?= $slideshow['text_1']; ?></strong></h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?= base_url('assets/lawmaker/') ?>images/<?= $slideshow['slideshow_2']; ?>);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
									<div class="slider-text-inner">
										<h1><strong><?= $slideshow['text_2']; ?></strong></h1>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?= base_url('assets/lawmaker/') ?>images/<?= $slideshow['slideshow_3']; ?>);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
									<div class="slider-text-inner">
										<h1><strong><?= $slideshow['text_3']; ?></strong></h1>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>