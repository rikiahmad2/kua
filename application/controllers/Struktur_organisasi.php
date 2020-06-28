<?php
class Struktur_organisasi extends CI_Controller {
    
    public function __construct()
	{
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('User');
        $this->load->model('SO');
		$this->load->library('session');
    }
    
    public function index() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Dashboard Admin";

        $result['data'] = $this->SO->display_record();

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/struktur', $result);
        $this->load->view('admin/footer');
    }

    public function tambah() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Dashboard Admin";
        $result['data']['kode_struktur'] = "";
        $result['fungsi'] = "submitTambah";

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/tambah_struktur',$result);
        $this->load->view('admin/footer');
    }

    public function submitTambah(){
        
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
            $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
            $input['foto'] = $namaFile;

           $result = $this->SO->tambahdata($input);
           redirect("/Struktur_organisasi", "refresh");
       }
       else{
           echo "Format Tidak Sesuai";
       }
    }

    public function delete() {
        $input = $this->uri->segment('3');
        $this->SO->delete($input);

        redirect("/Struktur_organisasi", "refresh");
    }

    public function edit() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Edit";
        $input = $this->uri->segment('3');
        $result['data'] = $this->SO->displayedit($input);
        $result['fungsi'] = "submitEdit";

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/tambah_struktur',$result);
        $this->load->view('admin/footer');
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
            // pindahkan file
            $input['kode_struktur'] = $this->input->post('kode_struktur');
            $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
            $input['foto'] = $namaFile;


            $this->SO->submitedit($input);
            redirect("/Struktur_organisasi", "refresh");
       }

       else{
            echo "Format Tidak Sesuai";
        }
    }

}