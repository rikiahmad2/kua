<?php
class Program_kerja extends CI_Controller {
    
    public function __construct()
	{
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper('url');
        $this->load->model('Karyawan_m');
        $this->load->model('Penyuluh_m');
        $this->load->model('Masjid_m');
		$this->load->library('session');
    }

    public function keluarga_sakinah() {
        $data['title'] = 'Program Kerja';
        $data['header'] = 'Bidang keluarga Sakinah';
        $result['data2'] = $this->Penyuluh_m->display_record();
        $this->load->view('headnav/nav',$data);
        $this->load->view('programkerja/keluarga_sakinah');
    }

    public function masjid(){
        $data['title'] = 'Data Masjid';
        $data['header'] = 'Data Tempat Ibadah';
        $result['data2'] = $this->Masjid_m->display_record();

        $this->load->view('headnav/nav',$data);
        $this->load->view('data/masjid', $result);
    }

    public function ibadah_haji(){
        $data['title'] = 'Program Kerja';
        $data['header'] = 'Bidang Ibadah Haji';

        $this->load->view('headnav/nav',$data);
        $this->load->view('programkerja/ibadah_haji_view');
    }

    public function hisab_ruyah(){
        $data['title'] = 'Program Kerja';
        $data['header'] = "Bimbingan Kemasjidan Oleh KUA kecamatan Sukakarya";

        $this->load->view('headnav/nav',$data);
        $this->load->view('programkerja/hisab_ruyah');
    }

    public function nikah(){
        $data['title'] = 'Program Kerja';
        $data['header'] = "Pelayanan Nikah di KUA Kecamatan Sukakarya";

        $this->load->view('headnav/nav',$data);
        $this->load->view('programkerja/nikah');
    }

    public function wakaf(){
        $data['title'] = 'Program Kerja';
        $data['header'] = "Pelayanan Wakaf Oleh KUA Kecamatan Sukakarya";

        $this->load->view('headnav/nav',$data);
        $this->load->view('data/pelayananwakaf');
    }
}