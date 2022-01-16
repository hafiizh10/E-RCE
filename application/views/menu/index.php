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
                    <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Tambah Menu Baru</a>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="sparkline8-list">
                            <div class="sparkline8-graph">
                                <div class="static-table-list">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Menu</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <?php $i = 1; ?>
                                            <?php foreach ($menu as $m) : ?>
                                                <td><?= $i; ?></td>
                                                <td><?= $m['menu']; ?></td>
                                                <td><a href="<?= base_url(); ?>menu/edit_menu/<?= $m['id'] ?>" class="btn btn-custon-rounded-four btn-success">Edit</a>
                                                <a href="<?= base_url(); ?>menu/hapus_menu/<?= $m['id'] ?>" class="btn btn-custon-rounded-four btn-danger">Hapus</a></td>
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
                                <?= form_open('menu'); ?>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3">
                                                <label class="login2 pull-right pull-right-pro">Nama Menu</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <input type="text" class="form-control" id="menu" name="menu" placeholder="Tulis nama menu" autocomplete="off" required/>
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