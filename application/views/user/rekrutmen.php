<!doctype html>
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
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/datapicker/datepicker3.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/alerts.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3><?= $title ?></h3>
				<p>Isi formulir dibawah ini dengan benar sesuai dengan keterangan</p>
			</div>
			<div class="content-error">
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
      <?php if ($this->session->flashdata('flash')) : ?>
      <?php endif; ?>
      <?= $this->session->flashdata('message'); ?>
      <?php if ($aplikasi['rekrutmen'] == '1') : ?>
				<div class="hpanel">
            <div class="panel-body">
                <?= form_open('rekrutmen/index', 'autocomplete="off"'); ?>
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" placeholder="Tulis nama lengkap anda" required />
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Nomor Polisi</label>
                            <input type="text" name="nopol_calon" class="form-control" placeholder="Tulis nomor polisi kendaraan" required />
                            <?= form_error('nopol_calon', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control" placeholder="Tulis nomor NIK KTP anda" required />
                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Nomor SIM</label>
                            <input type="text" name="no_sim" class="form-control" placeholder="Tulis nomor SIM C anda" required />
                            <?= form_error('no_sim', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Jenis Kelamin</label>
                            <div class="row">
                              <div class="col-lg-3"><label><input type="radio" value="Laki-laki" name="jk"> <i></i>Laki-Laki</label></div>
                              <div class="col-lg-5"><label><input type="radio" value="Perempuan" name="jk"> <i></i>Perempuan</label></div>
                            </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Tempat Tanggal Lahir</label>
                            <input type="text" name="ttl" class="form-control" placeholder="Tulis tempat/kota lahir anda" required />
                            <?= form_error('ttl', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-lg-12 data-custon-pick" id="data_3">
                          <div class="input-group date">
                              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                              <input type="text" name="tgl_lahir" class="form-control" Placeholder="Isi tanggal lahir anda" autocomplete="off" required />
                          </div>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Tulis alamat rumah lengkap sekarang" required />
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Pekerjaan</label>
                            <input type="text" name="pekerjaan" class="form-control" placeholder="Tulis pekerjaan anda sekarang" required />
                            <?= form_error('pekerjaan', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Nomor Telepon</label>
                            <input type="text" name="no_tlp" class="form-control" placeholder="Tulis nomor telepon anda / nomor WA" required />
                            <?= form_error('no_tlp', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                        <div class="form-group col-lg-12">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Tulis email aktif anda" required />
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success loginbtn">Daftar</button>
                        <input type="button" onclick="location.href='<?= base_url() ?>';" class="btn btn-custon-four btn-danger" value="Kembali" />
                      </div>
                <?= form_close(); ?>
            </div>
        </div>
      <?php else : ?>
      <div class="alert alert-info alert-st-two" role="alert">
      <i class="fa fa-info-circle edu-inform admin-check-pro" aria-hidden="true"></i>
      <p class="message-mg-rt" style="font-size: 17px">Pendaftaran calon anggota saat ini tidak dibuka.</p></div>
      <?php endif; ?>
			</div>
			<div class="text-center login-footer">
        <p><?= $aplikasi['footer_aplikasi']; ?></p>
			</div>
		</div>   
  </div>

    <!-- jquery
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/myscript.js"></script>
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
    <!-- datapicker JS
		============================================ -->
    <script src="<?= base_url('assets/') ?>js/datapicker/bootstrap-datepicker.js"></script>
    <script src="<?= base_url('assets/') ?>js/datapicker/datepicker-active.js"></script>
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