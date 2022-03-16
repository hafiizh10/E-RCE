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
    <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
    <div class="modal-area-button mg-b-20">
        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Tambah Pengguna Baru</a>
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
                                        <th data-field="nama">Nama</th>
                                        <th data-field="nopol_user">Nomor Polisi</th>
                                        <th data-field="jabatan">Jabatan</th>
                                        <th data-field="nra" data-width="90">NRA</th>
                                        <th data-field="jk">Jenis Kelamin</th>
                                        <th data-field="alamat">Alamat</th>
                                        <th data-field="tlp_user">No Telepon</th>
                                        <th data-field="email">Email</th>
                                        <th data-field="aksi" data-width="140">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i = 1; ?>
                                        <?php foreach ($pengguna as $pu) : ?>
                                            <td></td>
                                            <td><?= $i; ?></td>
                                            <td><?= $pu['nama']; ?></td>
                                            <td><?= $pu['nopol_user']; ?></td>
                                            <td><?= $pu['jabatan']; ?></td>
                                            <td><?= $pu['nra']; ?></td>
                                            <td><?= $pu['jk']; ?></td>
                                            <td><?= $pu['alamat']; ?></td>
                                            <td><?= $pu['tlp_user']; ?></td>
                                            <td><?= $pu['email']; ?></td>
                                            <td><div class="btn-group-vertical btn-custom-groups btn-custom-groups-one">
                                                <a href="<?= base_url('admin/edit_user/') . $pu['id']; ?>"><button type="button" class="btn btn-success">Edit</button></a>
                                                <a href="<?= base_url('admin/hapus_user/') . $pu['id']; ?>" onclick="return deleteData()"><button type="button" class="btn btn-danger">Hapus</button></a>
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
                        <?= form_open('admin/user'); ?>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <label class="login2 pull-right pull-right-pro">Nama</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Tulis nama pengguna" autocomplete="off" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <label class="login2 pull-right pull-right-pro">No Polisi</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" id="nopol_user" name="nopol_user" placeholder="Tulis nomor polisi" autocomplete="off" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <label class="login2 pull-right pull-right-pro">NRA</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" id="nra" name="nra" placeholder="Tulis nomor register anggota" autocomplete="off" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <label class="login2 pull-right pull-right-pro">Jabatan</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Tulis jabatan pengguna" autocomplete="off" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <label class="login2 pull-right pull-right-pro">Jenis Kelamin</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="i-checks pull-left">
                                        <label><input type="radio" value="Laki-laki" name="jk"> <i></i>Laki-Laki</label>
                                        <label style="margin-left:10px;"><input type="radio" value="Perempuan" name="jk"> <i></i>Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <label class="login2 pull-right pull-right-pro">Alamat</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Tulis alamat pengguna" autocomplete="off" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <label class="login2 pull-right pull-right-pro">No Telepon</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" id="tlp_user" name="tlp_user" placeholder="Tulis nomor telepon pengguna" autocomplete="off" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <label class="login2 pull-right pull-right-pro">Email</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Tulis email pengguna" autocomplete="off" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <label class="login2 pull-right pull-right-pro">Username</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" id="user" name="username" placeholder="Tulis username pengguna" autocomplete="off" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <label class="login2 pull-right pull-right-pro">Password</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" id="password" name="password" placeholder="Tulis password pengguna" autocomplete="off" required/>
                                    </div>
                                </div>
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