<?php
class Admin extends CI_Controller {
    
    public function __construct()
	{
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('User');
		$this->load->library('session');
    }
    
    public function index() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Dashboard Admin";

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect("/Login/" , "refresh");
    }

    public function settings(){
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Settings";

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/settings');
    }

    public function submitSettings(){
        $input['nama'] = $this->input->post('nama');
        $input['email'] = $this->input->post('email');
        $input ['password'] = $this->input->post('password');
        $input['id_user'] = $this->session->userdata('id_user');

        $result = $this->User->submit_edit($input);
        redirect("/Admin/logout", "refresh");
    }
}