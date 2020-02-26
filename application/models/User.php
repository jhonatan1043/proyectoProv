<?php
 
 class User extends CI_Model {
    function __construct(){
        $this->load->database();
    }

    public function create($data){
     if(!$this->db->insert('users',$data)) {
         return false;
     }
     return true;
    }
 }