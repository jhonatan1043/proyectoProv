$(document).ready(function () {
    try {

        var idUser;

        $('#btPerfil').hide();

        listarUsuarios();

        function validationAdmin() {
            var resultado = true;
            if ($('#username').val() == '') {
                $("#username").css('background-color', '#F4F1AF');
                resultado = false;
            }
            if ($('#email').val() == '') {
                $("#email").css('background-color', '#F4F1AF');
                resultado = false;
            }
            if ($('#identUser').val() == '') {
                $("#identUser").css('background-color', '#F4F1AF');
                resultado = false;
            }

            return resultado;
        }

        $('#regAdmin').click(function () {
            if (validationAdmin()) {
                userName = $('#username').val();
                email = $('#email').val();
                identUser = $('#identUser').val();
                $.post('RegistryController/updateAdmin', { idUser, identUser, userName, email }, function () {
                    alert("Cambios registrados con exito");
                    listarUsuarios();
                })
            } else {
                alert('Los campos marcados son obrigatorio');
            }
        });

        $("#btModificar").click(function () {
            var marcado = 0;
            $(":radio[name=rad]").each(function () {
                if (this.checked) {
                    marcado = $(this).val();
                }
            });
            idUser = marcado;
            $.post("AdminUsuarioController/getUser", { idUser }, function (resp) {
                var data = JSON.parse(resp);
                $('#identUser').val(data.identification);
                $('#username').val(data.user_name);
                $('#email').val(data.email);
                $('#rolUser').val(data.idRol == 1 ? "Administraciòn" : "Usuario");
            });
        });

        function listarUsuarios(){
            $.post("AdminUsuarioController/getUsers",
            function (data) {
                $("#tableUser").html(data);
            });
        }


    } catch (error) {
        alert(error);
    }
});