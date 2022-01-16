<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->kecelakaan = $this->db->query("SELECT * FROM tb_laporan WHERE laporan ='Kecelakaan'");
        $this->kebakaran = $this->db->query("SELECT * FROM tb_laporan WHERE laporan ='Kebakaran'");
        $this->ambulans = $this->db->query("SELECT * FROM tb_laporan WHERE laporan ='Ambulans'");
    }

    public function dashboard()
    {
        $data['title'] = 'Halaman Utama';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['kecelakaan'] = $this->kecelakaan->num_rows();
        $data['kebakaran'] = $this->kebakaran->num_rows();
        $data['ambulans'] = $this->ambulans->num_rows();

        $data['anggota'] = $this->db->count_all('tb_user');
        $data['kegiatan'] = $this->db->count_all('tb_giat');
        $data['laporan'] = $this->db->count_all('tb_laporan');
        $data['rs'] = $this->db->count_all('tb_rs');

        $data['hasil'] = $this->Admin_model->get_data_giat();

        $this->template->halaman('admin/index', $data);
    }

    public function index()
    {
        $data['title'] = 'Profil Saya';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $this->template->halaman('user/index', $data);
    }

    public function edit_profil()
    {
        $data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('nopol_user', 'Nomor Polisi', 'required|trim');
        $this->form_validation->set_rules('tlp_user', 'Nomor Telepon', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('user/index', $data);
        } else {
            $username = $this->session->userdata('username');
            $daftar = [
                "nama" => $this->input->post('nama', true),
                "alamat" => $this->input->post('alamat', true),
                "nopol_user" => $this->input->post('nopol_user', true),
                "nama" => $this->input->post('nama', true),
                "tlp_user" => $this->input->post('tlp_user', true)
            ];

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
                    <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i><p class="message-mg-rt">' . $this->upload->display_errors() . '</p></div>');
                    redirect('user');
                }
            }

            $this->db->set($daftar);
            $this->db->where('username', $username);
            $this->db->update('tb_user');

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one alert-st-bg" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
            <p class="message-mg-rt">Data profil berhasil diganti!</p></div>');
            redirect('user');
        }
    }

    public function ganti_password()
    {
        $data['title'] = 'Ganti Password';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('password_baru1', 'Password Baru', 'required|trim|min_length[5]|matches[password_baru2]');
        $this->form_validation->set_rules('password_baru2', 'Ulangi Password Baru', 'required|trim|min_length[5]|matches[password_baru1]');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('user/ganti_password', $data);
        } else {
            $password_lama = $this->input->post('password_lama');
            $password_baru = $this->input->post('password_baru1');
            if (!password_verify($password_lama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
                <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
                <p class="message-mg-rt">Password lama yang anda masukan salah!</p></div>');
                redirect('user/ganti_password');
            } else {
                if ($password_lama == $password_baru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
                    <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
                    <p class="message-mg-rt">Password baru jangan sama dengan password yang lama!</p></div>');
                    redirect('user/ganti_password');
                } else {
                    // password sudah oke
                    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('tb_user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one alert-st-bg" role="alert">
                    <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
                    <p class="message-mg-rt">Password berhasil diganti!</p></div>');
                    redirect('user/ganti_password');
                }
            }
        }
    }

    public function rs()
    {
        $data['title'] = 'Daftar Rumah Sakit';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['rumah_sakit'] = $this->db->get('tb_rs')->result_array();

        $this->template->halaman('user/rs', $data);
    }

    public function galeri()
    {
        $data['title'] = 'Galeri Kegiatan';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['list_foto'] = $this->db->get('tb_galeri')->result_array();

        $this->form_validation->set_rules('ket', 'Keterangan', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('user/galeri', $data);
        } else {
            $this->User_model->tambahGaleri();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one alert-st-bg" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
            <p class="message-mg-rt">Foto kegiatan berhasil ditambahkan!</p></div>');
            redirect('user/galeri');
        }
    }

    public function hapus_foto($id)
    {
        $this->User_model->hapusFoto($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Foto kegiatan berhasil dihapus!</p></div>');
        redirect('user/galeri');
    }
}