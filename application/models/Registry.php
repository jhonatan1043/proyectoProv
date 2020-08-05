<?php

 defined('BASEPATH') OR exit('');

class Registry extends CI_Model
{
   function __construct()
   {
     parent::__construct();
     $this->load->database();

   }

   public function insert($data)
   { 
    $this->db->insert('users',$data);
      return $this->db->insert_id();
   }

   public function update($data)
   {
    if(!$this->db->update('users',$data,array('id_User'=>$data['id_User']))) {
           return false;
    }
   return true;
   }

}