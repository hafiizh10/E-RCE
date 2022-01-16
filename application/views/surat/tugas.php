<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <style>
    body {
        font-family: 'Times New Roman', Times, serif;
    }
    </style>
</head>

<body>
    <div class="header">
        <div id="kop_surat">
        <table>
        <tr>
            <td><img src="assets/img/surat/<?= $surat['text_2']; ?>" width="100px" height="100px" class="center"></td>
            <td><center><b style="font-size: 20px; text-decoration: underline;"><?= $surat['title_1']; ?></b><p style="font-size: 12px; font-style: italic; text-align: center;"><?= $surat['informasi_1']; ?></p></center></td>
            <td><img src="assets/img/surat/<?= $surat['text_3']; ?>" width="100px" height="100px" class="center"></td>
        </tr>
        </table>
        <hr style="border-top: 5px solid #000000;">
        </div>
        <table>
        <tr>
			<td style="width: 80px;">Nomor</td>
			<td style="width: 10px;">:</td>
			<td><?= $this->session->userdata('no_surat'); ?></td>
		</tr>
		<tr>
			<td>Sifat</td>
			<td>:</td>
			<td><?= $this->session->userdata('sifat'); ?></td>
		</tr>
		<tr>
			<td>Perihal</td>
			<td>:</td>
			<td><?= $this->session->userdata('perihal'); ?></td>
		</tr>
        </table>
        <p style="text-align: center; text-decoration: underline; font-weight: bold; font-size: 20px"><?= strtoupper($this->session->userdata('perihal')); ?></p>
    </div>
    <div class="body">
        <p>Kepada Yth :<br>
        <b><?= $this->session->userdata('kepada'); ?></b><br>
        Di <?= $this->session->userdata('tempat'); ?></p>
        Dengan Hormat,<br>
        <p style="text-align: justify; text-indent: 0.5in;"><?= $surat['informasi_2']; ?></p>
        <?php $i = 1; ?>
        <?php foreach ($dataArray as $post) : ?>
        <table style="margin-left: 48px">
        <tr>
            <td style="width: 20px;"><?= $i; ?>. </td>
            <td style="width: 100px;">Nama</td>
            <td style="width: 10px;">:</td>
            <td><?= $post["nama"]; ?></td>
        </tr>
        <tr>
            <td rowspan="2"></td>
            <td>Nomor RA</td>
            <td>:</td>
            <td><?= $post["nra"]; ?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?= $post["jabatan"]; ?></td>
        </tr>
        </table>
        <?php $i++; ?>
        <?php endforeach; ?>
        <p style="text-align: justify; text-indent: 0.5in;"><?= $this->session->userdata('isi_surat'); ?></p>
        <p><?= $surat['alamat']; ?></p>
    </div>
    <div class="footer">
        <table style="text-align: center;" align="right">
            <tr>
                <td>
                    <?= $this->session->userdata('tanggal'); ?><br>
                    <?= $surat['title_2']; ?>
                </td>
            </tr>
            <tr>
                <td><img src="assets/img/surat/<?= $surat['slideshow_1']; ?>" width="130px" height="130px" class="center"></td>
            </tr>
            <tr>
                <td>
                    <p style="text-decoration: underline; font-weight: bold;"><?= $surat['text_1']; ?></p>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>