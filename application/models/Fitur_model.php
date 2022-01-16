<?php 

class Fitur_model extends CI_Model
{
    public function hapusLaporan($id)
    {
        $this->db->delete('tb_laporan', ['id' => $id]);
    }

    public function getDataGiat(){
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('tb_giat');
		return $query->result_array();
	}

    public function getIdGiat(){
        $this->db->select_max('id');
        $query = $this->db->get('tb_giat');
		$ret = $query->row();
		$idTerakhir = $ret->id;
		return $idTerakhir;
	}

    public function tambahGiat()
    {
        $idTerakhir = $this->Fitur_model->getIdGiat();
        $id_giat = $idTerakhir + 1;

        $kegiatan = $this->input->post('kegiatan', true);
        $waktu = $this->input->post('waktu', true);
        $lokasi = $this->input->post('lokasi', true);
        $penanganan = $this->input->post('penanganan', true);
        $koordinator = $this->input->post('koordinator', true);
        $kendaraan = $this->input->post('kendaraan', true);
        $rs = $this->input->post('rs', true);

        $data = [
            "id" => $id_giat,
            "kegiatan" => $kegiatan,
            "waktu" => $waktu,
            "lokasi" => $lokasi,
            "penanganan" => $penanganan,
            "koordinator" => $koordinator,
            "kendaraan" => $kendaraan,
            "rs" => $rs
        ];
        $this->db->insert('tb_giat', $data);

        // Input data korban
        $id = $id_giat;
		$nama = $_POST['nama'];
		$umur = $_POST['umur'];
		$alamat = $_POST['alamat'];
		$kondisi = $_POST['kondisi'];
		$data = array();
		
		$index = 0;
		foreach($nama as $dataNama){
			array_push($data, array(
                'id_giat'=>$id,
				'nama'=>$dataNama,
				'umur'=>$umur[$index],
				'alamat'=>$alamat[$index],
				'kondisi'=>$kondisi[$index],
			));
			$index++;
		}
        $data_korban = base_url('fitur/data_korban/' . $id);

        /*
        | ---------------------------------------------------------------
        | API Telegram Untuk Notifikasi
        | ---------------------------------------------------------------
        */
        $bot['api'] = $this->Layanan_model->Telegram_api();
        $aktif = 1;
        if($aktif == $bot['api']['bot_active']){
        $token = $bot['api']['token'];
        $pesan = [
        'text' => "Laporan Giat Dari Aplikasi [E-RCE]\n===========================\nKode Giat = $id_giat\nJenis Laporan = $kegiatan\nWaktu = $waktu\nLokasi = $lokasi\nPenanganan = $penanganan\nKoordinator = $koordinator\nKendaraan Operasional = $kendaraan\nRumah Sakit = $rs\n\nData Korban = $data_korban\n===========================",
        'chat_id' => $bot['api']['chat_id']
        ];
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($pesan));
        };
        /*
        | ---------------------------------------------------------------
        | API WhatsApp Untuk Notifikasi
        | ---------------------------------------------------------------
        */
        $bot['api_wa'] = $this->Layanan_model->WhatsApp_api();
        $aktif = 1;
        if($aktif == $bot['api_wa']['bot_active']){
        $curl = curl_init();
        $pesan_wa = "Laporan Giat Dari Aplikasi [E-RCE]\n===========================\nKode Giat = $id_giat\nJenis Laporan = $kegiatan\nWaktu = $waktu\nLokasi = $lokasi\nPenanganan = $penanganan\nKoordinator = $koordinator\nKendaraan Operasional = $kendaraan\nRumah Sakit = $rs\n\nData Korban = $data_korban\n===========================";

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

        $this->db->insert_batch('tb_korban', $data);
    }

    public function hapusGiat($id)
    {
        $this->db->delete('tb_giat', ['id' => $id]);
        $this->db->delete('tb_korban', ['id_giat' => $id]);
    }
}