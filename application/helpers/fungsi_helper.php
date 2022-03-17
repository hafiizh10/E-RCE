<?php
function waktu()
{
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $tanggal = mktime(date("m"), date("d"), date("Y"));
    $jam = date("H:i:s");
    return date("d-M-Y", $tanggal) . ", " . $jam;
}

function waktu_giat()
{
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $tanggal = mktime(date("m"), date("d"), date("Y"));
    echo "" . date("d-m-Y", $tanggal) . " ";
    $jam = date("H:i:s");
    echo "" . $jam . "";
    $a = date("H");
}

function waktu_surat()
{
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $waktu = mktime(date("m"), date("d"), date("Y"));
    $tanggal = date("Y-m-d", $waktu);
    $bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split = explode('-', $tanggal);
    $hasil = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    echo "Banjarbaru, " . $hasil . "";
}

function waktu_post()
{
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $waktu = mktime(date("m"), date("d"), date("Y"));
    $tanggal = date("Y-m-d", $waktu);
    $bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split = explode('-', $tanggal);
    $hasil = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    echo $hasil;
}

function filter($teks)
{
    $search = array(
        '<p>',
        '<u>',
        '<s>',
        '<hr />',
        '<h1>',
        '<h2>',
        '<h3>',
        '<pre>',
        '<li>',
        '<strong>',
        '<em>',
        '<blockquote>',
        '<ol>',
        '<ul>',
        '<li>',
        '<h2 style="font-style:italic;">',
        '<h3 style="color:#aaaaaa;font-style:italic;">',
        '<div style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;">',
        '<span class="marker">',
        '<big>',
        '<small>',
        '<tt>',
        '<code>',
        '<kbd>',
        '<samp>',
        '<var>',
        '<ins>',
        '<cite>',
        '<q>',
        '<span dir="rtl">',
        '<span dir="ltr">',
        '<p style="text-align: center;">',
        '<p style="text-align: right;">',
        '<p style="text-align: justify;">',
        '<span style="font-family:Arial,Helvetica,sans-serif">',
        '<span style="font-family:Comic Sans MS,cursive">',
        '<span style="font-family:Courier New,Courier,monospace">',
        '<span style="font-family:Georgia,serif">',
        '<span style="font-family:Lucida Sans Unicode,Lucida Grande,sans-serif">',
        '<span style="font-family:Tahoma,Geneva,sans-serif">',
        '<span style="font-family:Times New Roman,Times,serif">',
        '<span style="font-family:Trebuchet MS,Helvetica,sans-serif">',
        '<span style="font-family:Verdana,Geneva,sans-serif">',
        '<span style="font-size:14px">',
        '<span style="font-size:16px">',
        '<span style="font-size:18px">',
        '<span style="font-size:20px">',
        '<span style="font-size:24px">',
        '<span style="font-size:26px">',
        '<span style="font-size:28px">',
        '<span style="font-size:36px">',
        '<span style="font-size:48px">',
        '<span style="font-size:72px">'
    );
    $replace = array(
        ''
    );
    $subject = $teks;
    $result = str_replace($search, $replace, $subject);
    return ($result);
}

function createSlug($slug)
{
    $spacesHypens = '/[^\-\s\pN\pL]+/u';
    $duplicateHypens = '/[\-\s]+/';
    $slug = preg_replace($spacesHypens, '', mb_strtolower($slug, 'UTF-8'));
    $slug = preg_replace($duplicateHypens, '-', $slug);
    $slug = trim($slug, '-');
    return $slug;
}