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
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
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
                            <?= form_open('user/ganti_password', 'autocomplete="off"') ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="devit-card-custom">
                                        <div class="form-group-inner">
                                            <label>Password Lama</label>
                                            <input type="text" class="form-control" id="password_lama" name="password_lama" placeholder="Isi password lama anda" required>
                                            <?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Password Baru</label>
                                            <input type="password" class="form-control" id="password_baru1" name="password_baru1" placeholder="Isi password baru anda" required>
                                            <?= form_error('password_baru1', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Ulangi Password</label>
                                            <input type="password" class="form-control" id="password_baru2" name="password_baru2" placeholder="Ulangi password baru" required>
                                            <?= form_error('password_baru2', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-custon-four btn-primary" style="margin-top: 20px;">Submit</button>
                                    <?= form_close() ?>
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