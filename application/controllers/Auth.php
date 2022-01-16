<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function goToDefaultPage()
    {
        if ($this->session->userdata('role_id') == 1) {
            redirect('user/dashboard');
        } else if ($this->session->userdata('role_id') == 2) {
            redirect('user/dashboard');
        }
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->goToDefaultPage();
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Login';
            $this->template->halaman_login('auth/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $this->goToDefaultPage();
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();

        // jika user ada
        if ($user) {
            // cek password user
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'role_id' => $user['role_id'],
                    'level' => $user['level']
                ];
                $this->session->set_userdata($data);
                redirect('user/dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
                <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
                <p class="message-mg-rt">Password anda salah!</p></div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-mg-b alert-st-four alert-st-bg3" role="alert">
            <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-clr3" aria-hidden="true"></i>
            <p class="message-mg-rt">Anda belum terdaftar!</p></div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one alert-st-bg" role="alert">
        <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
        <p class="message-mg-rt">Akun anda berhasil keluar!</p></div>');
        redirect('auth');
    }

    public function blocked()
    {
        $data['aplikasi'] = $this->db->get_where('tb_pengaturan', ['id' => '1'])->row_array();

        $this->load->view('auth/blocked', $data);
    }
}
