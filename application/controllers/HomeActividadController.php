<?php

class HomeActividadController extends CI_Controller 
{
    function __construct()
    { 
        parent:: __construct();
        $this->load->model('HomeActividad');
        $this->load->model('HomePageClasif');
    }

    public function loadBox()
    {
        $combo  = $this->input->post('combo');
        $texto  = $this->input->post('texto');
        $select = $this->input->post("dataSelect");
        $categoria = $this->input->post("cbCategoria");

        $cajas = $this->HomeActividad->loadTitle($combo, $texto, $select, $categoria); 
        
        echo json_encode($cajas);
    }

    public function loadCheckMenu()
    {
        $id_provider = $this->input->post('id_provider');
        $data = $this->HomeActividad->loadCheckMenu($id_provider);
        echo json_encode($data);     
    }

    public function save(){

      $idprov = $this->session->userdata('idProv');

      $data = json_decode(stripslashes($this->input->post("data")));

      foreach($data as $key => $value){
        $arreglo = ["id_provider"=>$idprov, "id_activity" => $value]; 
        $this->HomeActividad->saveAct($arreglo); 
      }   
  }

  public function update()
  {
    $idprov = $this->session->userdata('idProv');

    $data = json_decode(stripslashes($this->input->post("data")));

    $this->HomeActividad->deleteAct($idprov); 
    
    foreach($data as $key => $value){
      $arreglo = ["id_provider"=>$idprov, "id_activity" => $value]; 
      $this->HomeActividad->saveAct($arreglo); 
    }   
  }

  function getCategory()
  {

    $categorys = $this->HomePageClasif->loadTitle(constant('CODIGO_CATEGORYS'));;
    
    foreach ($categorys as $category )
    {
     ?>
<option value="<?php echo $category->id_description ?>"><?php echo $category->description ?></option>
<?php
    }
  }

}