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
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
    <a href="<?= base_url('admin/buatPost') ?>"><button type="button" class="btn btn-custon-three btn-danger" style="margin-bottom: 15px;">Buat Berita & Postingan</button></a>
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
                                        <th data-field="id">No</th>
                                        <th data-field="judul">Judul Berita</th>
                                        <th data-field="isi">Isi</th>
                                        <th data-field="kategori">Kategori</th>
                                        <th data-field="image">Image</th>
                                        <th data-field="created_at">Tanggal dibuat</th>
                                        <th data-field="aksi" data-width="140">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i = 1; ?>
                                        <?php foreach ($list_postingan as $lp) : ?>
                                            <td><?= $i; ?></td>
                                            <td><?= $lp['judul']; ?></td>
                                            <td><?= filter(word_limiter($lp['isi'], 6)); ?></a></td>
                                            <td><?= $lp['kategori']; ?></a></td>
                                            <td><?= $lp['image']; ?></a></td>
                                            <td><?= $lp['created_at']; ?></a></td>
                                            <td><div class="btn-group-vertical btn-custom-groups btn-custom-groups-one">
                                                <a href="<?= base_url('admin/edit_postingan/') . $lp['id']; ?>"><button type="button" class="btn btn-success">Edit</button></a>
                                                <a href="<?= base_url('admin/hapus_postingan/') . $lp['id']; ?>" onclick="return deleteData()"><button type="button" class="btn btn-danger">Hapus</button></a>
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