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
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
    <?= form_error('nama_rs', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?= form_error('link_maps', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?= $this->session->flashdata('message'); ?>
    <div class="modal-area-button mg-b-20">
        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Tambah Rumah Sakit</a>
    </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">No</th>
                                        <th data-field="nama">Nama Rumah Sakit</th>
                                        <th data-field="nopol_user">Link Google Maps</th>
                                        <th data-field="aksi">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($rumah_sakit as $rs) : ?>
                                    <tr>
                                        <td></td>
                                        <td><?= $i; ?></td>
                                        <td><?= $rs['nama_rs']; ?></td>
                                        <td><a href="<?= $rs['link_maps']; ?>" target="_blank" style="color: blue;"><?= $rs['link_maps']; ?></a></td>
                                        <td><div class="btn-group-vertical btn-custom-groups btn-custom-groups-one">
                                            <a href="<?= base_url('admin/edit_rs/') . $rs['id']; ?>"><button type="button" class="btn btn-success">Edit</button></a>
                                            <a href="<?= base_url('admin/hapus_rs/') . $rs['id']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                        </div></td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->
<div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
            <div class="basic-login-form-ad">
                <div class="row">
                    <div class="all-form-element-inner">
                        <?= form_open('admin/tambah_rs'); ?>
                            <div class="form-group">
                                <label class="pull-left">Nama Rumah Sakit</label>
                                <input type="text" class="form-control" id="nama_rs" name="nama_rs" placeholder="Tulis nama rumah sakit" autocomplete="off" required/>
                            </div>
                            <div class="form-group">
                                <label class="pull-left">Link Google Maps</label>
                                <input type="text" class="form-control" id="link_maps" name="link_maps" placeholder="Tulis link google maps" autocomplete="off" required/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-custon-four btn-danger" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-custon-four btn-primary">Tambah</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>