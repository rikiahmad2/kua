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

    public function display_record_kepala(){
        $query = $this->db->query("select * from detail_periode");
        $data = $query->result();

        return $data;
    }

    public function tambahdataKepala($data){
        $query = $this->db->query("INSERT INTO detail_periode(kode_kepala,nomor,foto,nip,ttl,kewarganegaraan,agama,email,alamat,jabatan,prestasi,riwayat_pendidikan) VALUES ('".$data['kode_kepala']."','".$data['nomor']."','".$data['foto']."','".$data['nip']."','".$data['ttl']."','".$data['kewarganegaraan']."','".$data['agama']."','".$data['email']."','".$data['alamat']."','".$data['jabatan']."','".$data['prestasi']."','".$data['riwayat_pendidikan']."')");

        $this->db->set($query);
    }

    public function displayeditKepala($data){
        $query = $this->db->query( "select * from detail_periode WHERE kode_detail = '".$data."'");
        $row = $query->row();

        $edit['kode_detail'] = $row->kode_detail;
        $edit['kode_kepala'] = $row->kode_kepala;
        $edit['nomor'] = $row->nomor;
        $edit['foto'] = $row->foto;
        $edit['nip'] = $row->nip;
        $edit['ttl'] = $row->ttl;
        $edit['kewarganegaraan'] = $row->kewarganegaraan;
        $edit['agama'] = $row->agama;
        $edit['email'] = $row->email;
        $edit['alamat'] = $row->alamat;
        $edit['jabatan'] = $row->jabatan;
        $edit['prestasi'] = $row->prestasi;
        $edit['riwayat_pendidikan'] = $row->riwayat_pendidikan;

        return $edit;
    }

    public function submiteditKepala($data){
        $query = $this->db->query( "UPDATE detail_periode SET nomor = '".$data['nomor']."', foto = '".$data['foto']."', nip = '".$data['nip']."', ttl = '".$data['ttl']."', kewarganegaraan = '".$data['kewarganegaraan']."', agama = '".$data['agama']."', email = '".$data['email']."', alamat = '".$data['alamat']."', jabatan = '".$data['jabatan']."', prestasi = '".$data['prestasi']."', riwayat_pendidikan = '".$data['riwayat_pendidikan']."' WHERE kode_detail ='".$data['kode_detail']."'");

        $this->db->set($query);
    }

    public function detail_kepala($data){
        $query = $this->db->query("SELECT A.*,B.awal,B.akhir,B.nama FROM detail_periode A INNER JOIN periode B ON A.kode_kepala = B.kode_kepala WHERE A.kode_kepala = '".$data."'");
       $hasil = $query->result();

        return $hasil;
    }

    public function deleteKepala($data){
        $query = $this->db->query( "DELETE  from detail_periode WHERE kode_detail = '".$data."'");
        $this->db->set($query);
    }

    public function deletePeriode($data){
        $query = $this->db->query( "DELETE  from periode WHERE kode_kepala = '".$data."'");
        $this->db->set($query);
    }

    public function tambahdataPeriode($data){
        $query = $this->db->query("INSERT INTO periode(nomor,nama,awal,akhir) VALUES ('".$data['nomor']."','".$data['nama']."','".$data['awal']."','".$data['akhir']."')");

        $this->db->set($query);
    }

    public function displayeditPeriode($data){
        $query = $this->db->query( "select * from periode WHERE kode_kepala = '".$data."'");
        $row = $query->row();

        $edit['kode_kepala'] = $row->kode_kepala;
        $edit['nomor'] = $row->nomor;
        $edit['nama'] = $row->nama;
        $edit['awal'] = $row->awal;
        $edit['akhir'] = $row->akhir;

        return $edit;
    }

    public function submiteditPeriode($data){
        $query = $this->db->query( "UPDATE periode SET nomor = '".$data['nomor']."', nama = '".$data['nama']."', awal = '".$data['awal']."', akhir = '".$data['akhir']."' WHERE kode_kepala ='".$data['kode_kepala']."'");

        $this->db->set($query);
    }
}
?>