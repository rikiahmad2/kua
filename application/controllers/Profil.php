<?php
class Profil extends CI_Controller {
    
    public function __construct()
	{
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('test');
		$this->load->library('session');
    }
    
    public function sejarah() {
        $data['title'] = 'Sejarah';
        $data['header'] = 'SEJARAH';
        $this->load->view('headnav/nav',$data);
        $this->load->view('profil/sejarah');
    }
    public function kepalaKUA(){
    	$result['data'] = $this->test->display_record();
    	$result['data2'] = $this->test->detail_kepala(10);
        $data['title'] = 'KepalaKUA';
        $data['header'] = 'PROFIL KEPALA KUA KECAMATAN SUKAKARYA';

        $this->load->view('headnav/nav',$data);
    	$this->load->view('profil/kepalaKUA', $result);
    }

     public function letakgeo(){
        $data['title'] = 'Letak Geografis';
        $data['header'] = 'LETAK GEOGRAFIS KUA KECAMATAN SUKAKARYA';
        $this->load->view('headnav/nav',$data);
        $this->load->view('profil/letakgeo');
    }
    public function visimisi(){
        $data['title'] = 'Visi Misi';
        $data['header'] = 'VISI MISI KUA KECAMATAN SUKAKARYA';
        $this->load->view('headnav/nav',$data);
        $this->load->view('profil/visimisi');
    }
}