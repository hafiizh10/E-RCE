<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layanan extends CI_Controller
{
    public function index()
    {
    $data['title'] = 'Layanan Gawat Darurat';
    
    $this->template->layanan('layanan/index', $data);
    }

    public function kecelakaan()
    {
        $data = [
            'title' => 'Penanganan Kecelakaan',
            'info' => 'Membantu masyarakat yang mengalami kecelakaan lalu lintas atau kecelakaan kerja.',
            'laporan' => 'Kecelakaan',
            'lokasi' => 'Komplek Villa 1 dekat indomaret km 15',
            'ket' => 'Korban 2 orang mengalami luka berat membutuhkan ambulans PMI'
        ];
        
        $this->form_validation->set_rules('lokasi', 'Lokasi Kejadian', 'required');
        $this->form_validation->set_rules('ket', 'Keterangan', 'required');
        
        $idTerakhir = $this->Layanan_model->getIdTerakhir();
        $id = $idTerakhir + 1;
        
        if ($this->form_validation->run() == false) {
            $this->template->layanan('layanan/form_laporan', $data);
        } else {
            $this->Layanan_model->tambahLaporan($data);
            $this->session->set_flashdata('message', '<div class="alert alert-info alert-st-two" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro" aria-hidden="true"></i>
            <p class="message-mg-rt" style="font-size: 18px;"><b>Laporan anda berhasil dikirim!</b></p></div>');
            $this->session->set_flashdata('flash', 'Laporan anda berhasil dikirim!');
            redirect('layanan/hasil_laporan/'.$id);
        }
    }

    public function kebakaran()
    {
        $data = [
            'title' => 'Penanganan Kebakaran',
            'info' => 'Membantu petugas damkar dan memberikan pertolongan pertama apabila ada korban.',
            'laporan' => 'Kebakaran',
            'lokasi' => 'Komplek Melati dekat indomaret km 15',
            'ket' => 'Api masih menyala dan semakin membesar, sumber air sulit'
        ];
        
        $this->form_validation->set_rules('lokasi', 'Lokasi Kejadian', 'required');
        $this->form_validation->set_rules('ket', 'Keterangan', 'required');
        
        $idTerakhir = $this->Layanan_model->getIdTerakhir();
        $id = $idTerakhir + 1;
        
        if ($this->form_validation->run() == false) {
            $this->template->layanan('layanan/form_laporan', $data);
        } else {
            $this->Layanan_model->tambahLaporan($data);
            $this->session->set_flashdata('message', '<div class="alert alert-info alert-st-two" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro" aria-hidden="true"></i>
            <p class="message-mg-rt" style="font-size: 18px;"><b>Laporan anda berhasil dikirim!</b></p></div>');
            $this->session->set_flashdata('flash', 'Laporan anda berhasil dikirim!');
            redirect('layanan/hasil_laporan/'.$id);
        }
    }

    public function ambulans()
    {
        $data = [
            'title' => 'Layanan Ambulans',
            'info' => 'Membantu masyarakat yang membutuhkan ambulans untuk pengantaran pasien rujukan, pengantaran jenazah, dan kegiatan sosial lainnya.',
            'laporan' => 'Ambulans',
            'lokasi' => 'Dari Komplek Pramuka Martapura menuju RSUD Ulin Banjarmasin',
            'ket' => 'Dibutuhkan ambulance untuk membawa pasien sesak napas'
        ];
        
        $this->form_validation->set_rules('lokasi', 'Lokasi Kejadian', 'required');
        $this->form_validation->set_rules('ket', 'Keterangan', 'required');
        
        $idTerakhir = $this->Layanan_model->getIdTerakhir();
        $id = $idTerakhir + 1;
        
        if ($this->form_validation->run() == false) {
            $this->template->layanan('layanan/form_laporan', $data);
        } else {
            $this->Layanan_model->tambahLaporan($data);
            $this->session->set_flashdata('message', '<div class="alert alert-info alert-st-two" role="alert">
            <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro" aria-hidden="true"></i>
            <p class="message-mg-rt" style="font-size: 18px;"><b>Laporan anda berhasil dikirim!</b></p></div>');
            $this->session->set_flashdata('flash', 'Laporan anda berhasil dikirim!');
            redirect('layanan/hasil_laporan/'.$id);
        }
    }

    public function hasil_laporan($id)
    {
        $data['title'] = 'Hasil Laporan';
        $data['laporan'] = $this->Layanan_model->getLaporanById($id);

        $config['zoom'] = 'auto';
        $config['map_height'] = '500px';
        $config['map_type'] = 'HYBRID';
        $this->googlemaps->initialize($config);
        foreach ($this->Layanan_model->maps($id) as $key => $value) :
            $marker = array();
            $marker['position'] = "{$value->latitude}, {$value->longitude}";
            $marker['infowindow_content'] = '<div class="media" style="width:300px;">';
            $marker['infowindow_content'] .= '<div class="media-left">';
            $marker['infowindow_content'] .= '</div>';
            $marker['infowindow_content'] .= '<div class="media-body">';
            $marker['infowindow_content'] .= '<h5 class="media-heading">Laporan ' . $value->laporan . '</h5>';
            $marker['infowindow_content'] .= '<p><b>Waktu Kejadian :</b> ' . $value->waktu . '</p>';
            $marker['infowindow_content'] .= '<p><b>Lokasi Kejadian :</b> ' . $value->lokasi . '</p>';
            $marker['infowindow_content'] .= '<p><b>Keterangan :</b> ' . $value->ket . '</p><br>';
            $marker['infowindow_content'] .= '</div>';
            $marker['infowindow_content'] .= '</div>';
            $marker['icon'] = '';
            $this->googlemaps->add_marker($marker);
        endforeach;

        $this->googlemaps->initialize($config);

        $data['map'] = $this->googlemaps->create_map();

        $this->template->layanan('layanan/hasil_laporan', $data);
    }

    public function telegram($id)
    {
        $data['api'] = $this->Layanan_model->Telegram_api();

        $row = $this->Layanan_model->getLaporanById($id);
        if (isset($row))
        {
            $id_laporan = $id;
            $laporan = $row['laporan'];
            $waktu = $row['waktu'];
            $latitude = $row['latitude'];
            $longitude = $row['longitude'];
            $lokasi = $row['lokasi'];
            $ket = $row['ket'];
            $link = base_url('layanan/hasil_laporan/' . $id);
        }
        
        $aktif = 1;
        if($aktif == $data['api']['bot_active']){
        $token = $data['api']['token'];
        $pesan = [
        'text' => "Laporan Masuk Dari Aplikasi [E-RCE]\n===========================\nKode Laporan = $id_laporan\nJenis Laporan = $laporan\nWaktu Kejadian = $waktu\nLokasi Kejadian = $lokasi\nKeterangan = $ket\nLink Laporan = $link\n\nBuka Google Maps = https://www.google.com/maps/place/$latitude+$longitude/@$latitude,$longitude,15z",
        'chat_id' => $data['api']['chat_id']
        ];
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($pesan));
        };

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one" role="alert">
        <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro" aria-hidden="true"></i>
        <p class="message-mg-rt" style="font-size: 18px;"><b>Laporan anda berhasil dikirim lewat telegram kami!</b></p></div>');
        redirect('layanan/hasil_laporan/'.$id);
    }

    public function whatsapp($id)
    {
        $data['api'] = $this->Layanan_model->WhatsApp_api();

        $row = $this->Layanan_model->getLaporanById($id);
        if (isset($row))
        {
            $id_laporan = $id;
            $laporan = $row['laporan'];
            $waktu = $row['waktu'];
            $latitude = $row['latitude'];
            $longitude = $row['longitude'];
            $lokasi = $row['lokasi'];
            $ket = $row['ket'];
            $link = base_url('layanan/hasil_laporan/' . $id);
        }
        $pesan = "Laporan Masuk Dari Aplikasi [E-RCE]\n===========================\nKode Laporan = $id_laporan\nJenis Laporan = $laporan\nWaktu Kejadian = $waktu\nLokasi Kejadian = $lokasi\nKeterangan = $ket\nLink Laporan = $link\n\nBuka Google Maps = https://www.google.com/maps/place/$latitude+$longitude/@$latitude,$longitude,15z";
        
        $aktif = 1;
        if($aktif == $data['api']['bot_active']){
        $curl = curl_init();
        $token = $data['api']['token'];
        $domain_api = $data['api']['image'];
        $data = [
            'phone' => $data['api']['chat_id'],
            'message' => $pesan,
            'secret' => true,
            'priority' => true,
        ];

        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array(
                "Authorization: $token",
            )
        );
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_URL, "$domain_api/api/send-message");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($curl);
        curl_close($curl);
        };

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-st-one" role="alert">
        <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro" aria-hidden="true"></i>
        <p class="message-mg-rt" style="font-size: 18px;"><b>Laporan anda berhasil dikirim lewat WhatsApp kami!</b></p></div>');
        redirect('layanan/hasil_laporan/'.$id);
    }
}