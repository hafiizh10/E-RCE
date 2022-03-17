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
    <div class="alert alert-info alert-st-two" role="alert">
        <i class="fa fa-info-circle edu-inform admin-check-pro" aria-hidden="true"></i>
        <p class="message-mg-rt">Klik tombol <strong>"Lihat Data"</strong> untuk melihat data lengkap korban.</p>
    </div>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright" style="overflow-x:auto;">
                            <?php if($user['level'] == 'Admin') { ?>
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <?php } ?>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" 
                            <?= $user['level'] == 'Admin' ? 'data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-cookie="true" data-show-export="true" ata-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar"' : ''?>
                            data-resizable="true">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">Kode</th>
                                        <th data-field="laporan">Kegiatan</th>
                                        <th data-field="waktu">Tanggal dan Jam</th>
                                        <th data-field="lokasi">Lokasi Kejadian</th>
                                        <th data-field="penanganan">Penanganan</th>
                                        <th data-field="koordinator">Koordinator</th>
                                        <th data-field="kendaraan">Kendaraan Operasional</th>
                                        <th data-field="rs">RS</th>
                                        <th data-field="korban">Data Korban</th>
                                        <?php if($user['level'] == 'Admin') { ?>
                                        <th data-field="hapus">Hapus Laporan</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($laporan_giat as $lg) : ?>
                                    <tr>
                                        <td></td>
                                        <td><?= cetak($lg['id']); ?></td>
                                        <td><?= cetak($lg['kegiatan']); ?></td>
                                        <td><?= cetak($lg['waktu']); ?></td>
                                        <td><?= cetak($lg['lokasi']); ?></td>
                                        <td><?= cetak($lg['penanganan']); ?></td>
                                        <td><?= cetak($lg['koordinator']); ?></td>
                                        <td><?= cetak($lg['kendaraan']); ?></td>
                                        <td><?= cetak($lg['rs']); ?></td>
                                        <td><a href="<?= base_url('fitur/data_korban/') ?><?= cetak($lg['id']); ?>"><button type="button" class="btn btn-custon-rounded-four btn-success">Lihat Data</button></a></td>
                                        <?php if($user['level'] == 'Admin') { ?>
                                        <td><a href="<?= base_url('fitur/hapus_giat/') ?><?= cetak($lg['id']); ?>" onclick="return deleteData()"><button type="button" class="btn btn-custon-rounded-four btn-danger">Hapus</button></a></td>
                                        <?php } ?>
                                    </tr>
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