<?php
function tampil_foto($image)
{
    return $image == '' ? base_url('assets/img/postingan/default.jpg') : base_url('assets/img/postingan/') . $image;
}

function ubah_nomor($input)
{
    return substr($input,0,2) == '08' ? '628' . substr($input,2) : $input;
}

function upload_image($input)
{
    $ci = get_instance();
    // cek jika ada gambar yang akan diupload
    $upload_image = $_FILES[$input]['name'];

    if ($upload_image) {
        $config['allowed_types'] = 'jpg|png|ico';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/surat/';

        $ci->load->library('upload', $config);

        if ($ci->upload->do_upload($input)) {
            $new_image = $ci->upload->data('file_name');
            $ci->db->set($input, $new_image);
        } else {
            $ci->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
            <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i><p class="message-mg-rt">' . $this->upload->display_errors() . '</p></div>');
            redirect('surat/pengaturan_surat');
        }
    }
}