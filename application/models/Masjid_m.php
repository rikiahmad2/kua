<?php
class Masjid_m extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
   //Menampilan data
    public function display_record(){
        $query = $this->db->query("select * from masjid");
        $data = $query->result();

        return $data;
    }

    public function tambahdataMasjid($data){
        $query = $this->db->query("INSERT INTO masjid(desa,masjid,langgar,mushola,gereja,vihara,pura) VALUES ('".$data['desa']."','".$data['masjid']."','".$data['langgar']."','".$data['mushola']."','".$data['gereja']."','".$data['vihara']."','".$data['pura']."')");

        $this->db->set($query);
    }

    public function displayeditMasjid($data){
        $query = $this->db->query( "select * from masjid WHERE id_masjid = '".$data."'");
        $row = $query->row();

        $edit['id_masjid'] = $row->id_masjid;
        $edit['desa'] = $row->desa;
        $edit['masjid'] = $row->masjid;
        $edit['langgar'] = $row->langgar;
        $edit['mushola'] = $row->mushola;
        $edit['gereja'] = $row->gereja;
        $edit['vihara'] = $row->vihara;
        $edit['pura'] = $row->pura;

        return $edit;
    }

    public function submiteditMasjid($data){
        $query = $this->db->query( "UPDATE masjid SET desa = '".$data['desa']."', masjid = '".$data['masjid']."', langgar = '".$data['langgar']."', mushola = '".$data['mushola']."', gereja = '".$data['gereja']."', vihara = '".$data['vihara']."', pura = '".$data['pura']."' WHERE id_masjid = '".$data['id_masjid']."'");

        $this->db->set($query);
    }

    
    public function deleteMasjid($data){
        $query = $this->db->query( "DELETE  from masjid WHERE id_masjid = '".$data."'");
        $this->db->set($query);
    }

}
?>