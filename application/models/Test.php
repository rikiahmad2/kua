<?php
class Test extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
   //Menampilan data
    public function display_record(){
        $query = $this->db->query("select * from periode");
        $data = $query->result();

        return $data;
    }

    public function detail_kepala($data){
        $query = $this->db->query("SELECT A.*,B.awal,B.akhir,B.nama FROM detail_periode A INNER JOIN periode B ON A.kode_kepala = B.kode_kepala WHERE A.kode_kepala = '".$data."'");
       $hasil = $query->result();

        return $hasil;
    }
}
?>