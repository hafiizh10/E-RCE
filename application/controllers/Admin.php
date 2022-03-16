<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();

        $this->kecelakaan = $this->db->query("SELECT * FROM tb_laporan WHERE laporan ='Kecelakaan'");
        $this->kebakaran = $this->db->query("SELECT * FROM tb_laporan WHERE laporan ='Kebakaran'");
        $this->ambulans = $this->db->query("SELECT * FROM tb_laporan WHERE laporan ='Ambulans'");
    }

    public function index()
    {
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['kecelakaan'] = $this->kecelakaan->num_rows();
        $data['kebakaran'] = $this->kebakaran->num_rows();
        $data['ambulans'] = $this->ambulans->num_rows();

        $data['anggota'] = $this->db->count_all('tb_user');
        $data['kegiatan'] = $this->db->count_all('tb_giat');
        $data['laporan'] = $this->db->count_all('tb_laporan');
        $data['rs'] = $this->db->count_all('tb_rs');

        $data['hasil'] = $this->Admin_model->get_data_giat();

        $this->template->halaman('user/dashboard', $data);
    }

    public function role()
    {
        $data['title'] = 'Pengaturan Level';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('admin/role', $data);
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one alert-st-bg" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
            <p class="message-mg-rt">Level berhasil ditambahkan!</p></div>');
            redirect('admin/role');
        }
    }

    public function hapus_role($id)
    {
        $this->Admin_model->hapusDataRole($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Level berhasil dihapus!</p></div>');
        redirect('admin/role');
    }

    public function edit_role($id)
    {
        $data['title'] = 'Edit Level';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['user_role'] = $this->Admin_model->getRoleById($id);

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('admin/edit_role', $data);
        } else {
            $this->Admin_model->editDataRole();
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
            <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
            <p class="message-mg-rt">Level berhasil diubah!</p></div>');
            redirect('admin/role');
        }
    }

    public function roleaccess($role_id)
    {
        $data['title'] = 'Akses Level';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->template->halaman('admin/role-access', $data);
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Akses level berhasil diubah!</p></div>');
    }

    public function user()
    {
        $data['title'] = 'Data Anggota';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['pengguna'] = $this->db->get('tb_user')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[tb_user.username]|min_length[5]', array('is_unique' => 'Username telah digunakan, coba username yang lain.'));
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('nopol_user', 'Nomor Polisi', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('nra', 'Nomor Register Anggota', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tlp_user', 'Nomor Telepon', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('admin/user', $data);
        } else {
            $this->Admin_model->tambahUser();
            $this->Admin_model->updateCalon();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one alert-st-bg" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
            <p class="message-mg-rt">Pengguna berhasil ditambahkan!</p></div>');
            $this->session->set_flashdata('flash', 'Pengguna berhasil ditambahkan!');
            redirect('admin/user');
        }
    }

    public function edit_user($id)
    {
        $data['title'] = 'Edit Data Anggota';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['anggota'] = $this->Admin_model->getAnggotaById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'is_unique[tb_user.username]|min_length[5]', array('is_unique' => 'Username telah digunakan, coba username yang lain.'));
        $this->form_validation->set_rules('nopol_user', 'Nomor Polisi', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('nra', 'Nomor Register Anggota', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tlp_user', 'Nomor Telepon', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('admin/edit_user', $data);
        } else {
            $this->Admin_model->editDataAnggota();
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
            <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
            <p class="message-mg-rt">Data Anggota berhasil diubah!</p></div>');
            $this->session->set_flashdata('flash', 'Data Anggota berhasil diubah!');
            redirect('admin/user');
        }
    }

    public function hapus_user($id)
    {
        $this->Admin_model->hapusUser($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Pengguna berhasil dihapus!</p></div>');
        $this->session->set_flashdata('flash', 'Pengguna berhasil dihapus!');
        redirect('admin/user');
    }

    public function tambah_rs()
    {
        $data['title'] = 'Tambah Rumah Sakit';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['rumah_sakit'] = $this->db->get('tb_rs')->result_array();

        $this->form_validation->set_rules('nama_rs', 'Nama Rumah Sakit', 'required');
        $this->form_validation->set_rules('link_maps', 'Link Google Maps', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('admin/tambah_rs', $data);
        } else {
            $this->Admin_model->tambahRs();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one alert-st-bg" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
            <p class="message-mg-rt">Rumah sakit berhasil ditambahkan!</p></div>');
            redirect('admin/tambah_rs');
        }
    }

    public function hapus_rs($id)
    {
        $this->Admin_model->hapusDataRs($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Data RS berhasil dihapus!</p></div>');
        redirect('admin/tambah_rs');
    }

    public function edit_rs($id)
    {
        $data['title'] = 'Edit Rumah Sakit';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['rs'] = $this->Admin_model->getRsById($id);

        $this->form_validation->set_rules('nama_rs', 'Nama Rumah Sakit', 'required');
        $this->form_validation->set_rules('link_maps', 'Link Google Maps', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('admin/edit_rs', $data);
        } else {
            $this->Admin_model->editDataRs();
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
            <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
            <p class="message-mg-rt">Data rumah sakit berhasil diubah!</p></div>');
            redirect('admin/tambah_rs');
        }
    }

    public function calon_anggota()
    {
        $data['title'] = 'Data Calon Anggota';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['calon_anggota'] = $this->db->get('tb_calon')->result_array();

        $this->template->halaman('admin/calon_anggota', $data);
    }

    public function hapus_calon($id)
    {
        $this->Admin_model->hapusDataCalon($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Data calon anggota berhasil dihapus!</p></div>');
        redirect('admin/calon_anggota');
    }

    public function acc_calon($id)
    {
        $data['title'] = 'Data Calon Anggota';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['calon_anggota'] = $this->Admin_model->getCalonById($id);

        $this->template->halaman('admin/acc_calon', $data);
    }

    public function kendaraan()
    {
        $data['title'] = 'Kendaraan Operasional';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['kendaraan_operasional'] = $this->db->get('tb_kendaraan')->result_array();

        $this->form_validation->set_rules('nopol', 'Nomor Polisi', 'required');
        $this->form_validation->set_rules('merk', 'Merk Type', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis Kendaraan', 'required');
        $this->form_validation->set_rules('no_rangka', 'Nomor Rangka', 'required');
        $this->form_validation->set_rules('no_mesin', 'Nomor Mesin', 'required');
        $this->form_validation->set_rules('fungsi', 'Fungsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('admin/kendaraan', $data);
        } else {
            $this->Admin_model->tambahKendaraan();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one alert-st-bg" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
            <p class="message-mg-rt">Kendaraan Operasional berhasil ditambahkan!</p></div>');
            redirect('admin/kendaraan');
        }
    }

    public function edit_kendaraan($id)
    {
        $data['title'] = 'Edit Kendaraan Operasional';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['unit'] = $this->Admin_model->getKendaraanById($id);

        $this->form_validation->set_rules('nopol', 'Nomor Polisi', 'required');
        $this->form_validation->set_rules('merk', 'Merk Type', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis Kendaraan', 'required');
        $this->form_validation->set_rules('no_rangka', 'Nomor Rangka', 'required');
        $this->form_validation->set_rules('no_mesin', 'Nomor Mesin', 'required');
        $this->form_validation->set_rules('fungsi', 'Fungsi', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('admin/edit_kendaraan', $data);
        } else {
            $this->Admin_model->editDataKendaraan();
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
            <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
            <p class="message-mg-rt">Data kendaraan berhasil diubah!</p></div>');
            redirect('admin/kendaraan');
        }
    }

    public function hapus_kendaraan($id)
    {
        $this->Admin_model->hapusDataKendaraan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Kendaraan Operasional berhasil dihapus!</p></div>');
        redirect('admin/kendaraan');
    }

    public function postingan()
    {
        $data['title'] = 'Berita & Postingan';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['list_postingan'] = $this->db->get('tb_postingan')->result_array();

        $this->template->halaman('admin/postingan', $data);
    }

    public function buatPost()
    {
        $data['title'] = 'Buat Berita & Postingan';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->template->halaman('admin/buat_post', $data);
        } else {
            $this->Admin_model->buat_postingan();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one alert-st-bg" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
            <p class="message-mg-rt">Postingan berhasil ditambahkan!</p></div>');
            redirect('admin/postingan');
        }
    }

    public function hapus_postingan($id)
    {
        $this->Admin_model->hapusPostingan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Postingan berhasil dihapus!</p></div>');
        redirect('admin/postingan');
    }

    public function edit_postingan($id)
    {
        $data['title'] = 'Edit Berita & Postingan';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['post'] = $this->Admin_model->getPostinganById($id);

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('admin/edit_postingan', $data);
        } else {
            $this->Admin_model->editPostingan($id);
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
            <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
            <p class="message-mg-rt">Postingan berhasil diubah!</p></div>');
            redirect('admin/postingan');
        }
    }
}
