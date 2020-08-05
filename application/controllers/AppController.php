<?php

class AppController extends CI_controller
{
    
  public function index()
  {
      $this->load->view('app');
  }

}