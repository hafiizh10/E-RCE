<?= $map['js'] ?>
<style>
#button
{
    margin-bottom: 5px;
}
</style>
<body>
    
<div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list single-page-breadcome">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#laporan">Form <?= $title; ?></a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="laporan">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad">
                                            <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Kode Laporan</label>
                                                            <input name="id" type="text" class="form-control" value="<?= $laporan['id'] ?>" readonly />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jenis Laporan</label>
                                                            <input name="laporan" type="text" class="form-control" value="<?= $laporan['laporan'] ?>" readonly />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Waktu Kejadian</label>
                                                            <input name="waktu" type="text" class="form-control" value="<?= $laporan['waktu'] ?>" readonly />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Latitude</label>
                                                            <input name="latitude" type="text" class="form-control" value="<?= $laporan['latitude'] ?>" readonly />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Longitude</label>
                                                            <input name="longitude" type="text" class="form-control" value="<?= $laporan['longitude'] ?>" readonly />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Lokasi Kejadian</label>
                                                            <input name="lokasi" type="text" class="form-control" value="<?= $laporan['lokasi'] ?>" readonly />
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Keterangan Kejadian</label>
                                                            <input name="ket" type="text" class="form-control" value="<?= $laporan['ket'] ?>" readonly />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Peta Lokasi Kejadian</label>
                                                            <div class="map-view"><?php echo $map['html'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="button-style-three" style="margin-top: 10px;">
                                                            <a href="<?= base_url('layanan/telegram/'.$laporan['id']) ?>"><button type="button" class="btn btn-custon-three btn-primary" id="button">Kirim Laporan</button></a>
                                                            <a href="<?= base_url('layanan/whatsapp/'.$laporan['id']) ?>"><button type="button" class="btn btn-custon-three btn-success" id="button">Kirim Lewat WA</button></a>
                                                            <a href="<?= base_url('layanan/sms/'.$laporan['id']) ?>"><button type="button" class="btn btn-custon-three btn-warning" id="button">Kirim Lewat SMS</button></a>
                                                            <input type="button" onclick="location.href='<?= base_url('layanan') ?>';" class="btn btn-danger loginbtn" id="button" value="Kembali" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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