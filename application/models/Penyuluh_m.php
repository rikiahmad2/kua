<?php
class Penyuluh_m extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
   //Menampilan data
    public function display_record(){
        $query = $this->db->query("select * from penyuluh");
        $data = $query->result();

        return $data;
    }

    public function tambahdataPenyuluh($data){
        $query = $this->db->query("INSERT INTO penyuluh(nama,jk,tmpt_lahir,tgl_lahir,pendidikan,tugas) VALUES ('".$data['nama']."','".$data['jk']."','".$data['tmpt_lahir']."','".$data['tgl_lahir']."','".$data['pendidikan']."','".$data['tugas']."')");

        $this->db->set($query);
    }

    public function displayeditPenyuluh($data){
        $query = $this->db->query( "select * from penyuluh WHERE id_penyuluh = '".$data."'");
        $row = $query->row();

        $edit['id_penyuluh'] = $row->id_penyuluh;
        $edit['nama'] = $row->nama;
        $edit['jk'] = $row->jk;
        $edit['tmpt_lahir'] = $row->tmpt_lahir;
        $edit['tgl_lahir'] = $row->tgl_lahir;
        $edit['pendidikan'] = $row->pendidikan;
        $edit['tugas'] = $row->tugas;

        return $edit;
    }

    public function submiteditPenyuluh($data){
        $query = $this->db->query( "UPDATE penyuluh SET nama = '".$data["nama"]."', jk = '".$data['jk']."', tmpt_lahir = '".$data['tmpt_lahir']."', tgl_lahir = '".$data['tgl_lahir']."', pendidikan = '".$data['pendidikan']."', tugas = '".$data["tugas"]."' WHERE id_penyuluh = '".$data['id_penyuluh']."'");

        $this->db->set($query);
    }

    
    public function deletePenyuluh($data){
        $query = $this->db->query( "DELETE  from penyuluh WHERE id_penyuluh = '".$data."'");
        $this->db->set($query);
    }

}
?>