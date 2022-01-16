<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Website extends CI_Controller
{
    public function index()
    {
        $this->kecelakaan = $this->db->query("SELECT * FROM tb_laporan WHERE laporan ='Kecelakaan'");
        $this->kebakaran = $this->db->query("SELECT * FROM tb_laporan WHERE laporan ='Kebakaran'");
        $this->ambulans = $this->db->query("SELECT * FROM tb_laporan WHERE laporan ='Ambulans'");
        
        $data['list_postingan'] = $this->Website_model->get_all_post();
        $data['kegiatan'] = $this->db->count_all('tb_giat');
        $data['kecelakaan'] = $this->kecelakaan->num_rows();
        $data['kebakaran'] = $this->kebakaran->num_rows();
        $data['ambulans'] = $this->ambulans->num_rows();

        $this->template->website('website/home', $data);
    }

    public function post($slug)
    {
        $cek_data = $this->Website_model->get_post_by_slug($slug);
        if ($cek_data->num_rows() > 0) {
            $data['postingan'] = $cek_data;
            $this->template->website('website/postingan', $data);
        } else {
            redirect('website');
        }
    }

    public function galeri()
    {
        $data['list_galeri'] = $this->Website_model->get_galeri();

        $this->template->website('website/galeri', $data);
    }
}