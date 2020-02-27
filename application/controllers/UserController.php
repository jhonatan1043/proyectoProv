<?php

class UserController extends CI_Controller {

  function __construct(){ 
       parent::__construct();
       $this->load->model('User');
   }

   public function index(){
       $this->load->view('user/login');
   }
   
   public function login()
   {
     $pass = $this->encrypt->encode($this->input->post('password'));

     $data= array(
         'identification'=>$this->input->post('identification'),
         'pass' => $pass
     );

      $result = $this->user->login($data);
   }
}