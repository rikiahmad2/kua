<?php
class Statistik_m extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
   //Menampilan data
    public function display_record(){
        $query = $this->db->query("select * from statistik");
        $data = $query->result();

        return $data;
    }

    public function tambahdataStatistik($data){
        $query = $this->db->query("INSERT INTO statistik(total_rt,total_rw,total_penduduk,total_penganut,total_tmptibadah,total_pendidikan) VALUES ('".$data['total_rt']."','".$data['total_rw']."','".$data['total_penduduk']."','".$data['total_penganut']."','".$data['total_tmptibadah']."','".$data['total_pendidikan']."')");

        $this->db->set($query);
    }

    public function displayeditStatistik($data){
        $query = $this->db->query( "select * from statistik WHERE id_statistik = '".$data."'");
        $row = $query->row();

        $edit['id_statistik'] = $row->id_statistik;
        $edit['total_rt'] = $row->total_rt;
        $edit['total_rw'] = $row->total_rw;
        $edit['total_penduduk'] = $row->total_penduduk;
        $edit['total_penganut'] = $row->total_penganut;
        $edit['total_tmptibadah'] = $row->total_tmptibadah;
        $edit['total_pendidikan'] = $row->total_pendidikan;

        return $edit;
    }

    public function submiteditStatistik($data){
        $query = $this->db->query( "UPDATE statistik SET total_rt = '".$data['total_rt']."', total_rw = '".$data['total_rw']."', total_penduduk = '".$data['total_penduduk']."', total_penganut = '".$data['total_penganut']."', total_tmptibadah = '".$data['total_tmptibadah']."', total_pendidikan = '".$data['total_pendidikan']."'WHERE id_statistik ='".$data['id_statistik']."' ");

        $this->db->set($query);
    }

    
    public function deleteStatistik($data){
        $query = $this->db->query( "DELETE  from statistik WHERE id_statistik = '".$data."'");
        $this->db->set($query);
    }

}
?>