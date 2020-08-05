<?php

class UserController extends CI_Controller {

  function __construct(){ 
       parent::__construct();
       $this->load->model('User');
       $this->load->helper('form');
   }

   public function index(){
        $this->load->view('user/login');
   }

   public function recovery(){
    $this->load->view('user/RecoveryPass');
   }

   public function recoveryChange(){
    $this->load->view('user/Recovery');
   }

   public function login(){

       $passSinMd5 = $this->input->post('pass');

       $pass = md5($this->input->post('pass'));
 
       $data = array(
           'identification' => $this->input->post('identification'),
           'password' => $pass
       );

      if($user = $this->User->login($data))
       {
           $login =array('idUser' =>$user[0]['id_User'],
                         'identification' =>$user[0]['identification'],
                         'name'  => $user[0]['user_name'],
                         'email' =>$user[0]['email'],
                         'rol'=>$user[0]['idRol'],
                         'pass' => $passSinMd5,
                         'status' => true);   
           $this->session->set_userdata($login);
           echo true;
       } 
       else 
       {
        echo false;
       }
   }

   public function consultUsers($ident, $email)
   {
     $data =  $this->User->loadUsers($ident, $email);
     if(!empty($data)){
         return true;
     }else{
         return false; 
     }
   }

   public function recoveryPass()
   {    
      $ident = $this->input->post("identificationPass"); 
      $email = $this->input->post("emailPass");
      $msg = [];
    if($this->consultUsers($ident, $email) == true){
       $this->load->library('email'); 

       $config['mailtype'] ="html";
        $this->email->initialize($config);
        $this->email->from('no-reply@ferrincaribe.co', 'Ferrincaribe');   
        $this->email->to($email , $ident);   
        $this->email->subject("Recuperación de contraseña Ferrincaribe");   
        $this->email->message(
                 '<p>correo enviado por <strong>ferrincaribe</strong> para la recuperación de su contraseña</p>
                  <a href="'.base_url().'recoverychange">link para recuperar tu contraseña </a>'
        );   
        if($this->email->send()){
          $msg =['msg'    => 'Revise su correo para recuperar su contraseña',
                 'status' => constant('SUCCESS')];
        }
        else
        {
          $msg =['msg'    => 'Problemas al intente luego,',
                 'status' => constant('ERROR')];
        }
    }
    else
    {
      $msg =['msg'    => 'los datos no son validos',
             'status' => constant('ERROR')];
    }

     echo json_encode($msg, JSON_FORCE_OBJECT);

   }

   public function updatePass()
   {
     $ident = $this->input->post("identificationPass"); 
     $pass = md5($this->input->post('passwordChange'));

     $msg = [];

     if($this->User->updatePass($ident ,$pass)){
         $msg =['msg'    => 'Ha cambiada la contraseña con exito',
                'status' => constant('SUCCESS')];
     }else{
         $msg =['msg'    => 'Datos no son validos',
                'status' => constant('ERROR')];
     };
      echo json_encode($msg, JSON_FORCE_OBJECT);
   }

   public function closedSession(){
      $this->session->sess_destroy();
       return redirect('/');
    }
}