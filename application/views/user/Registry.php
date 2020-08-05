<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <h4 class="text-center">Regístrate ahora<h4>
                            <hr>
                </div>
                <div class="panel-body">
                    <!-- inicio de panel -->
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="RegistryController/validation" method="post" id="form-register">

                                <div class="form-group">
                                    <label for="identification">Nit(sin digito de verificación o cedula sin es persona
                                        natural)</label>
                                        <input type="text" 
                                               name="identification" 
                                               id="identification" 
                                               class="form-control" 
                                               required>
                                </div>
                                <div class="form-group">
                                    <label for="username">Razón social o nombre sin punto ni comas</label>
                                    <input type="text" 
                                           name="username" 
                                           id="username" 
                                           class="form-control" 
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electronico</label>
                                    <input type="email" 
                                           name="email" 
                                           id="email" 
                                           class="form-control" 
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="password" 
                                           name="password" 
                                           id="password" 
                                           class="form-control" 
                                           required>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <?php echo anchor('/','Cancelar',['class'=>'form-control btn btn-warning']); ?>
                                        </div>
                                        <div class="col-sm-6 col-sm-offset-3">
                                           <input type="submit" 
                                                  value="Crear cuenta" 
                                                  class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end panel body -->
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('static/'); ?>js/registry.js"></script>