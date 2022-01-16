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
    <a href="<?= base_url() ?>" target="_blank"><button type="button" class="btn btn-custon-three btn-danger btn-md" style="margin-bottom: 15px;">Lihat Website</button></a>
        <div class="alert alert-info alert-st-two" role="alert">
            <i class="fa fa-info-circle edu-inform admin-check-pro" aria-hidden="true"></i>
            <p class="message-mg-rt">Proses upload foto membutuhkan waktu untuk mengkonversi, silahakan tunggu beberapa detik.</p>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#slideshow">Pengaturan Slideshow Website</a></li>
                        <li><a href="#f_informasi">Pengaturan Footer Informasi</a></li>
                        <li><a href="#f_website">Pengaturan Footer Website</a></li>
                        <li><a href="#f_media">Pengaturan Call Center</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="slideshow">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <?= form_open_multipart('pengaturan/header_web') ?>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="devit-card-custom">
                                                    <input type="hidden" name="id" value="<?= $header_web['id'] ?>">
                                                        <div class="form-group-inner">
                                                            <label style="font-size: 17px;">Foto Slideshow 1</label>
                                                            <div class="row">
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <img src="<?= base_url('assets/lawmaker/images/' . $header_web['slideshow_1']); ?>" style="height: 250px; width: 400px; margin-bottom: 10px" />
                                                                <div class="file-upload-inner ts-forms">
                                                                    <div class="input prepend-big-btn">
                                                                        <div class="file-button">
                                                                            Browse
                                                                            <input type="file" id="slideshow_1" name="slideshow_1" onchange="document.getElementById('slideshow1').value = this.value;">
                                                                        </div>
                                                                        <input type="text" id="slideshow1" placeholder="Tidak ada file dipilih" autocomplete="off">
                                                                        * Upload foto ukuran 1800 x 1201 pixels
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <label style="font-size: 17px;">Teks Slideshow 1</label>
                                                            <div class="row">
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" id="text_1" name="text_1" value="<?= $header_web['text_1']; ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <label style="font-size: 17px;">Foto Slideshow 2</label>
                                                            <div class="row">
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <img src="<?= base_url('assets/lawmaker/images/' . $header_web['slideshow_2']); ?>" style="height: 250px; width: 400px; margin-bottom: 10px" />
                                                                <div class="file-upload-inner ts-forms">
                                                                    <div class="input prepend-big-btn">
                                                                        <div class="file-button">
                                                                            Browse
                                                                            <input type="file" id="slideshow_2" name="slideshow_2" onchange="document.getElementById('slideshow2').value = this.value;">
                                                                        </div>
                                                                        <input type="text" id="slideshow2" placeholder="Tidak ada file dipilih" autocomplete="off">
                                                                        * Upload foto ukuran 1800 x 1201 pixels
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <label style="font-size: 17px;">Teks Slideshow 2</label>
                                                            <div class="row">
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" id="text_2" name="text_2" value="<?= $header_web['text_2']; ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <label style="font-size: 17px;">Foto Slideshow 3</label>
                                                            <div class="row">
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <img src="<?= base_url('assets/lawmaker/images/' . $header_web['slideshow_3']); ?>" style="height: 250px; width: 400px; margin-bottom: 10px" />
                                                                <div class="file-upload-inner ts-forms">
                                                                    <div class="input prepend-big-btn">
                                                                        <div class="file-button">
                                                                            Browse
                                                                            <input type="file" id="slideshow_3" name="slideshow_3" onchange="document.getElementById('slideshow3').value = this.value;">
                                                                        </div>
                                                                        <input type="text" id="slideshow3" placeholder="Tidak ada file dipilih" autocomplete="off">
                                                                        * Upload foto ukuran 1800 x 1201 pixels
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                            <label style="font-size: 17px;">Teks Slideshow 3</label>
                                                            <div class="row">
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" class="form-control" id="text_3" name="text_3" value="<?= $header_web['text_3']; ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-custon-three btn-primary btn-md">Submit</button>
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
                                            <?= form_open('pengaturan/informasi') ?>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="devit-card-custom">
                                                    <label style="font-size: 17px;">Informasi bagian kiri</label>
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="<?= $informasi['id'] ?>">
                                                            <label>Judul</label>
                                                            <input type="text" class="form-control" id="title_1" name="title_1" value="<?= $informasi['title_1']; ?>" required>
                                                            <?= form_error('title_1', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Isi</label>
                                                            <textarea name="informasi_1" id="summernote3"><?= $informasi['informasi_1']; ?></textarea>
                                                        <p>* Untuk enter tulisan tekan SHIFT + ENTER. Atau klik tombol tanda tanya untuk melihat shortcut keyboard.</p>
                                                        </div>
                                                    </div>
                                                    <label style="font-size: 17px;">Informasi bagian kanan</label>
                                                        <div class="form-group">
                                                            <label>Judul</label>
                                                            <input type="text" class="form-control" id="title_2" name="title_2" value="<?= $informasi['title_2']; ?>" required>
                                                            <?= form_error('title_2', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Isi</label>
                                                        <textarea name="informasi_2" id="summernote4"><?= $informasi['informasi_2']; ?></textarea>
                                                        <p>* Untuk enter tulisan tekan SHIFT + ENTER. Atau klik tombol tanda tanya untuk melihat shortcut keyboard.</p>
                                                        </div>
                                                        <button type="submit" class="btn btn-custon-three btn-primary btn-md">Submit</button>
                                                    </div>
                                                </div>
                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="product-tab-list tab-pane fade" id="f_website">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <?= form_open() ?>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="devit-card-custom">
                                                    <label style="font-size: 17px;">Informasi 1 Bagian Footer</label>
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="<?= $website['id'] ?>">
                                                            <label>Judul</label>
                                                            <input type="text" class="form-control" id="title_1" name="title_1" value="<?= $website['title_1']; ?>" required>
                                                            <?= form_error('title_1', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Isi</label>
                                                            <textarea name="informasi_1" id="summernote1"><?= $website['informasi_1']; ?></textarea>
                                                        <p>* Untuk enter tulisan tekan SHIFT + ENTER. Atau klik tombol tanda tanya untuk melihat shortcut keyboard.</p>
                                                        </div>
                                                    </div>
                                                    <label style="font-size: 17px;">Informasi 2 Bagian Footer</label>
                                                        <div class="form-group">
                                                            <label>Judul</label>
                                                            <input type="text" class="form-control" id="title_2" name="title_2" value="<?= $website['title_2']; ?>" required>
                                                            <?= form_error('title_2', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Isi</label>
                                                        <textarea name="informasi_2" id="summernote2"><?= $website['informasi_2']; ?></textarea>
                                                        <p>* Untuk enter tulisan tekan SHIFT + ENTER. Atau klik tombol tanda tanya untuk melihat shortcut keyboard.</p>
                                                        </div>
                                                        <label style="font-size: 17px;">Alamat Kantor</label>
                                                        <div class="form-group">
                                                            <textarea type="text" class="form-control" id="alamat" name="alamat" required><?= $website['alamat']; ?></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-custon-three btn-primary btn-md">Submit</button>
                                                    </div>
                                                </div>
                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="product-tab-list tab-pane fade" id="f_media">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <?= form_open('pengaturan/media') ?>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="devit-card-custom">
                                                    <label style="font-size: 17px;">Pengaturan Call Center</label>
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="<?= $media['id'] ?>">
                                                            <label>Nomor Call Center</label>
                                                            <input type="text" class="form-control" id="text_1" name="text_1" value="<?= $media['text_1']; ?>" required>
                                                            * Call Center ini digunakan pada logo WhatsApp pojok kanan bawah di halaman website.
                                                            <?= form_error('text_1', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                    </div>
                                                    <label style="font-size: 17px;">Pengaturan Media Sosial</label>
                                                        <div class="form-group">
                                                            <label>Instagram</label>
                                                            <input type="text" class="form-control" id="text_2" name="text_2" value="<?= $media['text_2']; ?>" required>
                                                            <?= form_error('text_2', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Facebook</label>
                                                            <input type="text" class="form-control" id="text_3" name="text_3" value="<?= $media['text_3']; ?>" required>
                                                            <?= form_error('text_3', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control" id="slideshow_1" name="slideshow_1" value="<?= $media['slideshow_1']; ?>" required>
                                                            <?= form_error('slideshow_1', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <button type="submit" class="btn btn-custon-three btn-primary btn-md">Submit</button>
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