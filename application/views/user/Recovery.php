<?php $this->load->view('home/Header'); ?>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <h4 class="text-center">Recuperar Contraseña<h4>
                    <hr>
                </div>
                <div class="panel-body">
                    <!-- inicio de panel -->
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="UserController/updatePass" method="post" id="form-changer">
                                <div class="form-group">
                                    <label for="identification">Nit(sin digito de verificación o cedula sin es persona
                                        natural)</label>
                                    <input type="text" name="identificationPass" id="identificationPass"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Nueva Contraseña</label>
                                    <input type="password" name="passwordChange" id="passwordChange"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12 col-sm-offset-3">
                                            <input type="submit" value="Cambiar" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12 text-center mt-2" id="msgRecoveryPass"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end panel body -->
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('home/Footer'); ?>
<script src="<?php echo base_url('static/'); ?>js/recovery.js"></script> 
</html>