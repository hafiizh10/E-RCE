<?php

class User_model extends CI_Model
{
    public function tambahCalon()
    {
        $tempat = $this->input->post('ttl');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $ttl = $tempat . ', ' . $tgl_lahir;
        $data = [
            "nama" => htmlspecialchars($this->input->post('nama', true)),
            "nopol_calon" => htmlspecialchars($this->input->post('nopol_calon', true)),
            "nik" => htmlspecialchars($this->input->post('nik', true)),
            "no_sim" => htmlspecialchars($this->input->post('no_sim', true)),
            "jk" => htmlspecialchars($this->input->post('jk', true)),
            "ttl" => htmlspecialchars($ttl, true),
            "alamat" => htmlspecialchars($this->input->post('alamat', true)),
            "pekerjaan" => htmlspecialchars($this->input->post('pekerjaan', true)),
            "no_tlp" => htmlspecialchars($this->input->post('no_tlp', true)),
            "email" => htmlspecialchars($this->input->post('email', true)),
            "is_active" => 0
        ];
        $this->db->insert('tb_calon', $data);
    }

    public function getIdGaleri(){
        $this->db->select_max('id');
        $query = $this->db->get('tb_galeri');
		$ret = $query->row();
		$idTerakhir = $ret->id;
		return $idTerakhir;
	}

    public function tambahGaleri()
    {
        $id = $this->db->get_where('tb_galeri', ['id' => 50])->row('id');
        if($id != 50){
            $id_galeri = $this->getIdGaleri() + 1;
            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'jpg|png|ico';
                $config['max_size'] = '8048';
                $config['upload_path'] = './assets/img/galeri/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    // Resize image
                    $this->resizeImage($new_image);
                    // Save name image to database
                    $name_image = $new_image . '.webp';
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
                    <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
                    <p class="message-mg-rt">' . $this->upload->display_errors() . '</p></div>');
                    redirect('user/galeri');
                }
            }

            $data = [
                "id" => $id_galeri,
                "nama" => $this->input->post('nama', true),
                "ket" => $this->input->post('ket', true),
                "created_at" => $this->input->post('created_at', true),
                "image" => $name_image
            ];
            $this->db->insert('tb_galeri', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
            <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i>
            <p class="message-mg-rt">Hapus salah satu foto terlebih dahulu. Maksimal 50 foto kegiatan!</p></div>');
            redirect('user/galeri');
        }
    }

    public function resizeImage($new_image)
    {
        $config['image_library']='gd2';
        $config['source_image']='./assets/img/galeri/'.$new_image;
        $config['create_thumb']= FALSE;
        $config['maintain_ratio']= FALSE;
        $config['width']= 800;
        $config['height']= 570;
        $config['new_image']= './assets/img/galeri/'.$new_image;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        // Convert image to webp
        $source = './assets/img/galeri/'.$new_image;
        $destination = $source . '.webp';
        $options = [];
        WebPConvert\WebPConvert::convert($source, $destination, $options);
        unlink(FCPATH . 'assets/img/galeri/' . $new_image);
        $this->image_lib->clear();
    }

    public function hapusFoto($id)
    {
        $data['galeri'] = $this->db->get_where('tb_galeri', ['id' => $id])->row_array();
        $name_file = $data['galeri']['image'];
        unlink(FCPATH . 'assets/img/galeri/' . $name_file);
        $this->db->delete('tb_galeri', ['id' => $id]);
    }
}
