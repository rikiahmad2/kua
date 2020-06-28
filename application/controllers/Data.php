<?php
class Data extends CI_Controller {
    
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

    public function penyuluh() {
        $data['title'] = 'Data Penyuluh';
        $data['header'] = 'Data Penyuluh Agama';
        $result['data2'] = $this->Penyuluh_m->display_record();
        $this->load->view('headnav/nav',$data);
        $this->load->view('data/penyuluh_view', $result);
    }

    public function masjid(){
        $data['title'] = 'Data Masjid';
        $data['header'] = 'Data Tempat Ibadah';
        $result['data2'] = $this->Masjid_m->display_record();

        $this->load->view('headnav/nav',$data);
        $this->load->view('data/masjid', $result);
    }
}