<?php
class Berita extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('User');
        $this->load->model('Berita_m');
        $this->load->library('session');
    }

    public function index() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Data Berita";
        $result['data'] = $this->Berita_m->display_record(); 

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/berita',$result);
        $this->load->view('admin/footer');
    }

    public function delete() {
        $input = $this->uri->segment('3');
        $result['data'] = $this->Berita_m->delete($input);

        redirect("/Berita/", "refresh");
    }

    public function edit(){
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Edit Berita";

        $input = $this->uri->segment('3');
        $result['data'] = $this->Berita_m->displayedit($input);

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/edit_berita', $result);
        $this->load->view('admin/footer');
    }

    public function tambah() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Tambah Berita";

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/form_berita');
        $this->load->view('admin/footer');
    }

    public function submitTambah() {

        $i=rand(1,10000000);
        $namaFile = "foto".$i.".jpg";
        $namaSementara = $_FILES['foto']['tmp_name'];
        $type = $_FILES['foto']['type'];

            // tentukan lokasi file akan dipindahkan
        $dirUpload = "foto/";

        if($namaFile == $namaFile){
            $i=rand(1,10000000);
            $namaFile = "foto".$i.".jpg";
        }
        if($type == 'image/png' || $type == 'image/jpg' || $type == 'image/jpeg' ){

            $input['nomor'] = $this->input->post('nomor');
            $input['title'] = $this->input->post('title');
            $input['isi'] = $this->input->post('isi');
            $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
            $input['foto'] = $namaFile;

            $result['data'] = $this->Berita_m->tambah($input);

           
            redirect("/Berita/", "refresh");
           
        }
        else{
           echo "Format Tidak Sesuai";
        }

    }

    public function submitEdit(){

      $i=rand(1,10000000);
        $namaFile = "foto".$i.".jpg";
        $namaSementara = $_FILES['foto']['tmp_name'];
        $type = $_FILES['foto']['type'];

            // tentukan lokasi file akan dipindahkan
        $dirUpload = "foto/";

        if($namaFile == $namaFile){
            $i=rand(1,10000000);
            $namaFile = "foto".$i.".jpg";
        }
        if($type == 'image/png' || $type == 'image/jpg' || $type == 'image/jpeg' ){

            $input['kode_berita'] = $this->input->post('kode_berita');
            $input['nomor'] = $this->input->post('nomor');
            $input['title'] = $this->input->post('title');
            $input['isi'] = $this->input->post('isi');
            $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
            $input['foto'] = $namaFile;

            $result['data'] = $this->Berita_m->submitedit($input);

           
            redirect("/Berita/", "refresh");
           
        }
        else{
           echo "Format Tidak Sesuai";
        }
    }
    
}