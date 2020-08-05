<?php

class HomeController extends CI_controller
{
  // --------------------------------------
   function __construct(){
       parent:: __construct();
       $this->load->model('Home');
   }
// --------------------------------------
  public function index()
    {
       if($this->session->userdata('status'))
       {
         $this->constructView();
       } 
       else 
       {
         return redirect('/');
       }
    }
// --------------------------------------
  public function main(){
    $rol  = $this->session->userdata('rol');

    if ($rol != constant('ROL_ADMIN')){
       $this->load->view('main');
    } else {
      $this->load->view('user/AdminUsuario');
    }

  }
//--------------------------------------
  public function licencia(){
      $this->load->view('home/Licencia'); 
   }
//---------------------------------------
 public function form(){
    $this->load->view('home/Home');
}
//---------------------------------------
 public function clasificacion(){
    $this->load->view('home/HomePageClasif');
}
//--------------------------------------
public function actividad(){
  $this->load->view('home/HomeActividad');
}
//--------------------------------------
public function subirArchivo(){
  $this->load->view('home/HomeAttached');
}
//--------------------------------------
public function AdminUsers(){
  $this->load->view('user/AdminUsuario');
}
//--------------------------------------
public function perfil(){
  $this->load->view('user/Perfil');
}
//--------------------------------------
   public function constructView()
    {
      $this->load->view('home/Sider');
      $this->main();
    }
    // --------------------------------------
    function getCountrys()
    {
      $countrys = $this->Home->getCountrys()->result();
      foreach ($countrys as $country)
      {
       ?> <option value="0">Seleccionar</option>
<option value="<?php echo $country->id_country ?>"><?php echo $country->country ?></option>
<?php
      }
    }
    // --------------------------------------
    function getDepartments()
    {
      $idCountry = $this->input->post('id_country');
      $departaments = $this->Home->getDepartaments($idCountry)->result();
      
      foreach ($departaments as $departament)
       {
        ?>
<option value="<?php echo $departament->codigo_department ?>"><?php echo $departament->department ?></option>
<?php
       }
    }
    // --------------------------------------
    function getCitys()
    {
      $department = $this->input->post('id_department');
      $citys = $this->Home->getCity($department)->result();
      
      foreach ($citys as $city )
      {
       ?>
<option value="<?php echo $city->codigo_city ?>"><?php echo $city->city ?></option>
<?php
      }
    }
   // --------------------------------------
    public function insert() 
    {
      
     $idUser = $this->session->userdata('idUser');

     $data = [ 'nit_business' =>$this->session->userdata('nit_business'),
               'business_name' =>$this->input->post('razon_social'),
               'legal_representative' =>$this->input->post('representante_legal'),
               'manager' =>$this->input->post('gerente'),
               'id_country' =>$this->input->post('cbCountry'),
               'id_department' =>$this->input->post('cbDepart'),
               'id_city' =>$this->input->post('cbCity'),
               'web_page' =>$this->input->post('pagina_web'),
               'address' =>$this->input->post('dirrecion'),
               'phone' =>$this->input->post('telefono'),
               'mobile' =>$this->input->post('celular'),
               'email' =>$this->input->post('email'),
               'official' =>$this->input->post('funcionario'),
               'email_Official' =>$this->input->post('email_funcionario'),
               'contact_name' =>$this->input->post('nombre_contacto'),
               'contact_movil' =>$this->input->post('celular_contacto'),
               'contact_email	' =>$this->input->post('email_contacto'),
               'contact_report_name' =>$this->input->post('nombre_reporta'),
               'contact_report_mobil' =>$this->input->post('celular_reporta'),
               'contact_report_email' =>$this->input->post('email_reporta'),     
               'email_contacto_factura' =>$this->input->post('emailContactoFactura'),
               'id_grancontribuyente' =>$this->input->post('cbGranContribuyente'),
               'resolucion_grancontribuyente' =>$this->input->post('resolGranContribuyente'),
               'id_auto_retenedor' =>$this->input->post('cbAutoRetenedor'),
               'resolucion_auto_retenedor' =>$this->input->post('resolAutoRetenedor'),
               'id_responsable_iva' =>$this->input->post('cbResponsableIva'),
               'id_regimen_simple' =>$this->input->post('cbRegimenSimple'),
               'id_practica_ica' =>$this->input->post('cbPracticaIca'),
               'codigo_actividad' =>$this->input->post('codigoActividad'),
               'tarifa' =>$this->input->post('tarifa'),
               'entidad_bancaria' =>$this->input->post('entidadBancaria'),
               'cuenta_bancaria	' =>$this->input->post('cuentaBancario'),
               'tipo_cuenta' =>$this->input->post('cbTipoCuenta'),
               'nit_beneficiario' =>$this->input->post('nitBeneficiario'),
               'nombre_cuenta' =>$this->input->post('nombreCuenta'),
               'modification_date' =>$this->input->post('modification_date'),
               'id_user'=>$idUser
              ];
                
              $id = $this->Home->insert($data);
              $this->session->set_userdata('idProv',$id);      
    }
     
    public function update() 
    {   
     $idUser = $this->session->userdata('idUser');

     $data = [ 'nit_business' =>$this->session->userdata('nit_business'),
               'business_name' =>$this->input->post('razon_social'),
               'legal_representative' =>$this->input->post('representante_legal'),
               'manager' =>$this->input->post('gerente'),
               'id_country' =>$this->input->post('cbCountry'),
               'id_department' =>$this->input->post('cbDepart'),
               'id_city' =>$this->input->post('cbCity'),
               'web_page' =>$this->input->post('pagina_web'),
               'address' =>$this->input->post('dirrecion'),
               'phone' =>$this->input->post('telefono'),
               'mobile' =>$this->input->post('celular'),
               'email' =>$this->input->post('email'),
               'official' =>$this->input->post('funcionario'),
               'email_Official' =>$this->input->post('email_funcionario'),
               'contact_name' =>$this->input->post('nombre_contacto'),
               'contact_movil' =>$this->input->post('celular_contacto'),
               'contact_email	' =>$this->input->post('email_contacto'),
               'contact_report_name' =>$this->input->post('nombre_reporta'),
               'contact_report_mobil' =>$this->input->post('celular_reporta'),
               'contact_report_email' =>$this->input->post('email_reporta'),     
               'email_contacto_factura' =>$this->input->post('emailContactoFactura'),
               'id_grancontribuyente' =>$this->input->post('cbGranContribuyente'),
               'resolucion_grancontribuyente' =>$this->input->post('resolGranContribuyente'),
               'id_auto_retenedor' =>$this->input->post('cbAutoRetenedor'),
               'resolucion_auto_retenedor' =>$this->input->post('resolAutoRetenedor'),
               'id_responsable_iva' =>$this->input->post('cbResponsableIva'),
               'id_regimen_simple' =>$this->input->post('cbRegimenSimple'),
               'id_practica_ica' =>$this->input->post('cbPracticaIca'),
               'codigo_actividad' =>$this->input->post('codigoActividad'),
               'tarifa' =>$this->input->post('tarifa'),
               'entidad_bancaria' =>$this->input->post('entidadBancaria'),
               'cuenta_bancaria	' =>$this->input->post('cuentaBancario'),
               'tipo_cuenta' =>$this->input->post('cbTipoCuenta'),
               'nit_beneficiario' =>$this->input->post('nitBeneficiario'),
               'nombre_cuenta' =>$this->input->post('nombreCuenta'),
               'modification_date' =>$this->input->post('modification_date'),
              ];   
              $this->Home->update($data,$this->input->post('id_provider'));   
                              
    }


    // --------------------------------------
    public function loadInforProviders()
    {
        $identification = $this->input->get('identification'); 
        $this->session->set_userdata('nit_business',$identification);
        $data = $this->Home->loadInfor($identification)->result_array(); 
        if(!empty($data)){
           $resp = json_encode($data[0], JSON_FORCE_OBJECT);;
           echo $resp;
           $this->session->set_userdata('idProv',$data[0]['id_provider']);
           $this->session->userdata('idProv');
        }  
     }
    // -------------------------------------- 
}