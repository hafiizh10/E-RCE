		<div id="intro-bg">
			<div class="container">
				<div id="ftco-intro" style="position: relative; margin-bottom: -150px!important;">
					<div class="third-col">
						<h2 class="h3"><?= $informasi['title_1']; ?></h2>
						<?= $informasi['informasi_1']; ?>
					</div>
					<div class="third-col third-col-color">
						<h2 class="h3"><?= $informasi['title_2']; ?></h2>
						<?= $informasi['informasi_2']; ?>
					</div>
				</div>
			</div>
		</div>

		<footer id="ftco-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 ftco-widget text-justify">
						<h4><?= $website['title_1'] ?></h4>
						<?= $website['informasi_1'] ?>
					</div>
					<div class="col-md-4 col-md-push-1">
						<h4>Alamat</h4>
						<p><?= $website['alamat']; ?></p>
					</div>
					<div class="col-md-3 col-md-push-2">
						<h4><?= $website['title_2'] ?></h4>
						<?= $website['informasi_2'] ?>
					</div>
				</div>
				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							<?= $aplikasi['footer_aplikasi']; ?> | This
							template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
						<p>
							<ul class="ftco-social-icons">
								<li><a href="<?= $media['text_2']; ?>"><i class="icon-instagram"></i></a></li>
								<li><a href="<?= $media['text_3']; ?>"><i class="icon-facebook"></i></a></li>
								<li><a href="mailto:<?= $media['slideshow_1']; ?>"><i class="icon-email"></i></a></li>
								<li><a href="<?= base_url() ?>"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>
			</div>
		</footer>
		<div id="tombol_wa" class="tombol_wa"></div>
		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
		</div>

		<!-- jQuery -->
		<script src="<?= base_url('assets/lawmaker/') ?>js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="<?= base_url('assets/lawmaker/') ?>js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="<?= base_url('assets/lawmaker/') ?>js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="<?= base_url('assets/lawmaker/') ?>js/jquery.waypoints.min.js"></script>
		<!-- Stellar Parallax -->
		<script src="<?= base_url('assets/lawmaker/') ?>js/jquery.stellar.min.js"></script>
		<!-- Carousel -->
		<script src="<?= base_url('assets/lawmaker/') ?>js/owl.carousel.min.js"></script>
		<!-- Flexslider -->
		<script src="<?= base_url('assets/lawmaker/') ?>js/jquery.flexslider-min.js"></script>
		<!-- countTo -->
		<script src="<?= base_url('assets/lawmaker/') ?>js/jquery.countTo.js"></script>
		<!-- Magnific Popup -->
		<script src="<?= base_url('assets/lawmaker/') ?>js/jquery.magnific-popup.min.js"></script>
		<script src="<?= base_url('assets/lawmaker/') ?>js/magnific-popup-options.js"></script>
		<!-- Main -->
		<script src="<?= base_url('assets/lawmaker/') ?>js/main.js"></script>
		<script src="<?= base_url('assets/lawmaker/') ?>wa/floating-wpp.min.js"></script>

		<script>
			$(function() {
				$('#tombol_wa').floatingWhatsApp({
					phone: '6282157254820',
					popupMessage: 'Selamat datang di website IEA Banjarbaru tulis pertanyaan anda pada kolom chat dibawah ini',
					message: "Permisi, saya mau tanya tentang ....",
					showPopup: true,
					showOnIE: false,
					headerTitle: '<b>Admin IEA Banjarbaru</b>',
					headerColor: '#25D366',
					backgroundColor: '#25D366',
					buttonImage: '<img src="<?= base_url('assets/lawmaker/') ?>wa/whatsapp.svg" />'
				});
			});
		</script>

		</body>

		</html>