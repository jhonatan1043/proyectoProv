<?php 

class HomeActividad extends CI_model
{
    function __construct(){
        $this->load->database();
    }

    public function saveAct($arreglo){
        if($this->db->insert('providers_activitys',$arreglo)){
          return true;
        }else{
          return $this->db->error();
        }
    }

    public function deleteAct($idProvider)
    {
       $this->db->where('id_provider',$idProvider);
       if($this->db->delete('providers_activitys')){
          return true;
       }else{
          return false;
       };
    }

    public function loadCheckMenu($idProvider)
    {
      $this->db->select('category.code,category.description');
      $this->db->from('providers_activitys actv');
      $this->db->join('code_Ciiu category', 'actv.id_activity = category.code');
      $this->db->where('actv.id_Provider',$idProvider);
      return  $this->db->get()->result();  
    }

    public function loadTitle($combo,$texto,$select,$category){
      $campo = '';

      if($combo == 1){
        $campo = 'description';
      } else if($combo == 2){
        $campo = 'code';    
      }

      if($campo != 'code'){
         $this->db->where('category',$category);
      }
      $this->db->where_not_in('code', $select);
      $this->db->like($campo,$texto);
      return $this->db->get('code_Ciiu')->result();
  }
    
}