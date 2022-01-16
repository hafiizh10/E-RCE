<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $aplikasi['title_aplikasi']; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/aplikasi/' . $aplikasi['favicon']); ?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/alerts.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/vendor/modernizr-2.8.3.min.js"></script>
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

    .content h4{
      -webkit-text-stroke: 0.5px black;
      margin: auto;
      padding: 15px;
      text-align: left;
      display: block;
      margin: 5px 0 0 0;
      line-height: 1.2;
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
          height: 90px; 
          width: 85px;
      }

      .content h4{
        -webkit-text-stroke: 0.5px black;
        margin: auto;
        padding: 14px;
        text-align: left;
        display: block;
        /* margin-right: 50px; */
      }
    }
    </style>
</head>

<body>
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>[E-RCE] Aplikasi Respon Cepat Emergency</h3>
        <div class="content">
            <img src="<?= base_url('assets/img/aplikasi/' . $aplikasi['image']); ?>" alt="Logo Aplikasi">
            <h4><?= $aplikasi['nama_aplikasi']; ?></h4>
        </div>
			</div>
			<div class="content-error">
				<div class="hpanel">
        <?= $this->session->flashdata('message'); ?>
          <div class="panel-body">
              <?= form_open('auth', 'id="loginForm"'); ?>
                  <div class="form-group">
                      <label class="control-label" for="username">Username</label>
                      <input type="text" placeholder="Username" name="username" id="username" class="form-control" autofocus>
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="password">Password</label>
                      <input type="password" title="Please enter your password" placeholder="Password" name="password" id="password" class="form-control">
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                  </div>
                  <button class="btn btn-success btn-block loginbtn" type="submit">Login</button>
              <?= form_close(); ?>
          </div>
        </div>
			</div>
      <div class="text-center login-footer">
        <p><?= $aplikasi['footer_aplikasi']; ?></p>
      </div>
		</div>
    <!-- jquery
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/metisMenu/metisMenu.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/icheck/icheck.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/main.js"></script>
</body>

</html>