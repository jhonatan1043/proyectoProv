<?php

class HomePageClasifController extends CI_Controller 
{
    function __construct()
    { 
        parent:: __construct();
        $this->load->model('HomePageClasif');
    }

    public function index(){
       $this->load->view('home/HomePageClasif');
    }

    public function loadTitle($codigo)
    {
        return $this->HomePageClasif->loadTitle($codigo);
    }

    public function loadDescriptions($idDescription)
    {
       return $this->HomePageClasif->loadDescriptions($idDescription);
    }

    public function menuClasificacion()
    {
        $dataTitles = $this->loadTitle(constant('CODIGO_CLASIFICACION'));
        foreach($dataTitles as $dataTitle){
           ?><div class="form-group">
    <ul>
        <?php foreach($this->loadDescriptions($dataTitle->id_description) as $dataDescrip){
                ?><input value="<?php echo $dataDescrip->id_description ?>" type="radio" class="form-control-input"
            id="check" name="check">
        <label>
            <h6><?php echo $dataDescrip->description; ?></h6>
        </label></br>
        <?php   
               } ?>
    </ul>
</div><?php
        }   
    }

    public function loadCheckMenu()
    {
        $id_provider = $this->input->post('id_provider');
        $data = $this->HomePageClasif->loadCheckMenu($id_provider)->result();
        if(!empty($data)){
          echo json_encode($data[0]);
        }
    }
    public function save(){
        $idprov = $this->session->userdata('idProv');
        $data = json_decode(stripslashes($this->input->post("data")));
        foreach($data as $key => $value){
          $arreglo = ["id_provider"=>$idprov, "id_classification" => $value]; 
        }
        $this->HomePageClasif->saveClasi($arreglo); 
    }

    public function update(){
        $idprov = $this->session->userdata('idProv');
        $data = json_decode(stripslashes($this->input->post("data")));
        $this->HomePageClasif->deleteClasif($idprov); 
        foreach($data as $key => $value){
            $arreglo = ["id_provider"=>$idprov, "id_classification" => $value]; 
        }
        $this->HomePageClasif->saveClasi($arreglo); 
    }

}