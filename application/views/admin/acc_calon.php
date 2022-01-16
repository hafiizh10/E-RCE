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
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                <ul id="myTabedu1" class="tab-review-design">
                    <li class="active"><a href="#reviews"> Form <?= $title; ?></a></li>
                </ul>
                <div id="myTabContent" class="tab-content custom-product-edit">
                    <div class="product-tab-list tab-pane fade active in" id="reviews">
                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                            <div class="row">
                                <?= form_open('admin/user') ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="devit-card-custom">
                                        <div class="form-group">
                                        <label>Nama Lengkap</label>
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?= cetak($calon_anggota['id']); ?>" required>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= cetak($calon_anggota['nama']); ?>" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Nomor Polisi</label>
                                            <input type="text" class="form-control" id="nopol_user" name="nopol_user" value="<?= cetak($calon_anggota['nopol_calon']); ?>" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                            <input type="text" class="form-control" id="jk" name="jk" value="<?= cetak($calon_anggota['jk']); ?>" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= cetak($calon_anggota['alamat']); ?>" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Nomor Telepon</label>
                                            <input type="text" class="form-control" name="tlp_user" value="<?= cetak($calon_anggota['no_tlp']); ?>" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Nomor Telepon</label>
                                            <input type="text" class="form-control" name="email" value="<?= cetak($calon_anggota['email']); ?>" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Jabatan</label>
                                            <input type="text" class="form-control" name="jabatan" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Nomor Register Anggota</label>
                                            <input type="text" class="form-control" name="nra" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Username</label>
                                            <input type="text" class="form-control" name="username" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Passoword</label>
                                            <input type="text" class="form-control" name="password" required>
                                        </div>
                                        <button type="submit" class="btn btn-custon-four btn-primary">Submit</button>
                                        <input type="button" onclick="location.href='<?= base_url('admin/calon_anggota') ?>';" class="btn btn-custon-four btn-danger" value="Kembali" />
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
    </div>
</div>
<!-- Form End -->