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
        <div class="alert alert-info alert-st-two" role="alert">
            <i class="fa fa-info-circle edu-inform admin-check-pro" aria-hidden="true"></i>
            <p class="message-mg-rt"><strong>Perhatian!</strong> Proses pembuatan postingan memerlukan waktu beberapa detik, mohon tunggu sampai proses selesai.</p>
        </div>
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
                                <?= form_open_multipart('admin/buatPost') ?>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="devit-card-custom">
                                        <div class="form-group">
                                        <label>Judul Berita & Postingan</label>
                                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Isi Judul Postingan" required/>
                                            <?= form_error('judul', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Kategori</label>
                                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Isi Kategori Postingan" required/>
                                            <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Tanggal Dibuat</label>
                                            <input type="text" class="form-control" id="created_at" name="created_at" value="<?= waktu_post(); ?>" required/>
                                        </div>
                                        <div class="form-group">
                                        <label>Upload Foto</label>
                                            <div class="file-upload-inner ts-forms">
                                                <div class="input prepend-big-btn">
                                                    <div class="file-button">
                                                        Browse
                                                        <input type="file" id="image" name="image" onchange="document.getElementById('images').value = this.value; preview_image(event);">
                                                    </div>
                                                    <input type="text" id="images" placeholder="Tidak ada file dipilih" autocomplete="off">
                                                </div>
                                            </div>
                                            <p>*Upload foto max 2 MB. <a href="https://compressjpeg.com/id/" target="_blank">Klik disini</a> untuk kompres foto</p>
                                        </div>
                                        <div class="form-group">
                                        <label>Isi Berita & Postigan</label>
                                            <textarea name="isi" id="editor"></textarea>
                                        </div>
                                        <div class="form-group" id="pratinjau" style="display:none;">
                                        <label>Pratinjau Foto Yang Diunggah</label>
                                            <br><img id="output_image"/>
                                        </div>
                                        <button type="submit" class="btn btn-custon-four btn-primary" id="button" value='notclicked'>Submit</button>
                                        <input type="button" onclick="location.href='<?= base_url('admin/postingan') ?>';" class="btn btn-custon-four btn-danger" value="Kembali" />
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
            output.setAttribute('style', 'margin-bottom:10px');
            document.getElementById('pratinjau').style.display = "";
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>