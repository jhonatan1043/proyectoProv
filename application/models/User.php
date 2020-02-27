<?php
 
 class User extends CI_Model 
 {
    function __construct(){
        $this->load->database();
    }
    
    public function login($data)
    {
       $query = $this->db->get('users',
                           array('identification'=>$data['identification']))
                           
       $row = $query->row();

       if($row->pass === $data['pass'])
       {
         $this->session->set_userdata($row->idUser);
         return true;  
       }
       else
       {
         return false;
       }

    }
 }