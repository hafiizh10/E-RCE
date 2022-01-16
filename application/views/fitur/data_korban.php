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
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a href="<?= base_url('fitur/data_giat') ?>"><button type="button" class="btn btn-custon-three btn-danger" style="margin-bottom: 15px;">Kembali Ke Data Kegiatan</button></a>
                <div class="product-status-wrap">
                    <div class="asset-inner">
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Korban</th>
                                    <th>Umur Korban</th>
                                    <th>Alamat Korban</th>
                                    <th>Kondisi Korban</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php $i = 1; ?>
                                <?php foreach ($data_korban as $dk) : ?>
                                    <td><?= $i; ?></td>
                                    <td><?= $dk['id_giat']; ?></td>
                                    <td><?= $dk['nama']; ?></td>
                                    <td><?= $dk['umur']; ?></td>
                                    <td><?= $dk['alamat']; ?></td>
                                    <td><?= $dk['kondisi']; ?></td>
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
<div style="margin-bottom: 20%;"></div>