<?php
class Karyawan_m extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
   //Menampilan data
    public function display_record(){
        $query = $this->db->query("select * from karyawan");
        $data = $query->result();

        return $data;
    }

    public function tambah($data){
        $query = $this->db->query("INSERT INTO karyawan(nomor,nama,nip,pangkat,jabatan,pend_terakhir) VALUES ('".$data['nomor']."','".$data['nama']."','".$data['nip']."','".$data['pangkat']."','".$data['jabatan']."','".$data['pend_terakhir']."')");

        $this->db->set($query);
    }

    public function displayedit($data){
        $query = $this->db->query( "select * from karyawan WHERE kode_karyawan = '".$data."'");
        $row = $query->row();

        $edit['nomor'] = $row->nomor;
        $edit['nama'] = $row->nama;
        $edit['nip'] = $row->nip;
        $edit['pangkat'] = $row->pangkat;
        $edit['jabatan'] = $row->jabatan;
        $edit['pend_terakhir'] = $row->pend_terakhir;
        $edit['kode_karyawan'] = $row->kode_karyawan;

        return $edit;
    }

    public function submitedit($data){
        $query = $this->db->query( "UPDATE karyawan SET nomor = '".$data['nomor']."', nama = '".$data['nama']."', nip = '".$data['nip']."', pangkat = '".$data['pangkat']."', jabatan = '".$data['jabatan']."', pend_terakhir = '".$data['pend_terakhir']."' WHERE kode_karyawan = '".$data['kode_karyawan']."'");

        $this->db->set($query);
    }

    
    public function delete($data){
        $query = $this->db->query( "DELETE  from karyawan WHERE kode_karyawan = '".$data."'");
        $this->db->set($query);
    }

}
?>