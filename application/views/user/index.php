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
</div>
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <img src="<?= base_url('assets/img/profile/' . $user['image']); ?>" style="height: 350p x" id="output_image" />
                    </div>
                    <div class="profile-details-hr">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Nama</b><br /> <?= $user['nama']; ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Level</b><br /> <?= $user['level']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Username</b><br /> <?= $user['username']; ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Telepon</b><br /> <?= $user['tlp_user']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="address-hr">
                                    <p><b>Alamat</b><br /> <?= $user['alamat']; ?>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <?= form_open_multipart('user/edit_profil', 'autocomplete="off"'); ?>
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#data">Update Profil</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                        <div class="product-tab-list tab-pane fade active in" id="data">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="<?= $user['nama']; ?>" required>
                                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?= $user['alamat']; ?>">
                                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>
                                                <div class="file-upload-inner ts-forms">
                                                <label for=""><b>Ganti Foto Profil</b></label><br>
                                                    <div class="input prepend-big-btn">
                                                        <label class="icon-right" for="prepend-big-btn">
                                                                <i class="fa fa-download"></i>
                                                        </label>
                                                        <div class="file-button">
                                                            Browse
                                                            <input type="file" id="image" name="image" onchange="document.getElementById('prepend-big-btn').value = this.value; preview_image(event);">
                                                        </div>
                                                        <input type="text" id="prepend-big-btn" placeholder="Tidak ada file dipilih" autocomplete="off">
                                                        <p>*Abaikan jika foto profil tidak ingin diganti.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                                    <input type="text" name="nopol_user" class="form-control" placeholder="Nomor Polisi" value="<?= $user['nopol_user']; ?>">
                                                    <?= form_error('nopol_user', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>
                                                <input type="text" name="tlp_user" class="form-control" placeholder="Nomor Telepon" value="<?= $user['tlp_user']; ?>">
                                                <?= form_error('tlp_user', '<small class="text-danger pl-3">', '</small>') ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="payment-adress mg-t-15">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15" style="margin-top: 20px;">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?= form_close() ?>
            </div>
        </div>
    </div>
</div>
<script>
    function preview_image(event) 
    {
        var reader = new FileReader();
        reader.onload = function()
        {
            var output = document.getElementById('output_image');
            output.src = reader.result;
            output.setAttribute('style', 'margin-bottom:10px');
            document.getElementById('pratinjau').style.display = "";
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>