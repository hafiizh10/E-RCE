<div class="ftco-practice">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <div class="desc">
                        <h3><a href="<?= base_url('layanan') ?>" style="font-weight: bold;">Layanan Gawat Darurat</a></h3>
                        <a href="<?= base_url('layanan') ?>"><img src="<?= base_url('assets/lawmaker/'); ?>images/panic.png" width="270" height="270"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <div class="desc">
                        <h3><a href="<?= base_url('auth') ?>" style="font-weight: bold;">Login <?= $aplikasi['title_aplikasi'] ?></a></h3>
                        <p><a class="btn btn-primary btn-lg btn-learn" href="<?= base_url('auth') ?>">Login Anggota</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <div class="desc">
                        <h3><a href="<?= base_url('website/galeri') ?>" style="font-weight: bold;">Galeri Kegiatan</a></h3>
                        <p><a class="btn btn-primary btn-lg btn-learn" href="<?= base_url('website/galeri') ?>">Lihat Galeri</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="ftco-counter" class="ftco-counters" style="background-image: url(<?= base_url('assets/lawmaker/') ?>images/<?= $slideshow['slideshow_1']; ?>);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="fas fa-hand-holding-medical"></i></span>
                <span class="ftco-counter js-counter" data-from="0" data-to="<?= $kegiatan; ?>" data-speed="2000" data-refresh-interval="50"></span>
                <span class="ftco-counter-label">Jumlah Laporan Kegiatan</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="fas fa-car-crash"></i></span>
                <span class="ftco-counter js-counter" data-from="0" data-to="<?= $kecelakaan; ?>" data-speed="2000" data-refresh-interval="50"></span>
                <span class="ftco-counter-label">Penanganan Kecelakaan</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="fas fa-fire-extinguisher"></i></span>
                <span class="ftco-counter js-counter" data-from="0" data-to="<?= $kebakaran; ?>" data-speed="2000" data-refresh-interval="50"></span>
                <span class="ftco-counter-label">Bantuan Kebakaran</span>
            </div>
            <div class="col-md-3 text-center animate-box">
                <span class="icon"><i class="fas fa-ambulance"></i></span>
                <span class="ftco-counter js-counter" data-from="0" data-to="<?= $ambulans; ?>" data-speed="2000" data-refresh-interval="50"></span>
                <span class="ftco-counter-label">Pelayanan Ambulans</span>
            </div>
        </div>
    </div>
</div>

<div id="ftco-started" style="background-image:url(<?= base_url('assets/lawmaker/') ?>images/<?= $slideshow['slideshow_2']; ?>);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center ftco-heading ftco-heading2">
                <h2>Pendaftaran Calon Anggota</h2>
                <p>Silahkan klik tombol dibawah ini dan lengkapi formulir yang telah disediakan.</p>
                <a href="<?= base_url('rekrutmen') ?>" target="_blank" class="btn btn-primary btn-lg">Rekrutmen</a>
            </div>
        </div>
    </div>
</div>

<div id="ftco-blog">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center ftco-heading">
                <h2>Informasi dan Berita Terbaru</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($list_postingan as $lp) : ?>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-featured animate-box">
                        <a href="<?= base_url('post/') . $lp['slug'] ?>">
                            <img class="img-responsive img-rounded" src="<?= tampil_foto($lp['image']); ?>"></a>
                        <h2><a href="<?= base_url('post/') . $lp['slug'] ?>">
                                <div style="font-weight: 500;"><?= $lp['judul'] ?></div>
                            </a></h2>
                        <p class="meta"><span><?= $lp['created_at'] ?></span> | <span><?= $lp['kategori'] ?></span></p>
                        <p><?= filter(word_limiter($lp['isi'], 10)); ?> <a href="<?= base_url('post/') . $lp['slug'] ?>">Baca Selengkapnya...</a></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>