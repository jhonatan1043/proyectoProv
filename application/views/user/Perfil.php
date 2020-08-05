 <div class="panel panel-login">
     <div class="panel-heading">
         <h4 class="text-center">Perfil | usuario<h4>
                 <hr>
     </div>
     <div class="panel-body">
         <!-- inicio de panel -->
         <div class="row">
             <div class="col-lg-12">

                 <form action="RegistryController/update" 
                       method="post" id="register-form"
                       role="form">

                 <div class="form-group">
                     <input type="text" 
                            name="identification" 
                            id="identUser" 
                            class='form-control form-control-sm'
                            placeholder='Nit o Identificación'
                            required
                            disabled
                            >
                 </div>
                 <div class="form-group">
                 <input type="text" 
                            name="username" 
                            id="username" 
                            class='form-control form-control-sm'
                            placeholder='Razon Social o Usuario'
                            required
                            >
                 </div>
                 <div class="form-group">
                 <input type="email" 
                            name="email" 
                            id="email" 
                            class='form-control form-control-sm'
                            placeholder='Correo electronico'
                            required
                            >
                 </div>
                 <div class="form-group">
                 <input type="password" 
                            name="pass" 
                            id="pass" 
                            class='form-control form-control-sm'
                            placeholder='Contraseña'
                            required
                            >
                 </div>
                 <div class="form-group">
                     <div class="row">
                         <div class="col-12">
                             <input type="button" value="Inicio" id="home" class="btn-sm btn btn-danger ml-2">
                             <input type="submit" value="Registrar Cambios" id="regPerfil"
                                 class="btn-sm btn btn-primary">
                         </div>
                     </div>
                 </div>
             </div>
            </form>

         </div>
     </div>
 </div> <!-- end panel body -->
 </div>
 <script src="<?php echo base_url('static/'); ?>js/perfil.js"></script>