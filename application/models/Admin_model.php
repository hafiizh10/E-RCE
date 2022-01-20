<?php

class Admin_model extends CI_Model
{

    public function getRoleById($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }

    public function hapusDataRole($id)
    {
        $this->db->delete('user_role', ['id' => $id]);
    }

    public function editDataRole()
    {
        $data = [
            "role" => $this->input->post('role', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_role', $data);
    }

    public function tambahUser()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nopol_user" => $this->input->post('nopol_user', true),
            "jk" => $this->input->post('jk', true),
            "alamat" => $this->input->post('alamat', true),
            "nra" => $this->input->post('nra', true),
            "jabatan" => $this->input->post('jabatan', true),
            "tlp_user" => $this->input->post('tlp_user', true),
            "email" => $this->input->post('email', true),
            "username" => $this->input->post('username', true),
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'image' => 'default.jpg',
            "level" => 'User',
            "role_id" => 2
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->insert('tb_user', $data);
    }

    public function updateCalon()
    {
        $data = [
            "is_active" => 1
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_calon', $data);
    }

    public function hapusUser($id)
    {
        $this->db->delete('tb_user', ['id' => $id]);
    }

    public function tambahRs()
    {
        $data = [
            "nama_rs" => $this->input->post('nama_rs', true),
            "link_maps" => $this->input->post('link_maps', true)
        ];
        $this->db->insert('tb_rs', $data);
    }

    public function hapusDataRs($id)
    {
        $this->db->delete('tb_rs', ['id' => $id]);
    }

    public function getRsById($id)
    {
        return $this->db->get_where('tb_rs', ['id' => $id])->row_array();
    }

    public function editDataRs()
    {
        $data = [
            "nama_rs" => $this->input->post('nama_rs', true),
            "link_maps" => $this->input->post('link_maps', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_rs', $data);
    }

    public function hapusDataCalon($id)
    {
        $this->db->delete('tb_calon', ['id' => $id]);
    }

    public function getAnggotaById($id)
    {
        return $this->db->get_where('tb_user', ['id' => $id])->row_array();
    }

    public function editDataAnggota()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nopol_user" => $this->input->post('nopol_user', true),
            "alamat" => $this->input->post('alamat', true),
            "tlp_user" => $this->input->post('tlp_user', true),
            "nra" => $this->input->post('nra', true),
            "jabatan" => $this->input->post('jabatan', true),
            "email" => $this->input->post('email', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_user', $data);
    }

    public function getCalonById($id)
    {
        return $this->db->get_where('tb_calon', ['id' => $id])->row_array();
    }

    public function tambahKendaraan()
    {
        $data = [
            "nopol" => $this->input->post('nopol', true),
            "merk" => $this->input->post('merk', true),
            "jenis" => $this->input->post('jenis', true),
            "no_rangka" => $this->input->post('no_rangka', true),
            "no_mesin" => $this->input->post('no_mesin', true),
            "fungsi" => $this->input->post('fungsi', true),
            "ket" => $this->input->post('ket', true)
        ];
        $this->db->insert('tb_kendaraan', $data);
    }

    public function getKendaraanById($id)
    {
        return $this->db->get_where('tb_kendaraan', ['id' => $id])->row_array();
    }

    public function editDataKendaraan()
    {
        $data = [
            "nopol" => $this->input->post('nopol', true),
            "merk" => $this->input->post('merk', true),
            "jenis" => $this->input->post('jenis', true),
            "no_rangka" => $this->input->post('no_rangka', true),
            "no_mesin" => $this->input->post('no_mesin', true),
            "fungsi" => $this->input->post('fungsi', true),
            "ket" => $this->input->post('ket', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_kendaraan', $data);
    }

    public function hapusDataKendaraan($id)
    {
        $this->db->delete('tb_kendaraan', ['id' => $id]);
    }

    function count_giat()
    {
        $this->db->select('waktu, COUNT(waktu) as tanggal');
        $this->db->group_by('LEFT(waktu, 10)', 'DESC');
        $hasil = $this->db->get('tb_giat');
        return $hasil;
    }

    function get_data_giat()
    {
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
        $query = $this->count_giat();
            if($query->num_rows() > 0){
                foreach($query->result() as $data){
                    $hasil[] = $data;
                }
                return $hasil;
            }
    }

    public function buat_postingan()
    {
        $judul = $this->input->post('judul');
        $slug = createSlug($judul);

        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'jpg|png|ico';
            $config['max_size'] = '4048';
            $config['upload_path'] = './assets/img/postingan/';

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
                redirect('admin/postingan');
            }
        }

        $data = [
            "judul" => $this->input->post('judul', true),
            "isi" => $this->input->post('isi', FALSE),
            "kategori" => $this->input->post('kategori', true),
            "created_at" => $this->input->post('created_at', true),
            "slug" => $slug,
            "image" => $name_image,
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->insert('tb_postingan', $data);
    }

    public function resizeImage($new_image)
    {
        $config['image_library']='gd2';
        $config['source_image']='./assets/img/postingan/'.$new_image;
        $config['create_thumb']= FALSE;
        $config['maintain_ratio']= FALSE;
        $config['quality']= '50%';
        $config['width']= 800;
        $config['height']= 570;
        $config['new_image']= './assets/img/postingan/'.$new_image;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        // Convert image to webp
        $source = './assets/img/postingan/'.$new_image;
        $destination = $source . '.webp';
        $options = [];
        WebPConvert\WebPConvert::convert($source, $destination, $options);
        unlink(FCPATH . 'assets/img/postingan/' . $new_image);
        $this->image_lib->clear();
    }

    public function hapusPostingan($id)
    {
        $data['gambar'] = $this->db->get_where('tb_postingan', ['id' => $id])->row_array();
        $nama_gambar = $data['gambar']['image'];
        if ($nama_gambar != 'default.jpg') {
            unlink(FCPATH . 'assets/img/postingan/' . $nama_gambar);
        }
        $this->db->delete('tb_postingan', ['id' => $id]);
    }

    public function getPostinganById($id)
    {
        return $this->db->get_where('tb_postingan', ['id' => $id])->row_array();
    }

    public function editPostingan($id)
    {
        $judul = $this->input->post('judul');
        $slug = createSlug($judul);

        $data = [
            "judul" => $this->input->post('judul', true),
            "isi" => $this->input->post('isi', true),
            "kategori" => $this->input->post('kategori', true),
            "created_at" => $this->input->post('created_at', true),
            "slug" => $slug
        ];

        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];
        $file['post'] = $this->Admin_model->getPostinganById($id);
        $old_image = $file['post']['image'];

        if ($upload_image) {
            $config['allowed_types'] = 'jpg|png|ico';
            $config['max_size'] = '4048';
            $config['upload_path'] = './assets/img/postingan/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                unlink(FCPATH . 'assets/img/postingan/' . $old_image);
                $new_image = $this->upload->data('file_name');
                // Resize image
                $this->resizeImage($new_image);
                // Save name image to database
                $nama_file = $new_image . '.webp';
                $this->db->set('image', $nama_file);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning alert-st-three alert-st-bg2" role="alert">
                <i class="fa fa-exclamation-triangle edu-warning-danger admin-check-pro admin-check-pro-clr2" aria-hidden="true"></i><p class="message-mg-rt">' . $this->upload->display_errors() . '</p></div>');
                redirect('admin/postingan');
            }
        }

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('tb_postingan', $data);
    }
}
