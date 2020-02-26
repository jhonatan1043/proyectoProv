<?php
 
 class User extends CI_Model 
 {
    function __construct(){
        $this->load->database();
    }

    public function create($data)
    {
     if(!$this->db->insert('users',$data)) {
         return false;
     }
     return true;
    }

    public function update($data)
    {
     if(!$this->db->update('users',$data,array('idUser'=>$data['idUser']))) {
            return false;
     }
    return true;
    }

    public function listUsers()
    {
        $query = $this->db->get('users', 10);
        return $query->result();
    }

    public function login($data)
    {
       $query = $this->db->get('users',
                           array('identification'=>$data['identification'],
                           'pass'=>$data['password']))
    }
 }