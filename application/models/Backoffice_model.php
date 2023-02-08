<?php

class Backoffice_model extends CI_Model{
    function login($email,$password){
        // $user=array();
        $result=$this->db->select('*')->get('user');
        foreach ($result->result_array() as $user) {
            if ($user['email']==$email && $user['password']==$password) {
                return 'true';
            }
        }
        return 'false';
    }

    function deleteCategorie($id){
        $this->db->delete('categorie',array('idCategorie'=>$id));
    }

    function insertCategorie($nom){
        $this->db->query("insert into categorie values(0,'".$nom."')");
    }
}
    
?>