<link rel="stylesheet" href="<?= base_url('assets/') ?>css/chosen/bootstrap-chosen.css">
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
                                <?= form_open('', 'autocomplete="off"') ?>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="devit-card-custom">
                                        <div class="form-group">
                                        <label>Nama Kegiatan</label>
                                            <input type="text" class="form-control" id="kegiatan" name="kegiatan" list="giat" placeholder="Isi nama kegiatan" required/>
                                            <datalist id="giat">
                                                <option>Laka Tunggal</option>
                                                <option>Lakalantas</option>
                                                <option>Laka Kerja</option>
                                                <option>Kebakaran</option>
                                                <option>Layanan Ambulans</option>
                                            </datalist>
                                            <?= form_error('kegiatan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Tanggal dan Jam</label>
                                            <input type="text" class="form-control" id="waktu" name="waktu" value="<?= waktu_giat(); ?>" required>
                                            <?= form_error('waktu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Lokasi Kejadian</label>
                                            <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Isi nama tempat" required>
                                            <?= form_error('lokasi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Penanganan</label>
                                            <textarea type="text" class="form-control" name="penanganan" placeholder="Deskripsi penanganan / kejadian" required></textarea>
                                            <?= form_error('penanganan', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                        <label>Koordinator</label>
                                            <div class="chosen-select-single mg-b-20">
                                                <select data-placeholder="Pilih Koordinator Anggota" class="chosen-select" tabindex="-1" name="koordinator" id="koordinator">
                                                    <option value="-">Pilih Koordinator</option>
                                                    <?php foreach ($anggota as $a) : ?>
                                                        <option value="<?= $a['nama']; ?>"><?= $a['nama']; ?></option>
                                                    <?php endforeach; ?>
												</select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label>Kendaraan Operasional</label>
                                            <div class="form-select-list">
                                                <select class="form-control custom-select-value" name="kendaraan" id="kendaraan">
                                                <?php foreach ($kendaraan as $k) : ?>
                                                    <option value="<?= $k['nopol']; ?>"><?= $k['nopol']; ?> - <?= $k['merk']; ?></option>
                                                <?php endforeach; ?>
                                                <option value="kendaraan lain">Unit Kendaraan Lain</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="panel-group edu-custon-design" id="accordion2">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading accordion-head">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapse4">Dirujuk Ke Rumah Sakit? (Klik disini)</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse4" class="panel-collapse panel-ic collapse">
                                                        <div class="panel-body admin-panel-content">
                                                            <div class="chosen-select-single mg-b-20">
                                                                <select data-placeholder="Pilih Rumah Sakit" class="chosen-select" tabindex="-1" name="rs" id="rs">
                                                                <option value="-">Pilih Rumah Sakit</option>
                                                                <?php foreach ($rumah_sakit as $rs) : ?>
                                                                    <option value="<?= $rs['nama_rs']; ?>"><?= $rs['nama_rs']; ?></option>
                                                                <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        <label style="font-size: 16px;">Data Identitas Korban</label>
                                            <div class="form-group fieldGroup">
                                            <b>Korban ke 1 :</b>
                                                <div class="input-group">
                                                    <input type="text" name="nama[]" class="form-control" placeholder="Isi Nama Korban" autocomplete="off"/>
                                                    <input type="text" name="umur[]" class="form-control" placeholder="Isi Umur Korban" autocomplete="off"/>
                                                    <input type="text" name="alamat[]" class="form-control" placeholder="Isi Alamat Korban" autocomplete="off"/>
                                                    <input type="text" name="kondisi[]" class="form-control" placeholder="Isi Kondisi Korban" autocomplete="off"/>
                                                    <div class="input-group-addon ml-3"> 
                                                        <button type="button" class="btn btn-success addMore" id="btn-tambah-form"><i class="fas fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="insert-form"></div>
                                        </div>
                                        <button type="submit" class="btn btn-custon-four btn-primary" style="margin-top: 10px;">Submit</button>
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
$(document).ready(function(){
    $("#btn-tambah-form").click(function(){
        var jumlah = parseInt($("#jumlah-form").val());
        var nextform = jumlah + 1;
        
        $("#insert-form").append("<div class='form-group fieldGroup'>" +
            "<b>Korban ke " + nextform + " :</b>" +
            "<div class='input-group'>" +
            "<input type='text' name='nama[]' class='form-control' placeholder='Isi Nama Korban' autocomplete='off'/>" +
            "<input type='text' name='umur[]' class='form-control' placeholder='Isi Umur Korban' autocomplete='off'/>" +
            "<input type='text' name='alamat[]' class='form-control' placeholder='Isi Alamat Korban' autocomplete='off'/>" +
            "<input type='text' name='kondisi[]' class='form-control' placeholder='Isi Kondisi Korban' autocomplete='off'/>" +
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