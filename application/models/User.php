<?php
class User extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
    //query login

    public function get_user_data($email, $password){
        $result = "no";
        $query = $this->db->query("select * from user WHERE email = '".$email."' AND password = '".$password."'");

        $row = $query->row();
        
        

        if ($query->num_rows() > 0){
            $result = "ok"; 
            $user['id_user'] = $row->id_user;
            $user['nama'] = $row->nama;
            $user['email'] = $row->email;
            $user['password'] = $row->password;
            $this->session->set_userdata($user);
        }   
        
        return $result;
    }

     public function submit_edit($data){
        $query = $this->db->query( "UPDATE user SET email = '".$data['email']."', nama = '".$data['nama']."', password = '".$data['password']."' Where id_user = '".$data['id_user']."'");

        $this->db->set($query);
    }

    public function display_data($data){
        $query = $this->db->query("select * from user where email = '".$data."'");
        $row = $query->row();

        if($row != null){
        $hasil = $row->password;
        return $hasil;
        }

        
    }
}
?>