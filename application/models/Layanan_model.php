<?php 

class Layanan_model extends CI_Model
{
    public function getIdTerakhir(){
        $this->db->select_max('id');
        $query = $this->db->get('tb_laporan');
		$ret = $query->row();
		$idTerakhir = $ret->id;
		return $idTerakhir;
	}

    public function tambahLaporan()
    {
        $this->db->select_max('id');
        $query = $this->db->get('tb_laporan');
		$ret = $query->row();
		$idTerakhir = $ret->id;
        $id_laporan = $idTerakhir + 1;

        $laporan = $this->input->post('laporan', true);
        $waktu = $this->input->post('waktu', true);
        $latitude = $this->input->post('latitude', true);
        $longitude = $this->input->post('longitude', true);
        $lokasi = $this->input->post('lokasi', true);
        $ket = $this->input->post('ket', true);
        $link = base_url('layanan/hasil_laporan/' . $id_laporan);

        $data = [
            "id" => $id_laporan,
            "laporan" => htmlspecialchars($laporan),
            "waktu" => htmlspecialchars($waktu),
            "latitude" => htmlspecialchars($latitude),
            "longitude" => htmlspecialchars($longitude),
            "lokasi" => htmlspecialchars($lokasi),
            "ket" => htmlspecialchars($ket)
        ];
        
        /*
        | ---------------------------------------------------------------
        | API Telegram Untuk Notifikasi
        | ---------------------------------------------------------------
        */
        $bot['api'] = $this->Telegram_api();
        $aktif = 1;
        if($aktif == $bot['api']['bot_active']){
        $token = $bot['api']['token'];
        $pesan = [
        'text' => "Laporan Masuk Dari Aplikasi [E-RCE]\n===========================\nKode Laporan = $id_laporan\nJenis Laporan = $laporan\nWaktu Kejadian = $waktu\nLokasi Kejadian = $lokasi\nKeterangan = $ket\nLink Laporan = $link\n\nBuka Google Maps = https://www.google.com/maps/place/$latitude+$longitude/@$latitude,$longitude,15z\n===========================",
        'chat_id' => $bot['api']['chat_id']
        ];
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($pesan));
        };
        /*
        | ---------------------------------------------------------------
        | API WhatsApp Untuk Notifikasi
        | ---------------------------------------------------------------
        */
        $bot['api_wa'] = $this->WhatsApp_api();
        $aktif = 1;
        if($aktif == $bot['api_wa']['bot_active']){
        $curl = curl_init();
        $pesan_wa = "Laporan Masuk Dari Aplikasi [E-RCE]\n===========================\nKode Laporan = $id_laporan\nJenis Laporan = $laporan\nWaktu Kejadian = $waktu\nLokasi Kejadian = $lokasi\nKeterangan = $ket\nLink Laporan = $link\n\nBuka Google Maps = https://www.google.com/maps/place/$latitude+$longitude/@$latitude,$longitude,15z\n===========================";

        $token = $bot['api_wa']['token'];
        $domain_api = $bot['api_wa']['image'];
        $data_wa = [
            'phone' => $bot['api_wa']['chat_id'],
            'message' => $pesan_wa,
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
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data_wa));
        curl_setopt($curl, CURLOPT_URL, "$domain_api/api/send-message");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($curl);
        curl_close($curl);
        };

        $this->db->insert('tb_laporan', $data);
    }

    public function getLaporanById($id)
    {
        $data = $this->db->get_where('tb_laporan', array('id' => $id));
        if ($data->num_rows() == 0) {
            echo '<script>window.history.back()</script>';
        } else {
            return $this->db->get_where('tb_laporan', ['id' => $id])->row_array();
        }
    }

    public function maps($id)
    {
        return $this->db->get_where('tb_laporan', ['id' => $id])->result();
    }

    public function Telegram_api()
    {
        return $this->db->get_where('tb_pengaturan', ['id' => '2'])->row_array();
    }

    public function WhatsApp_api()
    {
        return $this->db->get_where('tb_pengaturan', ['id' => '3'])->row_array();
    }
}