<script src="<?= base_url('assets/'); ?>ckeditor/ckeditor.js"></script>
<script src="<?= base_url('assets/'); ?>ckeditor/samples/js/sample.js"></script>
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
                    <li class="active"><a href="#reviews"> Form <?= $title; ?></a></li>
                </ul>
                <div id="myTabContent" class="tab-content custom-product-edit">
                    <div class="product-tab-list tab-pane fade active in" id="reviews">
                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                            <div class="row">
                            <?= form_open_multipart() ?>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="devit-card-custom mg-b-20">
                                        <div class="form-group-inner">
                                        <label id="pratinjau" style="display: none;">Pratinjau Foto Yang Diunggah</label><br>
                                            <?php
                                            if($post['image'] == '') {
                                                echo '<strong id="catatan" style="color:red;">Tidak foto postingan yang diupload</strong><img id="output_image"/>';
                                            } else {
                                            ?>
                                            <img id="output_image" src="<?= base_url('assets/img/postingan/' . $post['image']); ?>" style="height: 291px; width: 408px;" />
                                            <?php } ?>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Ganti Foto Postingan</label>
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input type="file" id="image" name="image" onchange="document.getElementById('images').value = this.value; preview_image(event);">
                                                    </div>
                                                    <input type="text" id="images" placeholder="Tidak ada file dipilih" autocomplete="off">
                                                </div>
                                            </div>
                                            <p>*Abaikan jika foto tidak ingin diganti. Upload foto max 2 MB</p>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Judul Berita</label>
                                            <input type="text" class="form-control" id="judul" name="judul" value="<?= $post['judul']; ?>" required>
                                            <?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Kategori</label>
                                            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $post['kategori']; ?>" required>
                                            <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Tanggal dibuat</label>
                                            <input type="text" class="form-control" id="created_at" name="created_at" value="<?= $post['created_at']; ?>" required>
                                        </div>
                                        <div class="form-group-inner">
                                            <label>Isi Postingan</label>
                                            <textarea name="isi" id="editor"><?= $post['isi'] ?></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-custon-four btn-primary">Submit</button>
                                    <input type="button" onclick="location.href='<?= base_url('admin/postingan') ?>';" class="btn btn-custon-four btn-danger" value="Kembali" />
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
<script>
	initSample();
    function preview_image(event) 
    {
        var reader = new FileReader();
        reader.onload = function()
        {
            var output = document.getElementById('output_image');
            output.src = reader.result;
            output.setAttribute('width', '408px');
            output.setAttribute('height', '291px');
            document.getElementById('pratinjau').style.display = "";
            document.getElementById('catatan').style.display = "none";
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>