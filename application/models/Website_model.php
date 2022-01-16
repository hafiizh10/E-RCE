<?php

class Website_model extends CI_Model
{
    public function get_all_post()
    {
        $this->db->from('tb_postingan');
        $this->db->order_by('id', 'desc');
        return $this->db->get()->result_array();
    }

    public function get_post_by_slug($slug)
    {
        return $this->db->get_where('tb_postingan', ['slug' => $slug]);
    }

    public function get_galeri()
    {
        return $this->db->get('tb_galeri')->result_array();
    }
}
