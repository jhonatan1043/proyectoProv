<?php


class HomePageClasif extends CI_model
{
    function __construct(){
        $this->load->database();
    }
    
    public function loadTitle($codigo){
        $this->db->where('id_parameter',$codigo);
        return $this->db->get('decriptions')->result();
    }

    public function loadDescriptions($idDescription)
    {
        $this->db->where('Otro',$idDescription);
        return $this->db->get('decriptions')->result();
    }
     
    public function saveClasi($arreglo){
        if($this->db->insert('providers_classification',$arreglo)){
          return true;
        }else{
          return $this->db->error();
        }
    }

    public function deleteClasif($idProvider)
    {
       $this->db->where('id_provider',$idProvider);
       if($this->db->delete('providers_classification')){
          return true;
       }else{
          return false;
       };
    }

    public function loadCheckMenu($idProvider)
    {
        $this->db->where('id_Provider',$idProvider);
        return $this->db->get('providers_classification');
    }
}
