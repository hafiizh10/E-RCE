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
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
        <div class="row">
        <h5 class="col-md-12 m-b-10">Level : <?= $role['role']; ?></h5>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="sparkline8-list">
                    <div class="sparkline8-graph">
                        <div class="static-table-list">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Level</th>
                                        <th>Akses</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php $i = 1; ?>
                                    <?php foreach ($menu as $m) : ?>
                                        <td><?= $i; ?></td>
                                        <td><?= $m['menu']; ?></td>
                                        <td>
                                            <div class="form-check">
                                                <?= form_open(); ?>
                                                <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>" style="transform: scale(1.5);">
                                                <?= form_close(); ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <input type="button" onclick="location.href='<?= base_url('admin/role') ?>';" class="btn btn-custon-four btn-danger" value="Kembali" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table End -->