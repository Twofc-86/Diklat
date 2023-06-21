<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function Riwayat_1()
    {
        $tit['title'] = 'Daftar Pelatihan';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $tit);
        $this->load->view('menu/home_pelatihan',);
        $this->load->view('Templates/auth_footer');
    }

    public function Pelatihan_divisi()
    {
        $data['title'] = 'Data Karyawan Divisi';
       
        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/data_karyawan_divisi');
        $this->load->view('Templates/auth_footer');
    }

    public function kustomisasi_report()
    {
        $data['title'] = 'Kustomisasi Report';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/kustomisasi_report');
        $this->load->view('Templates/auth_footer');
    }


    public function Pengembangan_diri()
    {
        $data['title'] = 'Pengembangan Diri';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/pengembangan_diri');
        $this->load->view('Templates/auth_footer');
    }

    public function Pengembangan_staff()
    {
        $data['title'] = 'Pengembangan Staff';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/pengembangan_staff');
        $this->load->view('Templates/auth_footer');
    }

    public function Direktori_kompetensi()
    {
        $data['title'] = 'Direktori Kompetensi';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/direktori_kompetensi');
        $this->load->view('Templates/auth_footer');
    }

    public function Peta_kompetensi_training()
    {
        $data['title'] = 'Peta Kompetensi Training';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/peta_kompetensi_training');
        $this->load->view('Templates/auth_footer');
    }

    public function Peta_kompetensi_jabatan()
    {
        $data['title'] = 'Peta Kompetensi Jabatan';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/peta_kompetensi_jabatan');
        $this->load->view('Templates/auth_footer');
    }

    public function Jam_pelatihan()
    {
        $data['title'] = 'Jam Pelatihan';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/jam_pelatihan');
        $this->load->view('Templates/auth_footer');
    }
    public function Riwayat_tempat_kerja()
    {
        $data['title'] = 'Riwayat Tempat Kerja';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/riwayat_tempat_kerja');
        $this->load->view('Templates/auth_footer');
    }

    public function Katalog()
    {
        $data['title'] = 'Katalog';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/Katalog');
        $this->load->view('Templates/auth_footer');
    }

    public function download()
    {
        $data['title'] = 'Download';


        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/download');
        $this->load->view('Templates/auth_footer');
    }

    public function Organisasi()
    {
        $data['title'] = 'Struktur Organisasi';
        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/struktur_organisasi');
        $this->load->view('Templates/auth_footer');
    }
    public function Pelayanan_1()
    {
        $tit['title'] = 'Data Karyawan';
        $this->titlelabel['label_link'] = 'Pelayanan_1';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage', $this->titlelabel);
        $this->load->view('Templates/user_navbar', $tit);
        $this->load->view('menu/data_karyawan',);
        $this->load->view('Templates/auth_footer');
    }

    public function Masa_pensiun()
    {
        $data['title'] = 'Masa Pensiun';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/masa_pensiun');
        $this->load->view('Templates/auth_footer');
    }
    public function Cek_pkwt()
    {
        $data['title'] = 'Cek PKWT';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/cek_pkwt');
        $this->load->view('Templates/auth_footer');
    }
    public function Rekap_absen()
    {
        $data['title'] = 'Rekap Absen';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/rekap_absen');
        $this->load->view('Templates/auth_footer');
    }
    public function Absen_divisi()
    {
        $data['title'] = 'Rekap Absen Divisi';
  
        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/Absen_divisi');
        $this->load->view('Templates/auth_footer');
    }
    public function Rekap_lembur()
    {
        $data['title'] = 'Rekap Lembur';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/rekap_lembur');
        $this->load->view('Templates/auth_footer');
    }
    public function Matrik_pelatihan()
    {
        $data['title'] = 'Matrik Pelatihan';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/matrik_pelatihan');
        $this->load->view('Templates/auth_footer');
    }
    public function Nilai_pengembangan()
    {
        $data['title'] = 'Nilai Pengembangan';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/nilai_pengembangan');
        $this->load->view('Templates/auth_footer');
    }
    public function Jabatan_kosong()
    {
        $data['title'] = 'Jabatan Kosong';

        $this->load->view('Templates/auth_header');
        $this->load->view('home/homepage',);
        $this->load->view('Templates/user_navbar', $data);
        $this->load->view('menu/jabatan_kosong');
        $this->load->view('Templates/auth_footer');
    }
}
