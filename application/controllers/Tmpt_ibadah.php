<?php
class Tmpt_ibadah extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('User');
        $this->load->model('Masjid_m');
        $this->load->library('session');
    }

    public function tempatIbadah() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Data Tempat Ibadah";
        $result['data'] = $this->Masjid_m->display_record();
        

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/masjid', $result);
        $this->load->view('admin/footer');
    }


    public function tambahTmptIbadah() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Data Tempat Ibadah";

        $result['data'] = $this->Masjid_m->display_record();

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/form_masjid',$result);
        $this->load->view('admin/footer');
    }

    public function submitTambahTmptIbadah() {

           $input['desa'] = $this->input->post('desa');
           $input ['masjid'] = $this->input->post('masjid');
           $input['langgar'] = $this->input->post('langgar');
           $input['mushola'] = $this->input->post('mushola');
           $input ['gereja'] = $this->input->post('gereja');
           $input['vihara'] = $this->input->post('vihara');
           $input['pura'] = $this->input->post('pura');
           $result = $this->Masjid_m->tambahdataMasjid($input);
           redirect("/Tmpt_ibadah/tempatIbadah", "refresh");
       }

    public function editTmptIbadah(){
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Edit Tempat Ibadah";

        $input = $this->uri->segment('3');
        $result['data'] = $this->Masjid_m->displayeditMasjid($input);

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/edit_masjid', $result);
        $this->load->view('admin/footer');
    }

    public function submitEditTmptIbadah(){
        
            $input['id_masjid'] = $this->input->post('id_masjid');
            $input['desa'] = $this->input->post('desa');
            $input['masjid'] = $this->input->post('masjid');
            $input['langgar'] = $this->input->post('langgar');
            $input['mushola'] = $this->input->post('mushola');
            $input['gereja'] = $this->input->post('gereja');
            $input['vihara'] = $this->input->post('vihara');
            $input['pura'] = $this->input->post('pura');
            $this->Masjid_m->submiteditMasjid($input);
            redirect("/Tmpt_ibadah/tempatIbadah", "refresh");
      
    }

    public function deleteTmptIbadah() {
        $input = $this->uri->segment('3');
        $result['data'] = $this->Masjid_m->deleteMasjid($input);

        redirect("/Tmpt_ibadah/tempatIbadah", "refresh");
    }
    
}