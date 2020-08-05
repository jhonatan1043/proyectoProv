<?php

 defined('BASEPATH') OR exit('');

class Home extends CI_Model
{
    function __construct(){
        $this->load->database();
    }
    function getCountrys(){

     $countrys = $this->db->get('countrys');
       return $countrys;

    }
    function getDepartaments($idCountry){
       $this->db->where('id_country',$idCountry);  
       $departments = $this->db->get('departments');
       return $departments;
    }
    function getCity($idDepartament){
        $this->db->where('codigo_department',$idDepartament);  
        $citys = $this->db->get('citys');
        return $citys;
    }  
    
    function insert($data)
    {
      $this->db->insert('providers',$data);
      return $this->db->insert_id();
    }

    function update($data,$idprov)
    {
      $this->db->where('id_provider', $idprov);
      if($this->db->update('providers',$data)){
        return true;
      }else{
        return false;
      };
    }


    function loadInfor($identification)
    {
      $this->db->where('nit_business', $identification);
      return $this->db->get('providers');   
    }
}