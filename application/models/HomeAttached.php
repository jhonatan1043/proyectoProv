<?php 

class HomeAttached extends CI_model
{
    function __construct(){
        $this->load->database();
    }

    function loadAtt($idProvider){
      $this->db->where('id_Provider',$idProvider);
      return $this->db->get('providers_attacheds');
    }

    public function loadData($idProvider)
    {
      $this->db->select('provider.*,desc.description,country.country,city.city');
      $this->db->from('providers_classification clasi');
      $this->db->join('providers provider', 'provider.id_provider = clasi.id_provider');
      $this->db->join('decriptions desc', 'clasi.id_classification = desc.id_description');
      $this->db->join('countrys country', 'country.id_country = provider.id_country');
      $this->db->join('citys city', 'city.codigo_city = provider.id_city');

      $this->db->where('provider.id_Provider',$idProvider);
      return  $this->db->get();  
    }

    public function saveAtt($arreglo){
        if($this->db->insert('providers_attacheds',$arreglo)){
          return true;
        }else{
          return $this->db->error();
        }

    }
}