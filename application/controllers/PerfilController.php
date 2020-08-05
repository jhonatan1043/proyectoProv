<?php

class PerfilController extends CI_Controller {

    function __construct(){ 
        parent:: __construct();
    }

    function index()
    {
        $this->load->view('user/Perfil');
    }

    public function getUser()
    {
       $idUser = $this->session->userdata('idUser');
       $data = $this->AdminUsuario->getUser($idUser);
       echo json_encode($data[0], JSON_FORCE_OBJECT);
    }

}