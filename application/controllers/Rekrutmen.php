<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekrutmen extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Calon Anggota';

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('nopol_calon', 'Nomor Polisi', 'required');
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('no_sim', 'SIM', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('ttl', 'TTL', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('no_tlp', 'Nomor Telepon', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
        $this->template->halaman_rekrutmen('user/rekrutmen', $data);
        } else {
            $this->User_model->tambahCalon();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one alert-st-bg" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
            <p class="message-mg-rt">Data anda berhasil dikirim!</p></div>');
            $this->session->set_flashdata('flash', 'Data anda berhasil dikirim!');
            redirect('rekrutmen');
        }
    }
}