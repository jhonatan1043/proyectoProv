<?php

class UserController extends CI_Controller {

  function __construct(){ 
       parent::__construct();
       $this->load->model('User');
   }

   public function index(){
       $this->load->view('user/login');
   }

   public function create(){
       $data = array(
           'identification' => $this->input->post('identification'),
           'user_name' => $this->input->post('user_name'),
           'email' => $this->input->post('email'),
           'pass' => $this->input->post('pass')
       );
       $this->User->create($data);
   }

   public function update(){
      $data = array(
          'idUser'=>$this->input->put('idUser'),
          'identification'=>$this->input->put('identification'),
          'user_name'=>$this->input->put('user_name'),
          'email'=>$this->input->put('email'),
          'pass'=>$this->input->put('pass')
   ); 
     $this->user->update($data);
  }
  
  public function listUsers(){
      $this->user->listUsers();
  }



}