<?php

class HomeAttachedController extends CI_Controller 
{
    function __construct()
    { 
        parent:: __construct();
        $this->load->model('HomeAttached');
        $this->load->model('HomeActividad');
    }

    function loadAtt(){
      $id_provider = $this->input->post('id_provider');
      $data = $this->HomeAttached->loadAtt($id_provider)->result();
      if(!empty($data)){
        echo json_encode($data);
      }
    }

    function loadData(){
      $id_provider = $this->input->post('id_provider');
      $data = $this->HomeAttached->loadData($id_provider)->result();
      echo json_encode($data[0] , JSON_FORCE_OBJECT);
    }

    function loadDataCiiu(){
      $id_provider = $this->input->post('id_provider');
      $data = $this->HomeActividad->loadCheckMenu($id_provider);
      echo json_encode($data);
    }


    function uploadFtp(){

            try {
                  $idprov = $this->session->userdata('idProv');
                  $carpeta = './uploads/' . $idprov;

                  if (!file_exists($carpeta)) {
                       mkdir($carpeta, 0777, true);
                   }

                 $config['upload_path'] = './uploads/'.$idprov;
                 $config['allowed_types'] = 'pdf|jpg';

                 //cargamos la libreria upload
                 $this->load->library('upload', $config);

                 if($this->upload->do_upload('file')) {
                    
                  $this->save($_FILES["file"]["name"],$_POST['order']);

                 } else {
                     echo 'error';
                 }

          } catch (\Throwable $th) {
            print_r($th);
          }
    }

     function save($file,$order){
      $idprov = $this->session->userdata('idProv');
        $arreglo = ["id_provider"=>$idprov,"order_position"=>$order,"attached" => $file]; 
        $this->HomeAttached->saveAtt($arreglo);      
     }
     
}