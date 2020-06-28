<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    
    public function __construct()
	{
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('User');
        $this->load->model('Berita_m');
        $this->load->model('Statistik_m');
        $this->load->library('session');
    }
    
    public function index() {
    	$result['data'] = $this->Berita_m->display_record(); 
    	$result['data2'] = $this->Statistik_m->display_record();

        $this->load->view('home/index', $result);
    }

    public function berita(){
    	$input = $this->uri->segment('3');
    	$result['data'] = $this->Berita_m->displayedit($input);
    	$this->load->view('berita/berita_view',$result);
    }
}