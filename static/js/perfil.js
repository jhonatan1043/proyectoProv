$(document).ready(function () {
    try {

        $('#btPerfil').hide();

        cargarUser();

        function habiitarControls() {
            $("#home").prop('disabled', false);
            $("#regPerfil").prop('disabled', false);
        }

        function desHabiitarControls() {
            $("#home").prop('disabled', true);
            $("#regPerfil").prop('disabled', true);
        }

        $("#home").click(function () {
            opcion = confirm('¿ Desea volver ?, recuerde guardar todo los cambios, si tiene algo pendiente');
            if (opcion == true) {
                $('#btPerfil').show();
                $('#contenido').load('main');
            }
        });

        function validation() {
            var resultado = true;
            if ($('#username').val() == '') {
                $("#username").css('background-color', '#F4F1AF');
                resultado = false;
            }
            if ($('#email').val() == '') {
                $("#email").css('background-color', '#F4F1AF');
                resultado = false;
            }
            if ($('#password').val() == '') {
                $("#password").css('background-color', '#F4F1AF');
                resultado = false;
            }

            return resultado;
        }

        $('#register-form').submit(function (e) {
            e.preventDefault();
            if (validation()) {
                userName = $('#username').val();
                email = $('#email').val();
                password = $('#pass').val();
                desHabiitarControls();
                $.post($(this).attr("action"), { userName, email, password }, function () {
                    habiitarControls();
                })
            } else {
                alert('Los campos marcados son obrigatorio');
            }
        });

        function cargarUser() {
            $.post("PerfilController/getUser", function (resp) {
                var data = JSON.parse(resp);
                $('#identUser').val(data.identification);
                $('#username').val(data.user_name);
                $('#email').val(data.email);
                $('#pass').val(data.pass);
            });
        }

    } catch (error) {
        alert(error);
    }
});

