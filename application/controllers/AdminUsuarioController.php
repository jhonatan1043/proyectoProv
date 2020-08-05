<?php

class AdminUsuarioController extends CI_Controller 
{
    function __construct()
    { 
        parent:: __construct();
        $this->load->model('AdminUsuario');
    }

    public function getUsers()
    {
       $data = $this->AdminUsuario->getUsers();
       ?> 
        <div class="table-resposive">
        <table class="table table-sm table-bordered table-hover">
            <thead>
                <th class="text-center">Seleccione</th>
                <th class="text-center">Identificación</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Email</th>
                <th class="text-center">Rol</th >
            </thead>
            <tbody>
       <?php
       foreach($data as $row)
       { 
        ?>

            <tr>
                 <td class="text-center"> 
                     <input type="radio" name="rad" id="rad" value="<?php echo $row->id_User ?>">
                 </td>
                 <td><?php echo $row->identification ?></td>
                 <td><?php echo $row->user_name ?></td>
                 <td><?php echo $row->email ?></td>
                 <td><?php echo $row->idRol == constant('ROL_ADMIN') ? "Administrador" : "Usuario"; ?></td>
            </tr>

       <?php 
       }
       ?>
        </tbody>
            </table>
        </div>
       <?php 
    }

    public function getUser()
    {
       $idUser = $this->input->post('idUser');
       $data = $this->AdminUsuario->getUser($idUser);
       echo json_encode($data[0], JSON_FORCE_OBJECT);
    }
}