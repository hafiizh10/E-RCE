<?php echo $map['js'] ?>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3><?= $title; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
    <a href="<?= base_url($kembali); ?>"><button type="button" class="btn btn-custon-three btn-danger" style="margin-bottom: 15px;">Kembali</button></a>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="map-view"><?php echo $map['html'] ?></div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->