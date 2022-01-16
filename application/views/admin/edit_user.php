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
                                <?= form_open() ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="devit-card-custom">
                                        <div class="form-group">
                                        <input type="hidden" name="id" value="<?= $anggota['id'] ?>">
                                        <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $anggota['nama'] ?>" autocomplete="off" required>
                                            <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Nomor Polisi</label>
                                            <input type="text" class="form-control" id="nopol_user" name="nopol_user" value="<?= $anggota['nopol_user'] ?>" autocomplete="off" required>
                                            <?= form_error('nopol_user', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Nomor Register Anggota</label>
                                            <input type="text" class="form-control" name="nra" value="<?= $anggota['nra'] ?>" autocomplete="off" required>
                                            <?= form_error('nra', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Jabatan</label>
                                            <input type="text" class="form-control" name="jabatan" value="<?= $anggota['jabatan'] ?>" autocomplete="off" required>
                                            <?= form_error('jabatan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Alamat</label>
                                            <textarea type="text" class="form-control" id="alamat" name="alamat" autocomplete="off" required><?= $anggota['alamat'] ?></textarea>
                                            <?= form_error('alamat', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Nomor Telepon</label>
                                            <input type="text" class="form-control" name="tlp_user" value="<?= $anggota['tlp_user'] ?>" autocomplete="off" required>
                                            <?= form_error('tlp_user', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Email</label>
                                            <input type="text" class="form-control" name="email" value="<?= $anggota['email'] ?>" autocomplete="off" required>
                                            <?= form_error('email', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-custon-four btn-primary">Submit</button>
                                        <input type="button" onclick="location.href='<?= base_url('admin/user') ?>';" class="btn btn-custon-four btn-danger" value="Kembali" />
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