<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fitur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->data_kecelakaan = $this->db->get_where('tb_laporan', array('laporan' => 'Kecelakaan'))->result_array();
        $this->data_kebakaran = $this->db->get_where('tb_laporan', array('laporan' => 'Kebakaran'))->result_array();
        $this->data_ambulans = $this->db->get_where('tb_laporan', array('laporan' => 'Ambulans'))->result_array();

        $this->peta_kecelakaan = $this->db->get_where('tb_laporan', array('laporan' => 'Kecelakaan'))->result();
        $this->peta_kebakaran = $this->db->get_where('tb_laporan', array('laporan' => 'Kebakaran'))->result();
        $this->peta_ambulans = $this->db->get_where('tb_laporan', array('laporan' => 'Ambulans'))->result();
    }

    public function kecelakaan()
    {
        $data = [
            'title' => 'Laporan Kecelakaan',
            'tombol' => 'Kecelakaan',
            'peta' => 'fitur/peta_kecelakaan/',
            'hapus' => 'hapus_kecelakaan/'
        ];
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['data_laporan'] = $this->data_kecelakaan;

        $this->template->halaman('fitur/data_laporan', $data);
    }

    public function kebakaran()
    {
        $data = [
            'title' => 'Laporan Kebakaran',
            'tombol' => 'Kebakaran',
            'peta' => 'fitur/peta_kebakaran/',
            'hapus' => 'hapus_kebakaran/'
        ];
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['data_laporan'] = $this->data_kebakaran;

        $this->template->halaman('fitur/data_laporan', $data);
    }

    public function ambulans()
    {
        $data = [
            'title' => 'Pelayanan Ambulans',
            'tombol' => 'Ambulans',
            'peta' => 'fitur/peta_ambulans/',
            'hapus' => 'hapus_ambulans/'
        ];
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['data_laporan'] = $this->data_ambulans;

        $this->template->halaman('fitur/data_laporan', $data);
    }

    public function hapus_kecelakaan($id)
    {
        $this->Fitur_model->hapusLaporan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Data Laporan berhasil dihapus!</p></div>');
        redirect('fitur/kecelakaan');
    }

    public function hapus_kebakaran($id)
    {
        $this->Fitur_model->hapusLaporan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Data Laporan berhasil dihapus!</p></div>');
        redirect('fitur/kebakaran');
    }

    public function hapus_ambulans($id)
    {
        $this->Fitur_model->hapusLaporan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Data Laporan berhasil dihapus!</p></div>');
        redirect('fitur/ambulans');
    }

    public function peta_kecelakaan()
    {
        $data = [
            'title' => 'Peta Seluruh Laporan Kecelakaan',
            'kembali' => 'fitur/kecelakaan/'
        ];
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $config['zoom'] = 'auto';
        $config['map_type'] = 'HYBRID';
        $this->googlemaps->initialize($config);
        foreach ($this->peta_kecelakaan as $key => $value) :
            $marker = array();
            $marker['position'] = "{$value->latitude}, {$value->longitude}";
            $marker['infowindow_content'] = '<div class="media" style="width:300px;">';
            $marker['infowindow_content'] .= '<div class="media-left">';
            $marker['infowindow_content'] .= '</div>';
            $marker['infowindow_content'] .= '<div class="media-body">';
            $marker['infowindow_content'] .= '<h5 class="media-heading">Laporan ' . $value->laporan . '</h5>';
            $marker['infowindow_content'] .= '<p><b>Waktu Kejadian :</b> ' . $value->waktu . '</p>';
            $marker['infowindow_content'] .= '<p><b>Lokasi Kejadian :</b> ' . $value->lokasi . '</p>';
            $marker['infowindow_content'] .= '<p><b>Keterangan :</b> ' . $value->ket . '</p><br>';
            $marker['infowindow_content'] .= '</div>';
            $marker['infowindow_content'] .= '</div>';
            $marker['icon'] = '';
            $this->googlemaps->add_marker($marker);
        endforeach;

        $this->googlemaps->initialize($config);

        $data['map'] = $this->googlemaps->create_map();

        $this->template->halaman('fitur/peta_laporan', $data);
    }

    public function peta_kebakaran()
    {
        $data = [
            'title' => 'Peta Seluruh Laporan Kebakaran',
            'kembali' => 'fitur/kebakaran/'
        ];
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $config['zoom'] = 'auto';
        $config['map_type'] = 'HYBRID';
        $this->googlemaps->initialize($config);
        foreach ($this->peta_kebakaran as $key => $value) :
            $marker = array();
            $marker['position'] = "{$value->latitude}, {$value->longitude}";
            $marker['infowindow_content'] = '<div class="media" style="width:300px;">';
            $marker['infowindow_content'] .= '<div class="media-left">';
            $marker['infowindow_content'] .= '</div>';
            $marker['infowindow_content'] .= '<div class="media-body">';
            $marker['infowindow_content'] .= '<h5 class="media-heading">Laporan ' . $value->laporan . '</h5>';
            $marker['infowindow_content'] .= '<p><b>Waktu Kejadian :</b> ' . $value->waktu . '</p>';
            $marker['infowindow_content'] .= '<p><b>Lokasi Kejadian :</b> ' . $value->lokasi . '</p>';
            $marker['infowindow_content'] .= '<p><b>Keterangan :</b> ' . $value->ket . '</p><br>';
            $marker['infowindow_content'] .= '</div>';
            $marker['infowindow_content'] .= '</div>';
            $marker['icon'] = '';
            $this->googlemaps->add_marker($marker);
        endforeach;

        $this->googlemaps->initialize($config);

        $data['map'] = $this->googlemaps->create_map();

        $this->template->halaman('fitur/peta_laporan', $data);
    }

    public function peta_ambulans()
    {
        $data = [
            'title' => 'Peta Seluruh Layanan Ambulans',
            'kembali' => 'fitur/ambulans/'
        ];
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $config['zoom'] = 'auto';
        $config['map_type'] = 'HYBRID';
        $this->googlemaps->initialize($config);
        foreach ($this->peta_ambulans as $key => $value) :
            $marker = array();
            $marker['position'] = "{$value->latitude}, {$value->longitude}";
            $marker['infowindow_content'] = '<div class="media" style="width:300px;">';
            $marker['infowindow_content'] .= '<div class="media-left">';
            $marker['infowindow_content'] .= '</div>';
            $marker['infowindow_content'] .= '<div class="media-body">';
            $marker['infowindow_content'] .= '<h5 class="media-heading">Laporan ' . $value->laporan . '</h5>';
            $marker['infowindow_content'] .= '<p><b>Waktu Kejadian :</b> ' . $value->waktu . '</p>';
            $marker['infowindow_content'] .= '<p><b>Lokasi Kejadian :</b> ' . $value->lokasi . '</p>';
            $marker['infowindow_content'] .= '<p><b>Keterangan :</b> ' . $value->ket . '</p><br>';
            $marker['infowindow_content'] .= '</div>';
            $marker['infowindow_content'] .= '</div>';
            $marker['icon'] = '';
            $this->googlemaps->add_marker($marker);
        endforeach;

        $this->googlemaps->initialize($config);

        $data['map'] = $this->googlemaps->create_map();

        $this->template->halaman('fitur/peta_laporan', $data);
    }

    public function giat()
    {
        $data['title'] = 'Laporan Giat';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['kendaraan'] = $this->db->get('tb_kendaraan')->result_array();
        $data['anggota'] = $this->db->get('tb_user')->result_array();
        $data['rumah_sakit'] = $this->db->get('tb_rs')->result_array();

        $this->form_validation->set_rules('kegiatan', 'Nama Kegiatan', 'required');
        $this->form_validation->set_rules('waktu', 'Tanggal dan Jam', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('penanganan', 'Penanganan', 'required');
        $this->form_validation->set_rules('koordinator', 'Koordinator', 'required');
        $this->form_validation->set_rules('kendaraan', 'Kendaraan Operasional', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('fitur/giat', $data);
        } else {
            $this->Fitur_model->tambahGiat();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one alert-st-bg" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
            <p class="message-mg-rt">Laporan giat berhasil ditambahkan!</p></div>');
            redirect('fitur/data_giat');
        }
    }

    public function data_giat()
    {
        $data['title'] = 'Data Kegiatan';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        
        $data['laporan_giat'] = $this->Fitur_model->getDataGiat();
        
        $this->template->halaman('fitur/data_giat', $data);
    }

    public function hapus_giat($id)
    {
        $this->Fitur_model->hapusGiat($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Data Giat berhasil dihapus!</p></div>');
        redirect('fitur/data_giat');
    }

    public function data_korban($id)
    {
        $data['title'] = 'Data Korban';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        
        $data['data_korban'] = $this->db->get_where('tb_korban', ['id_giat' => $id])->result_array();

        $this->template->halaman('fitur/data_korban', $data);
    }
}
