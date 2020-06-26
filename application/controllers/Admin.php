<?php
class Admin extends CI_Controller {
    
    public function __construct()
	{
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('User');
        $this->load->model('Test');
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

        //session
        $input['id_user'] = $this->session->userdata('id_user');

        $result = $this->User->submit_edit($input);
        redirect("/Admin/logout", "refresh");
    }

    public function profilKepala() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Profil Kepala KUA";
        $result['data2'] = $this->Test->display_record_kepala();

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/periodesasi', $result);
        $this->load->view('admin/footer');
    }

    public function tambahKepala() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Profil Kepala KUA";

        $result['data'] = $this->Test->display_record();

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/form_kepala',$result);
        $this->load->view('admin/footer');
    }

    public function submitTambahKepala() {

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
           $input['kode_kepala'] = $this->input->post('kode_kepala');
           $input ['nomor'] = $this->input->post('nomor');
           $input['nip'] = $this->input->post('nip');
           $input['ttl'] = $this->input->post('ttl');
           $input ['kewarganegaraan'] = $this->input->post('kewarganegaraan');
           $input['agama'] = $this->input->post('agama');
           $input['email'] = $this->input->post('email');
           $input['alamat'] = $this->input->post('alamat');
           $input['jabatan'] = $this->input->post('jabatan');
           $input ['prestasi'] = $this->input->post('prestasi');
           $input['riwayat_pendidikan'] = $this->input->post('riwayat_pendidikan');
           $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
           $input['foto'] = $namaFile;


           $result = $this->Test->tambahdataKepala($input);
           redirect("/Admin/profilKepala", "refresh");
       }
       else{
        echo "Format Tidak Sesuai";
            }
    }

     public function editKepala(){
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Edit Kepala";

        $input = $this->uri->segment('3');
        $result['data'] = $this->Test->displayeditKepala($input);

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/edit_kepala', $result);
        $this->load->view('admin/footer');
    }

    public function submitEditKepala(){
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
            $input['kode_detail'] = $this->input->post('kode_detail');
            $input['kode_kepala'] = $this->input->post('kode_kepala');
            $input ['nomor'] = $this->input->post('nomor');
            $input['nip'] = $this->input->post('nip');
            $input['ttl'] = $this->input->post('ttl');
            $input ['kewarganegaraan'] = $this->input->post('kewarganegaraan');
            $input['agama'] = $this->input->post('agama');
            $input['email'] = $this->input->post('email');
            $input['alamat'] = $this->input->post('alamat');
            $input['jabatan'] = $this->input->post('jabatan');
            $input ['prestasi'] = $this->input->post('prestasi');
            $input['riwayat_pendidikan'] = $this->input->post('riwayat_pendidikan');

            $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
            $input['foto'] = $namaFile;


            $this->Test->submiteditKepala($input);
            redirect("/Admin/profilKepala", "refresh");
       }

       else{
            echo "Format Tidak Sesuai";
        }
    }

    public function deleteDetail() {
        $input = $this->uri->segment('3');
        $result['data'] = $this->Test->deleteKepala($input);

        redirect("/Admin/profilKepala", "refresh");
    }
    public function deletePeriode() {
        $input = $this->uri->segment('3');
        $result['data'] = $this->Test->deletePeriode($input);

        redirect("/Admin/periodesasi", "refresh");
    }

    public function tambahPeriode() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Tambah Data Periode";
        $result['data']['kode_kepala'] = "";
        $result['data']['nomor'] = "";
        $result['data']['nama'] = "";
        $result['data']['awal'] = "";
        $result['data']['akhir'] = "";
        $result['data']['action'] = "submitTambahPeriode";

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/form_periode',$result);
        $this->load->view('admin/footer');
    }

    public function submitTambahPeriode() {
        $input['nomor'] = $this->input->post('nomor');
        $input['nama'] = $this->input->post('nama');
        $input ['awal'] = $this->input->post('awal');
        $input['akhir'] = $this->input->post('akhir');

        $result = $this->Test->tambahdataPeriode($input);
        redirect("/Admin/periodesasi", "refresh");
    }

     public function periodesasi() {
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Profil Kepala KUA & periodesasi";
        $result['data'] = $this->Test->display_record();
        $result['data2'] = $this->Test->detail_kepala(10);

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/periodesasi2', $result);
        $this->load->view('admin/footer');
    }

        //tampilan edit
    public function editPeriode(){
        $user['nama'] = $this->session->userdata('nama');
        $user['title'] = "Profil Kepala KUA & periodesasi";

        $input = $this->uri->segment('3');
        $result['data'] = $this->Test->displayeditPeriode($input);
        $result['data']['action'] = "submitEditPeriode";

        $this->load->view('admin/navbar', $user);
        $this->load->view('admin/sidenav',$user);
        $this->load->view('admin/form_periode', $result);
        $this->load->view('admin/footer');
    }

    public function submiteditPeriode() {
        $input['kode_kepala'] = $this->input->post('kode');
        $input['nomor'] = $this->input->post('nomor');
        $input['nama'] = $this->input->post('nama');
        $input['awal'] = $this->input->post('awal');
        $input['akhir'] = $this->input->post('akhir');

        $result = $this->Test->submiteditPeriode($input);
        redirect("/Admin/periodesasi", "refresh");

    }

}