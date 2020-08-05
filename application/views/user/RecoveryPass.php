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
                            <form action="UserController/recoveryPass" method="post" id="recovery-form">
                                <div class="form-group">
                                    <label for="identification">Nit(sin digito de verificación o cedula sin es persona
                                        natural)</label>
                                    <input type="text" name="identificationPass" id="identificationPass"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo electronico</label>
                                    <input type="email" name="emailPass" id="emailPass" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <?php echo anchor('/','volver',['class'=>'form-control btn btn-warning']); ?>
                                        </div>
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" value="Enviar" class='form-control btn btn-primary'>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div id="msgPass" class="text-center"></div>
                        </div>
                    </div>
                </div> <!-- end panel body -->
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('static/'); ?>js/recovery.js"></script>
