<?php
class SO extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
   //Menampilan data
    public function display_record(){
        $query = $this->db->query("select * from struktur_organisasi");
        $data = $query->result();

        return $data;
    }

    public function tambahdata($data){
        $query = $this->db->query("INSERT INTO struktur_organisasi(foto) VALUES ('".$data['foto']."')");

        $this->db->set($query);
    }

    public function delete($data){
        $query = $this->db->query( "DELETE  from struktur_organisasi WHERE kode_struktur = '".$data."'");
        $this->db->set($query);
    }

    public function displayedit($data){
        $query = $this->db->query( "select * from struktur_organisasi WHERE kode_struktur = '".$data."'");
        $row = $query->row();

        $edit['kode_struktur'] = $row->kode_struktur;
        $edit['foto'] = $row->foto;

        return $edit;
    }

    public function submitedit($data){
        $query = $this->db->query( "UPDATE struktur_organisasi SET foto = '".$data['foto']."' WHERE kode_struktur = '".$data['kode_struktur']."'");

        $this->db->set($query);
    }
}
?>