<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/'); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('bootstrap/'); ?>css/styleRegistry.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resource_login/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('resource_login/'); ?>css/main.css">
    <title>Registro</title>
</head>
<body>
<div class="limiter">
<div class="container-login100">
    	<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<div class="panel panel-login">
					<div class="panel-heading">
                        <h4 class="text-center">Regístrate ahora<h4>
					    <hr>
					</div>
					<div class="panel-body"> <!-- inicio de panel -->
					<div class="row">
					<div class="col-lg-12">
					  <form id="register-form" action="" method="post" role="form">
					  <div class="form-group">
									<input type="text" 
										   name="identification" 
										   id="identification" 
										   tabindex="1" 
										   class="form-control" 
										   placeholder="identificacion o Nit" value="">
									</div>
						    <div class="form-group">
									<input type="text" 
										   name="username" 
										   id="username" 
										   tabindex="2" 
										   class="form-control" 
										   placeholder="Usuario" value="">
									</div>
									<div class="form-group">
										<input type="email" 
											   name="email" 
											   id="email" 
											   tabindex="3" 
											   class="form-control" 
											   placeholder="Correo electronico" 
											   value="">
									</div>
									<div class="form-group">
										<input type="password" 
											   name="password" 
											   id="password" 
											   tabindex="4" 
											   class="form-control" 
											   placeholder="Contraseña">
									</div>
									<div class="form-group">
										<input type="password" 
											   name="confirm-password" 
											   id="confirm-password" 
											   tabindex="5" 
											   class="form-control" 
											   placeholder="Confirmar contraseña">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit"
													   name="register-submit" 
													   id="register-submit" 
													   tabindex="6" 
													   class="form-control btn btn-primary" 
													   value="Crear cuenta">
											</div>
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit"
													   name="cancelar-submit" 
													   tabindex="7" 
													   class="form-control btn btn-warning" 
													   value="Cancelar">
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
</body>
 <script src="<?php echo base_url('bootstrap/'); ?>js/bootstrap.min.js"></script>
 <script src="<?php echo base_url('bootstrap/'); ?>js/jquery-3.4.1.min.js"></script>
</html>