<div class="site-section">
    <div class="container">
        <div class="row">
            <?php foreach ($list_galeri as $lg) : ?>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="<?= base_url('assets/img/galeri/') . $lg['image'] ?>" class="image-popup gallery-item"><img src="<?= base_url('assets/img/galeri/') . $lg['image'] ?>" alt="<?= $lg['ket'] ?>" class="img-responsive" style="border-radius: 8px;"></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
