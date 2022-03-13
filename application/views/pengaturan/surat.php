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
                        <li class="active"><a href="#kop">Pengaturan Kepala Surat</a></li>
                        <li><a href="#isi_surat">Pengaturan Isi Surat</a></li>
                        <li><a href="#ttd">Pengaturan Tanda Tangan</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="kop">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <?= form_open_multipart() ?>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="<?= $surat['id'] ?>">
                                                            <label style="font-size: 17px;">Nama lembaga/organisasi/komunitas</label>
                                                            <input type="text" class="form-control" id="title_1" name="title_1" value="<?= $surat['title_1']; ?>" autocomplete="off" placeholder="Isi dengan nama lembaga/organisasi/komunitas" required>
                                                            <?= form_error('title_1', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="font-size: 17px;">Alamat lembaga/organisasi/komunitas</label>
                                                            <textarea type="text" class="form-control" id="informasi_1" name="informasi_1" autocomplete="off" placeholder="Isi dengan alamat lembaga/organisasi/komunitas" required><?= $surat['informasi_1']; ?></textarea>
                                                            <?= form_error('informasi_1', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <label style="font-size: 17px;">Logo Kiri</label>
                                                            <br><img src="<?= base_url('assets/img/surat/' . $surat['text_2']); ?>" style="height: 100px; width: 100px; margin-bottom: 10px" />
                                                            <div class="file-upload-inner ts-forms">
                                                                <div class="input prepend-big-btn">
                                                                    </label>
                                                                    <div class="file-button">
                                                                        Browse
                                                                        <input type="file" id="text_2" name="text_2" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                                    </div>
                                                                    <input type="text" id="prepend-big-btn" placeholder="Tidak ada file dipilih" autocomplete="off">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="font-size: 17px;">Logo Kanan</label>
                                                            <br><img src="<?= base_url('assets/img/surat/' . $surat['text_3']); ?>" style="height: 100px; width: 100px; margin-bottom: 10px" />
                                                            <div class="file-upload-inner ts-forms">
                                                                <div class="input prepend-big-btn">
                                                                    </label>
                                                                    <div class="file-button">
                                                                        Browse
                                                                        <input type="file" id="text_3" name="text_3" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                                    </div>
                                                                    <input type="text" id="prepend-big-btn" placeholder="Tidak ada file dipilih" autocomplete="off">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-custon-four btn-primary mg-t-15">Submit</button>
                                                    </div>
                                                </div>
                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="isi_surat">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <?= form_open('surat/isi_surat') ?>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="<?= $surat['id'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="font-size: 17px;">Paragraf Pembuka</label>
                                                            <textarea type="text" id="informasi_2" name="informasi_2" autocomplete="off" required><?= $surat['informasi_2']; ?></textarea>
                                                            <?= form_error('informasi_2', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="font-size: 17px;">Paragraf Penutup</label>
                                                            <textarea type="text" id="alamat" name="alamat" autocomplete="off" required><?= $surat['alamat']; ?></textarea>
                                                            <?= form_error('alamat', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
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
                        <div class="product-tab-list tab-pane fade" id="ttd">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <?= form_open_multipart('surat/ttd') ?>
                                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="<?= $surat['id'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                        <label style="font-size: 17px;">Nama</label>
                                                            <input type="text" class="form-control" id="text_1" name="text_1" autocomplete="off" value="<?= $surat['text_1']; ?>" required>
                                                            <?= form_error('text_1', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="font-size: 17px;">Jabatan</label>
                                                            <input type="text" class="form-control" id="title_2" name="title_2" autocomplete="off" value="<?= $surat['title_2']; ?>" required>
                                                            <?= form_error('title_2', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label style="font-size: 17px;">Scan Tanda Tangan</label>
                                                            <br><img src="<?= base_url('assets/img/surat/' . $surat['slideshow_1']); ?>" style="height: 150px; width: 150px; margin-bottom: 10px" />
                                                            <div class="file-upload-inner ts-forms">
                                                                <div class="input prepend-big-btn">
                                                                    </label>
                                                                    <div class="file-button">
                                                                        Browse
                                                                        <input type="file" id="slideshow_1" name="slideshow_1" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                                    </div>
                                                                    <input type="text" id="prepend-big-btn" placeholder="Tidak ada file dipilih" autocomplete="off">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-custon-four btn-primary mg-t-15">Submit</button>
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