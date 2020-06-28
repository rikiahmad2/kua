<?php
class Berita_m extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
   //Menampilan data
    public function display_record(){
        $query = $this->db->query("select * from berita");
        $data = $query->result();

        return $data;
    }

    public function tambah($data){
        $query = $this->db->query("INSERT INTO berita(nomor,foto,title,isi) VALUES ('".$data['nomor']."','".$data['foto']."','".$data['title']."','".$data['isi']."')");

        $this->db->set($query);
    }

    public function displayedit($data){
        $query = $this->db->query( "select * from berita WHERE kode_berita = '".$data."'");
        $row = $query->row();

        $edit['kode_berita'] = $row->kode_berita;
        $edit['nomor'] = $row->nomor;
        $edit['title'] = $row->title;
        $edit['isi'] = $row->isi;
        $edit['foto'] = $row->foto;

        return $edit;
    }

    public function submitedit($data){
        $query = $this->db->query( "UPDATE berita SET nomor = '".$data['nomor']."', title = '".$data['title']."', isi = '".$data['isi']."', foto = '".$data['foto']."' WHERE kode_berita = '".$data['kode_berita']."'");

        $this->db->set($query);
    }

    
    public function delete($data){
        $query = $this->db->query( "DELETE  from berita WHERE kode_berita = '".$data."'");
        $this->db->set($query);
    }

}
?>