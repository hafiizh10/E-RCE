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
        <p class="message-mg-rt">Klik tombol <strong>"Kirim"</strong> jika ingin mengirimkan data laporan lewat Telegram / WhatsApp.</p>
    </div>
    <a href="<?= base_url($peta); ?>"><button type="button" class="btn btn-custon-three btn-danger" style="margin-bottom: 15px;">Peta Seluruh Laporan <?= $tombol; ?></button></a>
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
                                        <th data-field="id">ID Laporan</th>
                                        <th data-field="laporan">Jenis Laporan</th>
                                        <th data-field="waktu">Waktu Kejadian</th>
                                        <th data-field="latitude">Latitude</th>
                                        <th data-field="longitude">Longitude</th>
                                        <th data-field="lokasi">Lokasi Kejadian</th>
                                        <th data-field="ket">Keterangan Kejadian</th>
                                        <th data-field="data">Kirim Laporan</th>
                                        <?php if($user['level'] == 'Admin') { ?>
                                        <th data-field="hapus">Hapus Laporan</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_laporan as $dl) : ?>
                                    <tr>
                                        <td></td>
                                        <td><?= cetak($dl['id']); ?></td>
                                        <td><?= cetak($dl['laporan']); ?></td>
                                        <td><?= cetak($dl['waktu']); ?></td>
                                        <td><?= cetak($dl['latitude']); ?></td>
                                        <td><?= cetak($dl['longitude']); ?></td>
                                        <td><?= cetak($dl['lokasi']); ?></td>
                                        <td><?= cetak($dl['ket']); ?></td>
                                        <td><input type="button" onClick="window.open('<?= base_url('layanan/hasil_laporan/') ?><?= cetak($dl['id']); ?>')" class="btn btn-custon-rounded-four btn-success" value="Kirim" /></td>
                                        <?php if($user['level'] == 'Admin') { ?>
                                        <td><a href="<?= $hapus; ?><?= cetak($dl['id']); ?>"><button type="button" class="btn btn-custon-rounded-four btn-danger">Hapus</button></a></td>
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