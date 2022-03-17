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
    <?= form_error('nopol', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?= form_error('merk', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?= form_error('jenis', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?= form_error('no_rangka', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?= form_error('no_mesin', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?= form_error('fungsi', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
    <div class="modal-area-button mg-b-20">
        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Tambah Kendaraan Operasional</a>
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
                                        <th data-field="nopol">Nomor Polisi</th>
                                        <th data-field="merk">Merk Type</th>
                                        <th data-field="jenis">Jenis Kendaraan</th>
                                        <th data-field="no_rangka">No. Rangka</th>
                                        <th data-field="no_mesin">No. Mesin</th>
                                        <th data-field="fungsi">Fungsi</th>
                                        <th data-field="ket">Keterangan</th>
                                        <th data-field="aksi" data-width="140">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($kendaraan_operasional as $ko) : ?>
                                    <tr>
                                        <td></td>
                                        <td><?= $i; ?></td>
                                        <td><?= $ko['nopol']; ?></td>
                                        <td><?= $ko['merk']; ?></a></td>
                                        <td><?= $ko['jenis']; ?></a></td>
                                        <td><?= $ko['no_rangka']; ?></a></td>
                                        <td><?= $ko['no_mesin']; ?></a></td>
                                        <td><?= $ko['fungsi']; ?></a></td>
                                        <td><?= $ko['ket']; ?></a></td>
                                        <td><div class="btn-group-vertical btn-custom-groups btn-custom-groups-one">
                                            <a href="<?= base_url('admin/edit_kendaraan/') . $ko['id']; ?>"><button type="button" class="btn btn-success">Edit</button></a>
                                            <a href="<?= base_url('admin/hapus_kendaraan/') . $ko['id']; ?>" onclick="return deleteData()"><button type="button" class="btn btn-danger">Hapus</button></a>
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
            <div class="">
                <div class="row">
                    <div class="all-form-element-inner">
                        <?= form_open('admin/kendaraan'); ?>
                            <div class="form-group">
                            <label class="pull-left">Nomor Polisi</label>
                                <input type="text" class="form-control" id="nopol" name="nopol" placeholder="Tulis nomor polisi kendaraan" autocomplete="off" required/>
                            </div>
                            <div class="form-group">
                            <label class="pull-left">Type Kendaraan</label>
                                <input type="text" class="form-control" id="merk" name="merk" placeholder="Tulis merk type kendaraan" autocomplete="off" required/>
                            </div>
                            <div class="form-group">
                            <label class="pull-left">Jenis Kendaraan</label>
                                <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Tulis jenis kendaraan" autocomplete="off" required/>
                            </div>
                            <div class="form-group">
                            <label class="pull-left">Nomor Rangka Kendaraan</label>
                                <input type="text" class="form-control" id="no_rangka" name="no_rangka" placeholder="Tulis nomor rangka kendaraan" autocomplete="off" required/>
                            </div>
                            <div class="form-group">
                            <label class="pull-left">Nomor Mesin Kendaraan</label>
                                <input type="text" class="form-control" id="no_mesin" name="no_mesin" placeholder="Tulis nomor mesin kendaraan" autocomplete="off" required/>
                            </div>
                            <div class="form-group">
                            <label class="pull-left">Fungsi Kendaraan</label>
                                <input type="text" class="form-control" id="fungsi" name="fungsi" placeholder="Tulis fungsi kendaraan" autocomplete="off" required/>
                            </div>
                            <div class="form-group">
                            <label class="pull-left">Keterangan</label>
                                <input type="text" class="form-control" id="ket" name="ket" placeholder="Tulis keterangan" autocomplete="off" />
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