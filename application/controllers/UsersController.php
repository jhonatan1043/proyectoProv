<?php
define('BASEPATH') OR exit('');

class UserController extends CI_Controller {

   public function __construct(){
       parent::__construct();
       $this->load->model('User');
   }

   public function create(){
       $data = array[
           'identification' => $this->input->post('identification'),
           'user_name' => $this->input->post('user_name'),
           'email' => $this->input->post('email'),
           'pass' => $this->input->post('pass')
       ];
       $this->User->create($data);
   }

}