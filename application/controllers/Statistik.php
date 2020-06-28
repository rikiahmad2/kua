<?php
class Statistik extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('User');
        $this->load->model('Statistik_m');
        $this->load->library('session');
    }

    public function dataStatistik() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Data Statistik";
        $result['data'] = $this->Statistik_m->display_record();
        

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/statistik', $result);
        $this->load->view('admin/footer');
    }


    public function tambahStatistik() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Data Statistik";

        $result['data'] = $this->Statistik_m->display_record();

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/form_statistik',$result);
        $this->load->view('admin/footer');
    }

    public function submitTambahStatistik() {

        
           $input['total_rt'] = $this->input->post('total_rt');
           $input['total_rw'] = $this->input->post('total_rw');
           $input['total_penduduk'] = $this->input->post('total_penduduk');
           $input['total_penganut'] = $this->input->post('total_penganut');
           $input['total_tmptibadah'] = $this->input->post('total_tmptibadah');
           $input['total_pendidikan'] = $this->input->post('total_pendidikan');



           $result = $this->Statistik_m->tambahdataStatistik($input);
           redirect("/Statistik/dataStatistik", "refresh");
       
    }

     public function editStatistik(){
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Edit Statistik";

        $input = $this->uri->segment('3');
        $result['data'] = $this->Statistik_m->displayeditStatistik($input);

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/edit_statistik', $result);
        $this->load->view('admin/footer');
    }

    public function submitEditStatistik(){
        
           $input['id_statistik'] = $this->input->post('id_statistik');
           $input['total_rt'] = $this->input->post('total_rt');
           $input['total_rw'] = $this->input->post('total_rw');
           $input['total_penduduk'] = $this->input->post('total_penduduk');
           $input['total_penganut'] = $this->input->post('total_penganut');
           $input['total_tmptibadah'] = $this->input->post('total_tmptibadah');
           $input['total_pendidikan'] = $this->input->post('total_pendidikan');


            $this->Statistik_m->submiteditStatistik($input);
            redirect("/Statistik/dataStatistik", "refresh");
    }

    public function deleteStatistik() {
        $input = $this->uri->segment('3');
        $result['data'] = $this->Statistik_m->deleteStatistik($input);

        redirect("/Statistik/dataStatistik", "refresh");
    }
    
}