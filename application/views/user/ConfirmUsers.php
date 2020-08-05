<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <div class="panel panel-login">
                    <div class="panel-heading text-center">
                        <span class="text-center text-success">FerrinCaribe | Registro Exitoso<span>
                     <hr>
                    </div>
                    <div class="panel-body">
                        <!-- inicio de panel -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <h4><?php echo $this->session->userdata('identification'); ?></h4>
                                </div>
                                <div class="form-group">
                                    <label>Razón social o Nombre</label>
                                    <h4><?php echo $this->session->userdata('user_name'); ?></h4>
                                </div>
                                <div class="form-group">
                                    <label>Correo electronico</label>
                                    <h4><?php echo $this->session->userdata('email'); ?></h4>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <?php echo anchor('UserController/closedSession','Iniciar Sesión',['class'=>'form-control btn btn-success']); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end panel body -->
                </div>
            </div>
        </div>
    </div>
