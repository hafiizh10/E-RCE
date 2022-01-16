<?php

class Pengaturan_model extends CI_Model
{
    public function pengaturanAplikasi()
    {
        $data = [
            "nama_aplikasi" => strtoupper($this->input->post('nama_aplikasi', true)),
            "logo_menu" => $this->input->post('logo_menu', true),
            "title_aplikasi" => $this->input->post('title_aplikasi', true),
            "footer_aplikasi" => $this->input->post('footer_aplikasi', true)
        ];

        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['favicon']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'jpg|png|ico';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/aplikasi/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('favicon')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('favicon', $new_image);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
                <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i><p class="message-mg-rt">' . $this->upload->display_errors() . '</p></div>');
                redirect('pengaturan/aplikasi');
            }
        }

        $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pengaturan');
    }

    public function pengaturanRekrutmen()
    {
        $data = [
            "rekrutmen" => $this->input->post('rekrutmen', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pengaturan', $data);
    }

    public function pengaturanApi()
    {
        $data = [
            "chat_id" => $this->input->post('chat_id', true),
            "token" => $this->input->post('token', true),
            "bot_active" => $this->input->post('bot_active', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pengaturan', $data);
    }

    public function pengaturanApiWa()
    {
        $data = [
            "chat_id" => $this->input->post('chat_id', true),
            "token" => $this->input->post('token', true),
            "image" => $this->input->post('image', true),
            "bot_active" => $this->input->post('bot_active', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pengaturan', $data);
    }

    public function pengaturanWebsite()
    {
        $data = [
            "title_1" => $this->input->post('title_1', true),
            "informasi_1" => $this->input->post('informasi_1', true),
            "title_2" => $this->input->post('title_2', true),
            "informasi_2" => $this->input->post('informasi_2', true),
            "alamat" => $this->input->post('alamat', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pengaturan_website', $data);
    }

    public function headerWeb()
    {
        $data = [
            "text_1" => $this->input->post('text_1', true),
            "text_2" => $this->input->post('text_2', true),
            "text_3" => $this->input->post('text_3', true)
        ];

        // cek jika ada gambar yang akan diupload
        $upload_image1 = $_FILES['slideshow_1']['name'];
        $upload_image2 = $_FILES['slideshow_2']['name'];
        $upload_image3 = $_FILES['slideshow_3']['name'];

        if ($upload_image1) {
            $config['allowed_types'] = 'jpg|png|ico';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/lawmaker/images/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('slideshow_1')) {
                $new_image = $this->upload->data('file_name');
                $source = $config['upload_path'] . '/' . $new_image;
                $destination = $source . '.webp';
                $options = [];
                WebPConvert\WebPConvert::convert($source, $destination, $options);
                unlink(FCPATH . 'assets/lawmaker/images/' . $new_image);
                $nama_file = $new_image . '.webp';
                $this->db->set('slideshow_1', $nama_file);
            }
        } else if ($upload_image2) {
            $config['allowed_types'] = 'jpg|png|ico';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/lawmaker/images/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('slideshow_2')) {
                $new_image = $this->upload->data('file_name');
                $source = $config['upload_path'] . '/' . $new_image;
                $destination = $source . '.webp';
                $options = [];
                WebPConvert\WebPConvert::convert($source, $destination, $options);
                unlink(FCPATH . 'assets/lawmaker/images/' . $new_image);
                $nama_file = $new_image . '.webp';
                $this->db->set('slideshow_2', $nama_file);
            }
        } else if ($upload_image3) {
            $config['allowed_types'] = 'jpg|png|ico';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/lawmaker/images/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('slideshow_3')) {
                $new_image = $this->upload->data('file_name');
                $source = $config['upload_path'] . '/' . $new_image;
                $destination = $source . '.webp';
                $options = [];
                WebPConvert\WebPConvert::convert($source, $destination, $options);
                unlink(FCPATH . 'assets/lawmaker/images/' . $new_image);
                $nama_file = $new_image . '.webp';
                $this->db->set('slideshow_3', $nama_file);
            }
        }
        
        $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pengaturan_website', $data);
    }

    public function footerInformasi()
    {
        $data = [
            "title_1" => $this->input->post('title_1', true),
            "informasi_1" => $this->input->post('informasi_1', true),
            "title_2" => $this->input->post('title_2', true),
            "informasi_2" => $this->input->post('informasi_2', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pengaturan_website', $data);
    }

    public function mediaCallCenter()
    {
        $nomor = $this->input->post('text_1', true);
        $new_nomor = ubah_nomor($nomor);
        $data = [
            "text_1" => $new_nomor,
            "text_2" => $this->input->post('text_2', true),
            "text_3" => $this->input->post('text_3', true),
            "slideshow_1" => $this->input->post('slideshow_1', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pengaturan_website', $data);
    }

    public function pengaturanKopSurat()
    {
        $data = [
            "title_1" => $this->input->post('title_1', true),
            "informasi_1" => $this->input->post('informasi_1', true)
        ];

        // helper upload image
        upload_image('text_2');
        upload_image('text_3');

        $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pengaturan_website');
    }

    public function pengaturanIsiSurat()
    {
        $data = [
            "informasi_2" => $this->input->post('informasi_2', true),
            "alamat" => $this->input->post('alamat', true)
        ];

        $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pengaturan_website');
    }

    public function pengaturanTtdSurat()
    {
        $data = [
            "text_1" => $this->input->post('text_1', true),
            "title_2" => $this->input->post('title_2', true)
        ];

        // helper upload image
        upload_image('slideshow_1');

        $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_pengaturan_website');
    }
}