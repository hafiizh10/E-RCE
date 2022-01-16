<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3>Halaman <?= $title; ?> Notifikasi</h3>
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
    <div class="alert alert-info alert-st-two" role="alert">
        <i class="fa fa-info-circle edu-inform admin-check-pro" aria-hidden="true"></i>
        <p class="message-mg-rt">Aktivasi Bot harus selalu <strong>aktif</strong> agar informasi dapat terus update dikirim lewat Telegram & WhatsApp.</p>
    </div>
    <?= $this->session->flashdata('message'); ?>
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#f_telegram">Pengaturan API Telegram</a></li>
                        <li><a href="#f_whatsapp">Pengaturan API WhatsApp</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="f_telegram">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <?= form_open() ?>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="<?= $api['id'] ?>">
                                                            <label style="font-size: 17px;">Bot Telegram</label>
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label style="margin-top: 10px">ID Chat</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" id="chat_id" name="chat_id" value="<?= $api['chat_id']; ?>" autocomplete="off" required>
                                                                </div>
                                                            </div>
                                                            <?= form_error('chat_id', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label style="margin-top: 10px">Token Bot</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" id="token" name="token" value="<?= $api['token']; ?>" autocomplete="off" required>
                                                                </div>
                                                            </div>
                                                            <?= form_error('token', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label style="margin-top: 10px">Aktivasi Bot</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" name="bot_active" id="bot_active">
                                                                        <?php if ($api['bot_active'] == '1') : ?>
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
                                                        <button type="submit" class="btn btn-custon-four btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="f_whatsapp">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <?= form_open('pengaturan/update_wa') ?>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="devit-card-custom">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="<?= $api_wa['id'] ?>">
                                                            <label style="font-size: 17px;">Bot WhatsApp</label>
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label style="margin-top: 10px">Nomor WA</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" id="chat_id" name="chat_id" value="<?= $api_wa['chat_id']; ?>" autocomplete="off" required>
                                                                </div>
                                                                <div class="col-lg-12" style="margin-top: 5px">
                                                                    *nomor WhatsApp dapat diisi lebih dari satu. Contoh : 08212xxxx, 08124xxxx, dst.
                                                                </div>
                                                            </div>
                                                            <?= form_error('chat_id', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label style="margin-top: 10px">Token</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" id="token" name="token" value="<?= $api_wa['token']; ?>" autocomplete="off" required>
                                                                </div>
                                                            </div>
                                                            <?= form_error('token', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label style="margin-top: 10px">Domain API</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <input type="text" class="form-control" id="image" name="image" value="<?= $api_wa['image']; ?>" autocomplete="off" required>
                                                                </div>
                                                            </div>
                                                            <?= form_error('image', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label style="margin-top: 10px">Aktivasi Bot</label>
                                                                </div>
                                                                <div class="col-lg-9">
                                                                    <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" name="bot_active" id="bot_active">
                                                                        <?php if ($api_wa['bot_active'] == '1') : ?>
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
<!-- Form End -->