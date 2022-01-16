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
                                        <input type="hidden" name="id" value="<?= $unit['id'] ?>">
                                        <label>Nomor Polisi</label>
                                            <input type="text" class="form-control" id="nopol" name="nopol" value="<?= $unit['nopol'] ?>" required>
                                            <?= form_error('nopol', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Merk Type Kendaraan</label>
                                            <input type="text" class="form-control" id="merk" name="merk" value="<?= $unit['merk'] ?>" required>
                                            <?= form_error('merk', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Jenis Kendaraan</label>
                                            <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $unit['jenis'] ?>" required>
                                            <?= form_error('jenis', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Nomor Rangka Kendaraan</label>
                                            <input type="text" class="form-control" name="no_rangka" value="<?= $unit['no_rangka'] ?>" required>
                                            <?= form_error('no_rangka', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Nomor Mesin Kendaraan</label>
                                            <input type="text" class="form-control" name="no_mesin" value="<?= $unit['no_mesin'] ?>" required>
                                            <?= form_error('no_mesin', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Nomor Mesin Kendaraan</label>
                                            <input type="text" class="form-control" name="fungsi" value="<?= $unit['fungsi'] ?>" required>
                                            <?= form_error('fungsi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Keterangan</label>
                                            <input type="text" class="form-control" name="ket" value="<?= $unit['ket'] ?>" required>
                                            <?= form_error('ket', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-custon-four btn-primary">Submit</button>
                                        <input type="button" onclick="location.href='<?= base_url('admin/kendaraan') ?>';" class="btn btn-custon-four btn-danger" value="Kembali" />
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