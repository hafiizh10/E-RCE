<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3>Halaman <?= $title; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form Start -->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#slideshow">Form <?= $title ?></a></li>
                        <li><a href="#f_informasi">Pengaturan Logo Aplikasi</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="slideshow">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <?= form_open_multipart() ?>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="devit-card-custom">
                                                            <div class="form-group">
                                                            <input type="hidden" name="id" value="<?= $aplikasi['id'] ?>">
                                                            <label style="font-size: 17px;">Nama Aplikasi</label>
                                                            <input type="text" class="form-control" id="nama_aplikasi" name="nama_aplikasi" value="<?= $aplikasi['nama_aplikasi']; ?>" autocomplete="off" placeholder="Isi sesuai dengan nama lembaga/organisasi/komunitas" required>
                                                            <?= form_error('nama_aplikasi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="font-size: 17px;">Title Aplikasi</label>
                                                            <input type="text" class="form-control" id="title_aplikasi" name="title_aplikasi" autocomplete="off" value="<?= $aplikasi['title_aplikasi']; ?>" placeholder="Isi sesuai dengan nama lembaga/organisasi/komunitas" required>
                                                            <?= form_error('title_aplikasi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="font-size: 17px;">Logo Menu</label>
                                                            <input type="text" class="form-control" id="logo_menu" name="logo_menu" autocomplete="off" value="<?= $aplikasi['logo_menu']; ?>" placeholder="Isi singkatan dari nama lembaga/organisasi/komunitas maksimal 8 karakter" required>
                                                            <?= form_error('logo_menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="font-size: 17px;">Footer Aplikasi</label>
                                                            <input type="text" class="form-control" id="footer_aplikasi" name="footer_aplikasi" autocomplete="off" value="<?= $aplikasi['footer_aplikasi']; ?>" placeholder="Copyright &copy; 2021 TIM IT IEA Banjarbaru" required>
                                                            <?= form_error('footer_aplikasi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="font-size: 17px;">Favicon</label>
                                                            <br><img src="<?= base_url('assets/img/aplikasi/' . $aplikasi['favicon']); ?>" style="height: 50px; width: 50px; margin-bottom: 10px" />
                                                            <div class="file-upload-inner ts-forms">
                                                                <div class="input prepend-big-btn">
                                                                    </label>
                                                                    <div class="file-button">
                                                                        Browse
                                                                        <input type="file" id="favicon" name="favicon" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                                    </div>
                                                                    <input type="text" id="prepend-big-btn" placeholder="Tidak ada file dipilih" autocomplete="off">
                                                                    <p>*Abaikan jika favicon tidak ingin diganti. <a href="https://favicon.io/favicon-converter/" target="_blank">Klik disini</a> untuk convert dari .png ke .ico</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-custon-four btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="f_informasi">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <?= form_open_multipart('pengaturan/update_image') ?>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="<?= $aplikasi['id'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="font-size: 17px;">Logo Aplikasi</label>
                                                            <br><img src="<?= base_url('assets/img/aplikasi/' . $aplikasi['image']); ?>" style="height: 150px; width: 150px; margin-bottom: 10px" />
                                                            <div class="file-upload-inner ts-forms">
                                                                <div class="input prepend-big-btn">
                                                                    </label>
                                                                    <div class="file-button">
                                                                        Browse
                                                                        <input type="file" id="image" name="image" onchange="document.getElementById('prepend-big').value = this.value;">
                                                                    </div>
                                                                    <input type="text" id="prepend-big" placeholder="Tidak ada file dipilih" autocomplete="off">
                                                                    <p>Unggah logo lembaga/organisasi/komunitas dengan ratio 1:1</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-custon-four btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-sales-area mg-tb-30">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-payment-inner-st">
            <ul id="myTabedu1" class="tab-review-design">
                <li class="active"><a href="#reviews"> Pengaturan Pendaftaran Calon Anggota</a></li>
            </ul>
            <div id="myTabContent" class="tab-content custom-product-edit">
                <div class="product-tab-list tab-pane fade active in" id="reviews">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-content-section">
                        <div class="row">
                            <?= form_open('pengaturan/rekrutmen') ?>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="devit-card-custom">
                                    <div class="form-group-inner">
                                    <label style="font-size: 17px;">Aktivasi Halaman Pendaftaran</label>
                                    <div class="row">
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <input type="hidden" name="id" value="<?= $aplikasi['id'] ?>">
                                            <div class="form-select-list">
                                                <select class="form-control custom-select-value" name="rekrutmen" id="rekrutmen">
                                                    <?php if ($aplikasi['rekrutmen'] == '1') : ?>
                                                        <option value="1" selected>Aktif</option>
                                                        <option value="0">Tidak Aktif</option>
                                                    <?php else : ?>
                                                        <option value="1">Aktif</option>
                                                        <option value="0" selected>Tidak Aktif</option>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <button type="submit" class="btn btn-custon-four btn-primary" style="margin-bottom: 50px;">Submit</button>
                                </div>
                            </div>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Form End -->