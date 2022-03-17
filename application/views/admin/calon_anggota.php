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
        <p class="message-mg-rt">Klik tombol <strong>"Terima"</strong> jika ingin memasukan calon anggota ke data anggota.</p>
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
                                        <th data-field="nopol_calon">Nomor Polisi</th>
                                        <th data-field="nik">NIK</th>
                                        <th data-field="sim">No SIM</th>
                                        <th data-field="jk">Jenis Kelamin</th>
                                        <th data-field="ttl">TTL</th>
                                        <th data-field="usia">Usia</th>
                                        <th data-field="alamat">Alamat</th>
                                        <th data-field="pekerjaan">Pekerjaan</th>
                                        <th data-field="tlp_user">No Telepon</th>
                                        <th data-field="email">Email</th>
                                        <th data-field="aksi" data-width="140">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php $i = 1; ?>
                                        <?php foreach ($calon_anggota as $ca) : ?>
                                            <td></td>
                                            <td><?= $i; ?></td>
                                            <td><?= cetak($ca['nama']); ?></td>
                                            <td><?= cetak($ca['nopol_calon']); ?></td>
                                            <td><?= cetak($ca['nik']); ?></td>
                                            <td><?= cetak($ca['no_sim']); ?></td>
                                            <td><?= cetak($ca['jk']); ?></td>
                                            <td><?= cetak($ca['ttl']); ?></td>
                                            <td><?php 
                                            $ttl = $ca['ttl']; 
                                            $tgl_lahir = substr($ttl,-10); $date = date("Y-m-d"); 
                                            $diff = date_diff(date_create($tgl_lahir), date_create($date)); echo $diff->format('%y'); ?></td>
                                            <td><?= cetak($ca['alamat']); ?></td>
                                            <td><?= cetak($ca['pekerjaan']); ?></td>
                                            <td><?= cetak($ca['no_tlp']); ?></td>
                                            <td><?= cetak($ca['email']); ?></td>
                                            <td><div class="btn-group-vertical btn-custom-groups btn-custom-groups-one">
                                            <?php if($ca['is_active'] == 1) { ?>
                                            <?php } else { ?>
                                                <a href="<?= base_url('admin/acc_calon/') . $ca['id']; ?>"><button type="button" class="btn btn-success">Terima</button></a>
                                            <?php } ?>
                                                <a href="<?= base_url('admin/hapus_calon/') . $ca['id']; ?>" onclick="return deleteData()"><button type="button" class="btn btn-danger">Hapus&nbsp</button></a>
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