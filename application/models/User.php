<?php
 
 class User extends CI_Model 
 {

    function __construct(){
        $this->load->database();
    }
    
    public function login($data)
    {
       $this->db->where('identification',$data['identification']);
       $this->db->where('pass',$data['password']);  
       $user = $this->db->get('users');
       return  $user->result_array();
    }

    function loadUsers($ident,$email){

      $this->db->where('identification',$ident);  
      $this->db->where('email',$email);  

      return $this->db->get('users')->result();
      
    }

    public function updatePass($ident,$pass)
    {
       $this->db->where('identification',$ident);
      if($this->db->update('users',['pass'=>$pass])){
         return true;
      }else{
         return false;
      }
    }
 } 