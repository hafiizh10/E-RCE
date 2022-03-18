<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function aplikasi()
    {
        $data['title'] = 'Pengaturan Aplikasi';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['aplikasi'] = $this->db->get_where('tb_pengaturan', ['id' => '1'])->row_array();
        
        $this->form_validation->set_rules('nama_aplikasi', 'Nama Aplikasi', 'required');
        $this->form_validation->set_rules('logo_menu', 'Logo Menu', 'required|max_length[8]', array('max_length' => 'Title Aplikasi maksimal 8 karakter.'));
        $this->form_validation->set_rules('footer_aplikasi', 'Footer Aplikasi', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('pengaturan/aplikasi', $data);
        } else {
            $old_image = $data['aplikasi']['favicon'];
            $upload_image = $_FILES['favicon']['name'];
            if ($upload_image) {
                unlink(FCPATH . 'assets/img/aplikasi/' . $old_image);
            }
            $this->Pengaturan_model->pengaturanAplikasi();
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
            <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
            <p class="message-mg-rt">Aplikasi berhasil diubah!</p></div>');
            $this->session->set_flashdata('flash', 'Aplikasi berhasil diubah!');
            redirect('pengaturan/aplikasi');
        }
    }

    public function update_image()
    {
        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/aplikasi/';

            $this->load->library('upload', $config);
            $data['aplikasi'] = $this->db->get_where('tb_pengaturan', ['id' => '1'])->row_array();
            $old_image = $data['aplikasi']['image'];
            unlink(FCPATH . 'assets/img/' . $old_image);
            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
                <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i><p class="message-mg-rt">' . $this->upload->display_errors() . '</p></div>');
                redirect('pengaturan/aplikasi');
            }
        }

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pengaturan');
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Logo aplikasi berhasil diubah!</p></div>');
        $this->session->set_flashdata('flash', 'Logo aplikasi berhasil diubah!');
        redirect('pengaturan/aplikasi');
    }

    public function rekrutmen()
    {
        $this->Pengaturan_model->pengaturanRekrutmen();
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Halaman rekrutmen berhasil diubah!</p></div>');
        $this->session->set_flashdata('flash', 'Halaman rekrutmen berhasil diubah!');
        redirect('pengaturan/aplikasi');
    }

    public function api()
    {
        $data['title'] = 'Pengaturan API';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['api'] = $this->Layanan_model->getAPItelegram();
        $data['api_wa'] = $this->Layanan_model->getAPIwa();
        
        $this->form_validation->set_rules('chat_id', 'Chat ID', 'required');
        $this->form_validation->set_rules('token', 'Token', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('pengaturan/api', $data);
        } else {
            $this->Pengaturan_model->pengaturanApi();
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
            <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
            <p class="message-mg-rt">API Bot Telegram berhasil diubah!</p></div>');
            $this->session->set_flashdata('flash', 'API Bot Telegram berhasil diubah!');
            redirect('pengaturan/api');
        }
    }

    public function update_wa()
    {
        $this->Pengaturan_model->pengaturanApiWa();
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">API Bot WhatsApp berhasil diubah!</p></div>');
        $this->session->set_flashdata('flash', 'API Bot WhatsApp berhasil diubah!');
        redirect('pengaturan/api');
    }

    public function website()
    {
        $data['title'] = 'Pengaturan Website';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['website'] = $this->db->get_where('tb_pengaturan_website', ['id' => '1'])->row_array();
        $data['header_web'] = $this->db->get_where('tb_pengaturan_website', ['id' => '2'])->row_array();
        $data['informasi'] = $this->db->get_where('tb_pengaturan_website', ['id' => '3'])->row_array();
        $data['media'] = $this->db->get_where('tb_pengaturan_website', ['id' => '4'])->row_array();
        
        $this->form_validation->set_rules('title_1', 'Judul', 'required');
        $this->form_validation->set_rules('title_2', 'Judul', 'required');
        $this->form_validation->set_rules('text_1', 'Judul', 'required');
        $this->form_validation->set_rules('text_2', 'Judul', 'required');
        $this->form_validation->set_rules('text_3', 'Judul', 'required');
        $this->form_validation->set_rules('slideshow_1', 'Judul', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('pengaturan/website', $data);
        } else {
            $this->Pengaturan_model->pengaturanWebsite();
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
            <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
            <p class="message-mg-rt">Pengaturan Website berhasil diubah!</p></div>');
            $this->session->set_flashdata('flash', 'Pengaturan Website berhasil diubah!');
            redirect('pengaturan/website');
        }
    }

    public function header_web()
    {
        $data['slideshow'] = $this->db->get_where('tb_pengaturan_website', ['id' => '2'])->row_array();

        $old_image1 = $data['slideshow']['slideshow_1'];
        $old_image2 = $data['slideshow']['slideshow_2'];
        $old_image3 = $data['slideshow']['slideshow_3'];
        $upload_image1 = $_FILES['slideshow_1']['name'];
        $upload_image2 = $_FILES['slideshow_2']['name'];
        $upload_image3 = $_FILES['slideshow_3']['name'];
        if ($upload_image1) {
            unlink(FCPATH . 'assets/lawmaker/images/' . $old_image1);
        } else if ($upload_image2) {
            unlink(FCPATH . 'assets/lawmaker/images/' . $old_image2);
        } else if ($upload_image3) {
            unlink(FCPATH . 'assets/lawmaker/images/' . $old_image3);
        }
        
        $this->Pengaturan_model->headerWeb();
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Slideshow website berhasil diubah!</p></div>');
        $this->session->set_flashdata('flash', 'Slideshow website berhasil diubah!');
        redirect('pengaturan/website');
    }

    public function informasi()
    {
        $this->Pengaturan_model->footerInformasi();
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Informasi footer berhasil diubah!</p></div>');
        $this->session->set_flashdata('flash', 'Informasi footer berhasil diubah!');
        redirect('pengaturan/website');
    }

    public function media()
    {
        $this->Pengaturan_model->mediaCallCenter();
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Call Center & Media Sosial berhasil diubah!</p></div>');
        $this->session->set_flashdata('flash', 'Call Center & Media Sosial berhasil diubah!');
        redirect('pengaturan/website');
    }
}