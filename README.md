**<h1 align="center">Aplikasi Respon Cepat Emergency (E-RCE)</h1>**

E-RCE adalah aplikasi pelayanan gawat darurat untuk masyarakat yang membutuhkan pertolongan seperti kecelakaan lalu lintas, kebakaran, dan pelayanan ambulans. Selain itu aplikasi ini juga dapat menjadi sistem informasi untuk organisasi yang bergerak dibidang kemanusiaan seperti PMI, PSC, dan organisasi swasta lainnya.

## Fitur yang ada di E-RCE
Berikut beberapa fitur yang tersedia di E-RCE :
1. Website organisasi (*landing page*)
    - Slideshow foto-foto kegiatan organisasi
    - Postingan atau berita organisasi
    - Tombol panic button (Layanan Gawat Darurat)
    - Tombol login aplikasi (khusus untuk anggota)
    - Galeri atau foto kegiatan
    - Pendaftaran calon anggota organisasi
    - Informasi tugas & fungsi organisasi
    - Kontak informasi organisasi (alamat, nomor telepon, sosial media)
2. Fitur layanan gawat darurat (*panic button*)
    - Penanganan kecelakaan
    - Penanganan kebakaran
    - Layanan ambulans
3. Halaman login aplikasi E-RCE
4. Halaman utama aplikasi
    - Grafik laporan masyarakat (penenganan kecelakaan, penanganan kebakaran, layanan ambulans)
    - Grafik laporan kegiatan organisasi (per tanggal)
5. Halaman profil pengguna
6. Fitur ganti password
7. Fitur galeri kegiatan
8. Fitur tambah rumah sakit
9. Fitur data calon anggota
10. Fitur data anggota
11. Fitur kendaraan operasional
12. Fitur buat berita & postingan
13. Fitur pengaturan menu aplikasi
14. Fitur pengaturan submenu aplikasi
15. Fitur pengaturan level/role
16. Daftar rumah sakit
17. Fitur laporan kecelakaan
    - Peta seluruh laporan kecelakaan
    - Kirim laporan ke Telegram / WhatsApp
    - Hapus laporan kecelakaan
18. Fitur laporan kebakaran
    - Peta seluruh laporan kebakaran
    - Kirim laporan ke Telegram / WhatsApp
    - Hapus laporan kebakaran
19. Fitur pelayanan ambulans
    - Peta seluruh permintaan layanan ambulans
    - Kirim laporan ke Telegram / WhatsApp
    - Hapus data pelayanan ambulans
20. Fitur buat laporan kegiatan
21. Fitur seluruh data kegiatan
22. Fitur buat surat tugas
    - Print PDF surat tugas
23. Fitur pengaturan surat
24. Fitur pengaturan aplikasi
    - Nama aplikasi, title, footer, favicon
    - Ubah logo aplikasi
    - Pengaturan halaman pendaftaran calon anggota
25. Fitur pengaturan API
    - Pengaturan API Telegram
    - Pengaturan API WhatsApp
26. Fitur pengaturan website (*landing page*)
    - Pengaturan slideshow website
    - Pengaturan informasi organisasi
    - Pengaturan footer website
    - Pengaturan sosial media organisasi
27. Logout / keluar dari aplikasi

<hr>

- Aplikasi ini dapat mengirimkan notifikasi laporan gawat darurat ke WhatsApp anggota / grup Telegram.
- Aplikasi ini terdapat daftar rumah sakit di seluruh kalimantan selatan beserta link google maps nya.
- Aplikasi ini dapat membuat surat tugas dan dapat di unduh dengan format PDF.
- Semua pengguna aplikasi dapat mengunggah foto kegiatan dan akan tampil pada website utama.

## Tampilan Aplikasi
Berikut beberapa tampilan dari aplikasi E-RCE, untuk versi lengkap nya dapat dilihat pada video demo aplikasi.<br>
**Video demo aplikasi : https://www.youtube.com/watch?v=l-grNvNdCbI**

1. **Halaman *landing page* / website**
![Halaman landing page](https://raw.githubusercontent.com/hafiizh10/E-RCE/master/assets/screenshot/halaman%20landing%20page.png)
2. **Halaman layanan gawat darurat**
![Halaman layanan gawat darurat](https://raw.githubusercontent.com/hafiizh10/E-RCE/master/assets/screenshot/halaman%20layanan%20gawat%20darurat.png)
3. **Halaman laporan pelayanan ambulans**
![Halaman laporan pelayanan ambulans](https://raw.githubusercontent.com/hafiizh10/E-RCE/master/assets/screenshot/halaman%20laporan%20pelayanan.png)
4. **Peta seluruh layanan ambulans**
![Peta seluruh layanan ambulans](https://raw.githubusercontent.com/hafiizh10/E-RCE/master/assets/screenshot/peta%20seluruh%20layanan.png)
5. **Halaman utama aplikasi**
![Halaman utama aplikasi 1](https://raw.githubusercontent.com/hafiizh10/E-RCE/master/assets/screenshot/halaman%20utama%201.png)
![Halaman utama aplikasi 2](https://raw.githubusercontent.com/hafiizh10/E-RCE/master/assets/screenshot/halaman%20utama%202.png)
6. **Halaman profil pengguna**
![Halaman profil pengguna](https://raw.githubusercontent.com/hafiizh10/E-RCE/master/assets/screenshot/halaman%20profile.png)
7. **Halaman pengaturan aplikasi**
![Halaman profil pengguna](https://raw.githubusercontent.com/hafiizh10/E-RCE/master/assets/screenshot/halaman%20pengaturan%20aplikasi.png)

## Cara instalasi aplikasi
- Silahkan clone repo E-RCE : `git clone https://github.com/hafiizh10/E-RCE.git`
- Atau download file zip pada link berikut (coming soon)
- Jalankan `composer install` pada folder E-RCE
- Buat database dengan nama `e_rce`
- Import file `e_rce.sql` pada folder database
- Buka aplikasi pada link berikut `https://localhost/E-RCE`
- Untuk mengubah API Google Maps, masuk ke folder application\libraries buka file `Googlemaps.php`. Masukan api key anda pada `var $apiKey` baris 24.

Login aplikasi : 
1. **Admin**<br>
username : admin<br>
password : admin
2. **User**<br>
username : pengguna<br>
password : pengguna

## Requirement
1. PHP >= 7.4 
2. MySQL
3. Composer
4. API WhatsApp Gateway (WABLAS)
5. API Bot Telegram
6. API Google Maps

## Donasi
Jika dirasa aplikasi ini bermanfaat, tidak ada salahnya bagi saudara/i yang ingin memberi dukungan melalui :
> **Bank BNI : No. Rekening 0562316301 An. Hafiizh Zoelva Khairani**<br>
> **Link Trakteer : https://trakteer.id/zoel.va**

Berapapun yang anda kirimkan, saya ucapkan terima kasih banyak.

## Kontak saya
Jika ada pertanyaan atau membutuhkan bantuan silahkan hubungi saya pada kontak dibawah ini.
- Instagram : https://www.instagram.com/zoel.va/
- Email : hafiizh10@gmail.com

<hr>

**<h3>⚠️"Mohon aplikasi open source ini jangan diperjual belikan, pembuat aplikasi ini tidak ridho dunia akhirat jika ada menjualnya".⚠️</h3>**