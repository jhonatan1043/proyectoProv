<?php

class AdminUsuario extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    function getUsers()
    {
      return  $this->db->get('users')->result();

    }

    function getUser($idUser)
    {
      $this->db->where('id_User', $idUser);
      return  $this->db->get('users')->result();

    }

}