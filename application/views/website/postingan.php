<?php
$a = $postingan->row_array();
?>
<div id="ftco-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-content">
                <h1><b><?= $a['judul'] ?></b></h1>
                <?= $a['created_at'] ?> | Kategori: <?= $a['kategori'] ?>
                <p class="lead"><?= $a['isi'] ?></p>
                <img src="<?= tampil_foto($a['image']); ?>" style="width: 100%; height: auto; border-radius: 10px;">
                <div class="text-center" style="padding-top: 10px;">
                    <input type="button" onclick="location.href='<?= base_url('website') ?>';" class="btn btn-custon-four btn-danger" value="Kembali ke halaman utama" />
                </div>
            </div>
        </div>
    </div>
</div>