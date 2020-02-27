<?php

class RegistryController extends CI_Controller {

    function __construct(){ 
        parent::__construct();
        $this->load->model('Registry');
    }

    public function index(){
        $this->load->view('user/Registry');
    }

    public function create(){  
       $pass = $this->encrypt->encode($this->input->post('pass'));
       $data = array(
        'identification' => $this->input->post('identification'),
        'user_name' => $this->input->post('user_name'),
        'email' => $this->input->post('email'),
        'pass' => $pass  
    );
    $this->registry->create($data);
    }

    public function update(){ 
       $pass = $this->encrypt->encode($this->input->put('pass'));
       $data = array(
       'idUser'=>$this->input->put('idUser'),
       'identification'=>$this->input->put('identification'),
       'user_name'=>$this->input->put('user_name'),
       'email'=>$this->input->put('email'),
       'pass'=>$this->input->put('pass')
    ); 
     $this->registry->update($data);
   }

   public function listUsers(){
      $this->registry->listUsers();
  }

  }
