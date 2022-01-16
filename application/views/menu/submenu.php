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
        <!-- Static Table Start -->
        <div class="static-table-area">
            <div class="container-fluid">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>
                <div class="modal-area-button mg-b-20">
                    <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Tambah Submenu</a>
                </div>
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="sparkline8-list">
                            <div class="sparkline8-graph">
                                <div class="static-table-list" style="overflow-x:auto;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Menu</th>
                                                <th>Url</th>
                                                <th>Active</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <?php $i = 1; ?>
                                            <?php foreach ($subMenu as $sm) : ?>
                                                <td><?= $i; ?></td>
                                                <td><?= $sm['title']; ?></td>
                                                <td><?= $sm['menu']; ?></td>
                                                <td><?= $sm['url']; ?></td>
                                                <td><?php if($sm['is_active'] == 1) { echo 'Aktif';
                                                } else { echo 'Tidak Aktif'; } ?></td>
                                                <td><a href="<?= base_url(); ?>menu/edit_submenu/<?= $sm['id'] ?>" class="btn btn-custon-rounded-four btn-success">Edit</a>
                                                <a href="<?= base_url(); ?>menu/hapus_submenu/<?= $sm['id'] ?>" class="btn btn-custon-rounded-four btn-danger">Hapus</a></td>
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
                                <?= form_open('menu/submenu'); ?>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <label class="login2 pull-right pull-right-pro">Nama Submenu</label>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-9">
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Isi nama submenu" autocomplete="off" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <label class="login2 pull-right pull-right-pro">Pilih Menu</label>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-9">
                                            <div class="form-select-list">
                                            <select class="form-control custom-select-value" name="menu_id" id="menu_id">
                                            <?php foreach ($menu as $m) : ?>
                                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                            <?php endforeach; ?>
                                            </select>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <label class="login2 pull-right pull-right-pro">URL Submenu</label>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-9">
                                                <input type="text" class="form-control" id="url" name="url" placeholder="Isi URL submenu" autocomplete="off" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <label class="login2 pull-right pull-right-pro">Submenu Aktif</label>
                                            </div>
                                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-9">
                                            <div class="bt-df-checkbox">
                                                <input class="pull-left" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                            </div>
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