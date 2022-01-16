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
            <p class="message-mg-rt"><strong>Perhatian!</strong> Proses pembuatan surat memerlukan waktu beberapa detik, mohon tunggu sampai surat PDF terunduh otomatis.</p>
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
                                <?= form_open('surat/index') ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="devit-card-custom">
                                        <div class="form-group">
                                        <label>Nomor Surat</label>
                                            <input type="text" class="form-control" id="no_surat" name="no_surat" required/>
                                            contoh : 001/IEA/BB/I/2021
                                        </div>
                                        <div class="form-group">
                                        <label>Sifat</label>
                                            <input type="text" class="form-control" id="sifat" name="sifat" required/>
                                            contoh : Penting
                                        </div>
                                        <div class="form-group">
                                        <label>Perihal</label>
                                            <input type="text" class="form-control" id="perihal" name="perihal" required/>
                                            contoh : Surat Tugas
                                        </div>
                                        <div class="form-group">
                                        <label>Tempat dan Tanggal</label>
                                            <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?= waktu_surat(); ?>" required>
                                        </div>
                                        <div class="form-group">
                                        <label>Kepada</label>
                                            <input type="text" class="form-control" id="kepada" name="kepada" required/>
                                        </div>
                                        <div class="form-group">
                                        <label>Tempat Penerima Surat</label>
                                            <input type="text" class="form-control" id="tempat" name="tempat" required/>
                                        </div>
                                        <div class="form-group">
                                        <label>Isi Surat</label>
                                            <textarea type="text" class="form-control" id="isi_surat" name="isi_surat" required></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label style="font-size: 16px;">Anggota Yang Bertugas</label>
                                            <div class="form-group fieldGroup">
                                            <b>Data Anggota :</b>
                                                <div class="input-group">
                                                    <input type="text" name="nama[]" class="form-control" placeholder="Tulis Nama Anggota" autocomplete="off"/>
                                                    <input type="text" name="nra[]" class="form-control" placeholder="Tulis Nomor Register Anggota" autocomplete="off"/>
                                                    <input type="text" name="jabatan[]" class="form-control" placeholder="Tulis Jabatan Anggota" autocomplete="off"/>
                                                    <div class="input-group-addon ml-3"> 
                                                        <button type="button" class="btn btn-success addMore" id="btn-tambah-form"><i class="fas fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="insert-form"></div>
                                        </div>
                                        <button type="submit" class="btn btn-custon-four btn-primary" style="margin-top: 10px;" id="button" value='notclicked'>Submit</button>
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

<script src="<?= base_url('assets/') ?>js/vendor/jquery-1.12.4.min.js"></script>
<input type="hidden" id="jumlah-form" value="1">
<script>
$('#button').click(function() {
    $(this).val('clicked');
    if($('#button').val() == 'clicked'){
        setTimeout(function(){
            window.location.href = '<?= base_url('surat');?>';
            }, 10000);
    }
});

$(document).ready(function(){
    $("#btn-tambah-form").click(function(){
        var jumlah = parseInt($("#jumlah-form").val());
        var nextform = jumlah + 1;
        
        $("#insert-form").append("<div class='form-group fieldGroup'>" +
            "<b>Anggota Ke " + nextform + " :</b>" +
            "<div class='input-group'>" +
            "<input type='text' name='nama[]' class='form-control' placeholder='Tulis Nama Anggota' autocomplete='off'/>" +
            "<input type='text' name='nra[]' class='form-control' placeholder='Tulis Nomor Register Anggota' autocomplete='off'/>" +
            "<input type='text' name='jabatan[]' class='form-control' placeholder='Tulis Jabatan Anggota' autocomplete='off'/>" +
            "<div class='input-group-addon ml-3'>" +
            "<a href='javascript:void(0)' class='btn btn-danger remove'><i class='fas fa-trash'></i></a>" +
            "</div>" +
            "</div>" +
            "</div>");
        
        $("#jumlah-form").val(nextform);
    });
    
    //remove fields group
    $("body").on("click",".remove",function(){ 
        $(this).parents(".fieldGroup").remove();
    });
});
</script>