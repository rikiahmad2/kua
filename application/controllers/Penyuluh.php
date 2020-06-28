<?php
class Penyuluh extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('User');
        $this->load->model('Penyuluh_m');
        $this->load->library('session');
    }

    public function dataPenyuluh() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Data Penyuluh";
        $result['data'] = $this->Penyuluh_m->display_record();
        

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/penyuluh', $result);
        $this->load->view('admin/footer');
    }


    public function tambahPenyuluh() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Data Penyuluh";

        $result['data'] = $this->Penyuluh_m->display_record();

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/form_penyuluh',$result);
        $this->load->view('admin/footer');
    }

    public function submitTambahPenyuluh() {

        
           $input['nama'] = $this->input->post('nama');
           $input['jk'] = $this->input->post('jk');
           $input['tmpt_lahir'] = $this->input->post('tmpt_lahir');
           $input['tgl_lahir'] = $this->input->post('tgl_lahir');
           $input['pendidikan'] = $this->input->post('pendidikan');
           $input['tugas'] = $this->input->post('tugas');



           $result = $this->Penyuluh_m->tambahdataPenyuluh($input);
           redirect("/Penyuluh/dataPenyuluh", "refresh");
       
    }

     public function editPenyuluh(){
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Edit Karyawan";
        $input = $this->uri->segment('3');
        $result['data'] = $this->Penyuluh_m->displayeditPenyuluh($input);

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/edit_penyuluh', $result);
        $this->load->view('admin/footer');
    }

    public function submitEditPenyuluh(){
        
           $input['id_penyuluh'] = $this->input->post('id_penyuluh');
           $input['nama'] = $this->input->post('nama');
           $input['jk'] = $this->input->post('jk');
           $input['tmpt_lahir'] = $this->input->post('tmpt_lahir');
           $input['tgl_lahir'] = $this->input->post('tgl_lahir');
           $input['pendidikan'] = $this->input->post('pendidikan');
           $input['tugas'] = $this->input->post('tugas');

            $this->Penyuluh_m->submiteditPenyuluh($input);
            redirect("/Penyuluh/dataPenyuluh", "refresh");
    }

    public function deletePenyuluh() {
        $input = $this->uri->segment('3');
        $result['data'] = $this->Penyuluh_m->deletePenyuluh($input);

        redirect("/Penyuluh/dataPenyuluh", "refresh");
    }
    
}