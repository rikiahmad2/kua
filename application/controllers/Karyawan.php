<?php
class Karyawan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('User');
        $this->load->model('Karyawan_m');
        $this->load->library('session');
    }

    public function index() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Data Karyawan";

        $result['data'] = $this->Karyawan_m->display_record();
        

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/karyawan',$result);
        $this->load->view('admin/footer');
    }

    public function delete() {
        $input = $this->uri->segment('3');
        $result['data'] = $this->Karyawan_m->delete($input);

        redirect("/Karyawan/", "refresh");
    }

    public function edit(){
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Edit Penyuluh";

        $input = $this->uri->segment('3');
        $result['data'] = $this->Karyawan_m->displayedit($input);

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/edit_karyawan', $result);
        $this->load->view('admin/footer');
    }

    public function tambah() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Data Karyawan";

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/form_karyawan');
        $this->load->view('admin/footer');
    }

    public function submitTambah() {

           $input['nomor'] = $this->input->post('nomor');
           $input['nama'] = $this->input->post('nama');
           $input['nip'] = $this->input->post('nip');
           $input['pangkat'] = $this->input->post('pangkat');
           $input['jabatan'] = $this->input->post('jabatan');
           $input['pend_terakhir'] = $this->input->post('pend_terakhir');

           $result['data'] = $this->Karyawan_m->tambah($input);

           
       redirect("/Karyawan/", "refresh");
    }

    public function submitEdit(){
        
           $input['kode_karyawan'] = $this->input->post('kode_karyawan');
           $input['nomor'] = $this->input->post('nomor');
           $input['nama'] = $this->input->post('nama');
           $input['nip'] = $this->input->post('nip');
           $input['pangkat'] = $this->input->post('pangkat');
           $input['jabatan'] = $this->input->post('jabatan');
           $input['pend_terakhir'] = $this->input->post('pend_terakhir');

            $this->Karyawan_m->submitedit($input);
            redirect("/Karyawan/", "refresh");
    }
    
}