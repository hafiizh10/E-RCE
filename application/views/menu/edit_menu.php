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
                                        <input type="hidden" name="id" value="<?= $user_menu['id'] ?>">
                                            <input type="text" class="form-control" id="menu" name="menu" value="<?= $user_menu['menu'] ?>" required>
                                            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-custon-four btn-primary">Submit</button>
                                        <input type="button" onclick="location.href='<?= base_url('menu') ?>';" class="btn btn-custon-four btn-danger" value="Kembali" />
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