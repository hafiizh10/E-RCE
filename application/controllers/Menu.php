<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Pengaturan Menu';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('menu/index', $data);
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one alert-st-bg" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
            <p class="message-mg-rt">Menu berhasil ditambahkan!</p></div>');
            redirect('menu');
        }
    }

    public function hapus_menu($id)
    {
        $this->Menu_model->hapusMenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Menu berhasil dihapus!</p></div>');
        redirect('menu');
    }

    public function hapus_submenu($id)
    {
        $this->Menu_model->hapusSubmenu($id);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
        <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
        <p class="message-mg-rt">Submenu berhasil dihapus!</p></div>');
        redirect('menu/submenu');
    }

    public function edit_menu($id)
    {
        $data['title'] = 'Edit Menu';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['user_menu'] = $this->Menu_model->getMenuById($id);

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('menu/edit_menu', $data);
        } else {
            $this->Menu_model->editDataMenu();
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
            <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
            <p class="message-mg-rt">Menu berhasil diubah!</p></div>');
            redirect('menu');
        }
    }

    public function edit_submenu($id)
    {
        $data['title'] = 'Edit Submenu';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['user_sub_menu'] = $this->Menu_model->getSubmenuById($id);
        $data['menu_id'] = $this->Menu_model->menuId();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('menu/edit_submenu', $data);
        } else {
            $this->Menu_model->editDataSubmenu();
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
            <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
            <p class="message-mg-rt">Submenu berhasil diubah!</p></div>');
            redirect('menu/submenu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Pengaturan Submenu';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        $data['subMenu'] = $this->Menu_model->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');

        if ($this->form_validation->run() == false) {
            $this->template->halaman('menu/submenu', $data);
        } else {
            $this->Menu_model->tambahSubmenu();
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one alert-st-bg" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
            <p class="message-mg-rt">Submenu berhasil ditambahkan!</p></div>');
            redirect('menu/submenu');
        }
    }
}
