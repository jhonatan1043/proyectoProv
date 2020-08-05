   <div class="limiter">
        <div class="container-login100">
           <div class="logo">
               <img src="./img/logo-small-1.png">
           </div>
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">

                <form action="UserController/login" method="post" class="login100-form validate-form" id="formLogin">

                    <span class="login100-form-title p-b-33">
                        Inicio de Sesión
                    </span>

                    <div class="wrap-input100">

                        <input type="text" name="identification" id="identification" placeholder="Identificación o Nit"
                            class="input100" required>

                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>
                    <div class="wrap-input100 rs1 validate-input">

                        <input type="password" name="pass" id="pass" placeholder="Contraseña" class="input100" required>

                        <span class="focus-input100-1"></span>
                        <span class="focus-input100-2"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-20">
                        <input type="submit" id="login" value="acceder" class="login100-form-btn">
                    </div>

                    <div class="text-center p-t-45 p-b-4">
                        <span class="txt1">
                            Olvido
                        </span>

                        <a href="#" class="txt2 hov1" id="formContrasena">
                            Contraseña
                        </a>
                    </div>

                    <div class="text-center">
                        <span class="txt1">
                            Crear una cuenta?
                        </span>

                        <a href="#" class="txt2 hov1" id="formRegistry">
                            Registrar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('static/'); ?>js/login.js"></script>