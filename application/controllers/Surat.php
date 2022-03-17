<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Buat Surat Tugas';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $sess = array('no_surat', 'sifat', 'perihal', 'tanggal', 'kepada', 'isi_surat', 'nama', 'nra', 'jabatan');
        $this->session->unset_userdata($sess);

        $this->form_validation->set_rules('no_surat', 'Nomor Surat', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('surat/index', $data);
        } else {
            $data = [
                'no_surat' => $this->input->post('no_surat'),
                'sifat' => $this->input->post('sifat'),
                'perihal' => $this->input->post('perihal'),
                'tanggal' => $this->input->post('tanggal'),
                'kepada' => $this->input->post('kepada'),
                'tempat' => $this->input->post('tempat'),
                'isi_surat' => $this->input->post('isi_surat'),
            ];
            $this->session->set_userdata('no_surat', $data['no_surat']);
            $this->session->set_userdata('sifat', $data['sifat']);
            $this->session->set_userdata('perihal', $data['perihal']);
            $this->session->set_userdata('tanggal', $data['tanggal']);
            $this->session->set_userdata('kepada', $data['kepada']);
            $this->session->set_userdata('tempat', $data['tempat']);
            $this->session->set_userdata('isi_surat', $data['isi_surat']);

            $nama = $this->input->post('nama');
            $nra = $this->input->post('nra');
            $jabatan = $this->input->post('jabatan');
            $Hasildata = array();
            
            $index = 0;
            foreach($nama as $dataNama){
                array_push($Hasildata, array(
                    'nama'=>$dataNama,
                    'nra'=>$nra[$index],
                    'jabatan'=>$jabatan[$index],
                ));
                $index++;
            }
            $test['dataArray'] = $Hasildata;
            $test['surat'] = $this->db->get_where('tb_pengaturan_website', ['id' => '5'])->row_array();

            $nama = $this->session->userdata('no_surat');
            $fileName = "" . $nama . ".pdf";
            $mpdf = new \Mpdf\Mpdf();
            $html = $this->load->view('surat/tugas', $test, true);
            $mpdf->WriteHTML($html);
            $mpdf->Output($fileName,'D');
        }
    }

    public function pengaturan_surat()
    {
        $data['title'] = 'Pengaturan Surat';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['surat'] = $this->db->get_where('tb_pengaturan_website', ['id' => '5'])->row_array();
        
        $this->form_validation->set_rules('title_1', 'Nama lembaga/organisasi/komunitas', 'required');
        $this->form_validation->set_rules('informasi_1', 'Alamat lembaga/organisasi/komunitas', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('pengaturan/surat', $data);
        } else {
            $old_image = $data['surat']['text_2'];
            $upload_image = $_FILES['text_2']['name'];
            if ($upload_image) {
                unlink(FCPATH . 'assets/img/surat/' . $old_image);
            }
            $old_image2 = $data['surat']['text_3'];
            $upload_image2 = $_FILES['text_3']['name'];
            if ($upload_image2) {
                unlink(FCPATH . 'assets/img/surat/' . $old_image2);
            }
            $this->Pengaturan_model->pengaturanKopSurat();
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
            <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
            <p class="message-mg-rt">Kepala Surat berhasil diubah!</p></div>');
            $this->session->set_flashdata('flash', 'Kepala Surat berhasil diubah!');
            redirect('surat/pengaturan_surat');
        }
    }

    public function isi_surat()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['surat'] = $this->db->get_where('tb_pengaturan_website', ['id' => '5'])->row_array();
        
        $this->Pengaturan_model->pengaturanIsiSurat();
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Isi Surat berhasil diubah!</p></div>');
        $this->session->set_flashdata('flash', 'Isi Surat berhasil diubah!');
        redirect('surat/pengaturan_surat');
    }

    public function ttd()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['surat'] = $this->db->get_where('tb_pengaturan_website', ['id' => '5'])->row_array();
        
        $old_image = $data['surat']['slideshow_1'];
        $upload_image = $_FILES['slideshow_1']['name'];
        if ($upload_image) {
            unlink(FCPATH . 'assets/img/surat/' . $old_image);
        }
        $this->Pengaturan_model->pengaturanTtdSurat();
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Tanda Tangan Surat berhasil diubah!</p></div>');
        $this->session->set_flashdata('flash', 'Tanda Tangan Surat berhasil diubah!');
        redirect('surat/pengaturan_surat');
    }
}