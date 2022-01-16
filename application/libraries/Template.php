<?php

class Template{
    protected $_ci;
    
    function __construct(){
        $this->_ci = &get_instance();
    }
    
    function halaman($content, $data = NULL){
        $data['aplikasi'] = $this->_ci->db->get_where('tb_pengaturan', ['id' => '1'])->row_array();
        $data['header'] = $this->_ci->load->view('templates/header', $data, TRUE);
        $data['sidebar'] = $this->_ci->load->view('templates/sidebar', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('templates/footer', $data, TRUE);

        $this->_ci->load->view('templates/index', $data);
    }

    function halaman_login($content, $data = NULL){
        $data['aplikasi'] = $this->_ci->db->get_where('tb_pengaturan', ['id' => '1'])->row_array();

        $this->_ci->load->view('auth/login', $data);
    }

    function halaman_rekrutmen($content, $data = NULL){
        $data['aplikasi'] = $this->_ci->db->get_where('tb_pengaturan', ['id' => '1'])->row_array();

        $this->_ci->load->view('user/rekrutmen', $data);
    }

    function layanan($content, $data = NULL){
        $data['media'] = $this->_ci->db->get_where('tb_pengaturan_website', ['id' => '4'])->row_array();
        $data['aplikasi'] = $this->_ci->db->get_where('tb_pengaturan', ['id' => '1'])->row_array();
        $data['header'] = $this->_ci->load->view('layanan/header', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('layanan/footer', $data, TRUE);

        $this->_ci->load->view('layanan/utama', $data);
    }

    function website($content, $data = NULL){
        $data['aplikasi'] = $this->_ci->db->get_where('tb_pengaturan', ['id' => '1'])->row_array();
        $data['website'] = $this->_ci->db->get_where('tb_pengaturan_website', ['id' => '1'])->row_array();
        $data['slideshow'] = $this->_ci->db->get_where('tb_pengaturan_website', ['id' => '2'])->row_array();
        $data['informasi'] = $this->_ci->db->get_where('tb_pengaturan_website', ['id' => '3'])->row_array();
        $data['media'] = $this->_ci->db->get_where('tb_pengaturan_website', ['id' => '4'])->row_array();

        $data['header'] = $this->_ci->load->view('website/header', $data, TRUE);
        $data['content'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('website/footer', $data, TRUE);

        $this->_ci->load->view('website/index', $data);
    }
}