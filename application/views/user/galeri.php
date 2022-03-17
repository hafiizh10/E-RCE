<style>
    .galeri {
		width: 200px;
		height: 150px;
    }

    @media only screen and (max-width: 600px) {
		.galeri {
			width: 100%;
            height: auto;
		}
    }
</style>
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
    <?= form_error('nopol', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <?= form_error('merk', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
    <div class="modal-area-button mg-b-20">
        <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert">Tambah Foto Kegiatan</a>
    </div>
    <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline10-list mt-b-30">
                    <div class="sparkline10-graph" style="overflow-x:auto;">
                        <div class="static-table-list">
                            <table class="table border-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal</th>
                                        <th>Foto</th>
                                        <?php if($user['level'] == 'Admin') { ?>
                                        <th>Aksi</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($list_foto as $lf) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $lf['nama']; ?></td>
                                        <td><?= $lf['ket']; ?></td>
                                        <td><?= $lf['created_at']; ?></td>
                                        <td class="galeri"><img src="<?= base_url('assets/img/galeri/' . $lf['image']); ?>"/></td>
                                        <?php if($user['level'] == 'Admin') { ?>
                                        <td><a href="<?= base_url('user/hapus_foto/') . $lf['id']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a></td>
                                        <?php } ?>
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
<div id="PrimaryModalalert" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
            <div class="">
                <div class="row">
                    <div class="all-form-element-inner">
                        <?= form_open_multipart('user/galeri'); ?>
                            <div class="form-group">
                            <label class="pull-left">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama']; ?>" autocomplete="off" required/>
                            </div>
                            <div class="form-group">
                            <label class="pull-left">Tanggal</label>
                                <input type="text" class="form-control" id="created_at" name="created_at" value="<?= waktu_giat() ?>" autocomplete="off" required/>
                            </div>
                            <div class="form-group">
                            <label class="pull-left">Keterangan</label>
                                <input type="text" class="form-control" id="ket" name="ket" autocomplete="off" placeholder="Isi keterangan kegiatan" required/>
                            </div>
                            <div class="form-group">
                            <label class="pull-left">Upload Foto</label>
                                <div class="file-upload-inner ts-forms">
                                <label>&nbsp</label><br>
                                    <div class="input prepend-big-btn">
                                        <div class="file-button">
                                            Browse
                                            <input type="file" id="image" name="image" onchange="document.getElementById('prepend-big-btn').value = this.value; preview_image(event);">
                                        </div>
                                        <input type="text" id="prepend-big-btn" placeholder="Tidak ada file dipilih" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" id="pratinjau" style="display:none;">
                            <label class="pull-left">Upload Foto</label>
                                <br><img id="output_image"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-custon-four btn-danger" data-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-custon-four btn-primary">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>

<script>
    function preview_image(event) 
    {
        var reader = new FileReader();
        reader.onload = function()
        {
            var output = document.getElementById('output_image');
            output.src = reader.result;
            output.setAttribute('style', 'margin-bottom:10px');
            document.getElementById('pratinjau').style.display = "";
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>