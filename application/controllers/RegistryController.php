<?php

class RegistryController extends CI_Controller {

    function __construct(){ 
        parent:: __construct();
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('Registry');
        $this->load->helper('form');
    }

    public function index(){
        $this->load->view('user/Registry');
    }
     
    public function viewConfirmUser()
    {
      $this->load->view('user/ConfirmUsers');
    }
    
    function validation()
    {
    if($_POST) {
     $this->form_validation->set_rules('identification',
                                       'identification',
                                       'required|trim');
     $this->form_validation->set_rules('username',
                                       'user_name',
                                       'required|trim');
     $this->form_validation->set_rules('email',
                                       'email',
                                       'required|trim|valid_email');
     $this->form_validation->set_rules('password',
                                       'pass',
                                       'required'); 

     if($this->form_validation->run()){

        $pass = md5($this->input->post('password'));

        $data = array(
         'identification' => $this->input->post('identification'),
         'user_name' => $this->input->post('username'),
         'email' => $this->input->post('email'),
         'pass' => $pass,  
         'idRol' => constant('ROL_USERS')
        );

        $id = $this->Registry->insert($data);

        if($id > 0)
        {
           $this->session->set_userdata($data);
        } 
    }            
  }
}

    public function update(){ 

       $pass = md5($this->input->post('password'));

       $data = array(
       'id_User'=> $this->session->userdata('idUser'),
       'user_name'=> $this->input->post('userName'),
       'email'=> $this->input->post('email'),
       'pass'=> $pass
    ); 
     $this->Registry->update($data);
   }

   public function updateAdmin(){ 

    $data = array(
    'id_User'=> $this->input->post('idUser'),
    'identification'=> $this->input->post('identUser'),
    'user_name'=> $this->input->post('userName'),
    'email'=> $this->input->post('email'),
 ); 
  $this->Registry->update($data);
}

  }