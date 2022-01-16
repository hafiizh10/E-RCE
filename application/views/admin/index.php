<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3><?= $title; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="analytics-sparkle-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Jumlah Anggota Terdaftar</h5>
                            <span class="tuition-fees">
                            <div class="stats-icon pull-right">
                                <i class="fas fa-users"></i>
                            </div></span></h2>
                        <div class="m-t-xl widget-cl-2">
                            <h1 class="text-success"><span class="counter"><?= $anggota; ?></span> Orang</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content">
                        <h5>Jumlah Laporan Kegiatan</h5>
                            <span class="tuition-fees">
                            <div class="stats-icon pull-right">
                                <i class="fas fa-hand-holding-medical"></i>
                            </div></span></h2>
                        <div class="m-t-xl widget-cl-2">
                            <h1 class="text-info"><span class="counter"><?= $kegiatan; ?></span> Kegiatan</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Jumlah Laporan Emergency</h5>
                            <span class="tuition-fees">
                            <div class="stats-icon pull-right">
                                <i class="fas fa-first-aid"></i>
                            </div></span></h2>
                        <div class="m-t-xl widget-cl-4">
                            <h1 class="text-danger"><span class="counter"><?= $laporan; ?></span> Laporan</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">
                    <div class="analytics-content">
                        <h5>Jumlah Data Rumah Sakit</h5>
                            <span class="tuition-fees">
                            <div class="stats-icon pull-right">
                                <i class="fas fa-hospital-user"></i>
                            </div></span></h2>
                        <div class="m-t-xl widget-cl-3">
                            <h1 class="text-warning"><span class="counter"><?= $rs; ?></span> Rumah Sakit</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="traffic-analysis-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content text-center">
                        <a href="<?= base_url('fitur/giat') ?>"><button class="btn btn-custon-rounded-three btn-primary btn-lg">Buat Laporan Kegiatan</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content text-center">
                        <a href="<?= base_url('fitur/kecelakaan') ?>"><button class="btn btn-custon-rounded-three btn-warning btn-lg">Laporan Kecelakaan</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content text-center">
                        <a href="<?= base_url('fitur/kebakaran') ?>"><button class="btn btn-custon-rounded-three btn-danger btn-lg">Laporan Kebakaran</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="analytics-sparkle-line reso-mg-b-30">
                    <div class="analytics-content text-center">
                        <a href="<?= base_url('fitur/ambulans') ?>"><button class="btn btn-custon-rounded-three btn-success btn-lg">Pelayanan Ambulans</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-sales-area mg-tb-30">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="product-sales-chart">
                <div class="portlet-title">
                    <h4>Grafik Laporan Masyarakat</h4>
                    <p class="mb15">Berikut hasil laporan masyarakat yang masuk pada aplikasi yaitu Penanganan Kecelakaan, Bantuan Kebakaran, dan Layanan Ambulans.</p>
                    <canvas id="myChart" class="height300"></canvas>
                    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/Chart.min.js"></script>
                    <script>
                        var ctx = document.getElementById("myChart").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ["Penanganan Kecelakaan", "Penanganan Kebakaran", "Layanan Ambulans"],
                                datasets: [{
                                    label: '',
                                    data: [
                                        <?= $kecelakaan; ?>,
                                        <?= $kebakaran; ?>,
                                        <?= $ambulans; ?>
                                    ],
                                    backgroundColor: [
                                        '#00add8',
                                        '#ba4649',
                                        '#2c9a43'
                                    ],
                                    borderColor: [
                                        '#00add8',
                                        '#ba4649',
                                        '#2c9a43'
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                <h3 class="box-title">Penanganan Kecelakaan</h3>
                <ul class="list-inline two-part-sp">
                    <li class="sp-cn-r"><span class="counter text-success"><?= $kecelakaan; ?></span> Laporan</li>
                </ul>
            </div>
            <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                <h3 class="box-title">Bantuan Kebakaran</h3>
                <ul class="list-inline two-part-sp">
                    <li class="graph-two-ctn"><span class="counter text-purple"><?= $kebakaran; ?></span> Laporan</li>
                </ul>
            </div>
            <div class="white-box analytics-info-cs mg-b-10 res-mg-b-30 tb-sm-res-d-n dk-res-t-d-n">
                <h3 class="box-title">Pelayanan Ambulans</h3>
                <ul class="list-inline two-part-sp">
                    <li class="graph-three-ctn"><span class="counter text-info"><?= $ambulans; ?></span> Laporan</li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<div class="product-sales-area mg-tb-30">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
            <div class="product-sales-chart">
                <div class="portlet-title">
                    <h4>Grafik Laporan Kegiatan</h4>
                    <canvas id="ChartLine" class="height300"></canvas>
                    <?php
                        error_reporting(0);
                        foreach($hasil as $data){
                            $giat[] = substr($data->waktu,0,10);
                            $waktu[] = (float) $data->tanggal;
                        }
                    ?>
                    <script>
                        var ctx = document.getElementById("ChartLine").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: <?php echo json_encode($giat);?>,
                                datasets: [{
                                    data : <?php echo json_encode($waktu);?>,
                                    backgroundColor: [
                                        '#00add8',
                                    ],
                                    borderColor: [
                                        '#00add8',
                                    ],
                                }]
                            },
                            options: {
                                elements: {
                                    point: {
                                        radius: 6,
                                        hoverRadius: 8
                                    }
                                },
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                },
                                scales: {
                                    y: {
                                        max: 5,
                                        min: 1,
                                        ticks: {
                                            stepSize: 0.5
                                        }
                                    }
                                }
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
</div>