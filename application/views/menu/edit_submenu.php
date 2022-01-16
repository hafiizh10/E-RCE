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
                                        <div class="form-group-inner">
                                            <input type="hidden" name="id" value="<?= $user_sub_menu['id'] ?>">
                                            <label>Nama Submenu</label>
                                            <input type="text" class="form-control" id="title" name="title" value="<?= $user_sub_menu['title'] ?>">
                                            <?= form_error('title', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Menu</label>
                                            <div class="form-select-list">
                                            <select class="form-control custom-select-value" name="menu_id" id="menu_id">
                                            <?php foreach ($menu_id as $m) : ?>
                                                <?php if ($m['id'] == $user_sub_menu['menu_id']) : ?>
                                                    <option value="<?= $m['id']; ?>" selected><?= $m['menu'] ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $m['id']; ?>"><?= $m['menu'] ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>URL Submenu</label>
                                            <input type="text" class="form-control" id="url" name="url" value="<?= $user_sub_menu['url'] ?>">
                                            <?= form_error('url', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group-inner">
                                        <label style="margin-left: 10px;">Aktif Submenu</label>
                                        <div class="i-checks pull-left">
                                            <?php if('1' == $user_sub_menu['is_active']) : ?>
                                            <input class="pull-left" type="checkbox" name="is_active" value="1" checked>
                                            <?php elseif('0' == $user_sub_menu['is_active']) : ?>
                                            <input class="pull-left" type="checkbox" name="is_active" value="1">
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-custon-four btn-primary">Submit</button>
                                    <input type="button" onclick="location.href='<?= base_url('menu/submenu') ?>';" class="btn btn-custon-four btn-danger" value="Kembali" />
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