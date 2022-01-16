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
                                        <input type="hidden" name="id" value="<?= $rs['id'] ?>">
                                            <input type="text" class="form-control" id="nama_rs" name="nama_rs" value="<?= $rs['nama_rs'] ?>" required>
                                            <?= form_error('nama_rs', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="link_maps" name="link_maps" value="<?= $rs['link_maps'] ?>" required>
                                            <?= form_error('link_maps', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-custon-four btn-primary">Submit</button>
                                        <input type="button" onclick="location.href='<?= base_url('admin/tambah_rs') ?>';" class="btn btn-custon-four btn-danger" value="Kembali" />
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