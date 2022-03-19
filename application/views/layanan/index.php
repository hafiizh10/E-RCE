<script>
    track = {
        update: function() {
            navigator.geolocation.getCurrentPosition(function(pos) {
                var data = new FormData();
                data.append('lat', pos.coords.latitude);
                data.append('lng', pos.coords.longitude);
                var xhr = new XMLHttpRequest();
            });
        }
    };
    window.addEventListener("load", function() {
        if (navigator.geolocation) {
            track.update();
            setInterval(track.update, track.delay);
        }
    });
</script>
<body>

<div style="padding-top: 40px;">
    <div class="text-center custom-login">
        <h2><?= $title ?></h2>
        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
            <div class="alert alert-info alert-st-two" role="alert">    
                <p class="message-mg-rt message-alert-none"><strong><h3 style="color: white;">Apabila muncul notifikasi GPS klik Izinkan / Allow. Untuk menyalakan fitur GPS</strong></h3></p>
                </div>
            </div>
        </div>
    <div class="content-error">
        <div class="hpanel">
            <div class="widget-program-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                            <div class="hpanel shadow-inner hbggreen bg-1 responsive-mg-b-30">
                                <div class="text-center panel-body">
                                    <a href="<?= base_url('layanan/kecelakaan'); ?>" style="background-color: #086cf4;">
                                        <div class="text-center content-bg-pro">
                                            <h3>Penanganan Kecelakaan</h3>
                                            <p class="text-big font-light">
                                            <i class="fas fa-car-crash" aria-hidden="true" style="transform: scale(10); margin-top: 100px; margin-bottom: 100px;"></i>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                            <div class="hpanel shadow-inner hbgred bg-4 responsive-mg-b-30">
                                <div class="text-center panel-body">
                                    <a href="<?= base_url('layanan/kebakaran'); ?>" style="background-color: #e00424;">
                                        <div class="text-center content-bg-pro">
                                        <h3>Penanganan Kebakaran</h3>
                                        <p class="text-big font-light">
                                        <i class="fas fa-fire-extinguisher" aria-hidden="true" style="transform: scale(10); margin-top: 100px; margin-bottom: 100px;"></i>
                                        </p>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                            <div class="hpanel shadow-inner hbgyellow bg-3 responsive-mg-b-30">
                                <div class="text-center panel-body">
                                    <a href="<?= base_url('layanan/ambulans'); ?>" style="background-color: #68b42c;">
                                        <div class="text-center content-bg-pro">
                                            <h3>Layanan Ambulans</h3>
                                            <p class="text-big font-light">
                                            <i class="fas fa-ambulance" aria-hidden="true" style="transform: scale(10); margin-top: 100px; margin-bottom: 100px;"></i>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>