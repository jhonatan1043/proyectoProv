$(document).ready(function () {

    $('#formLogin').submit(function (e) {
        e.preventDefault();

        $.post($(this).attr("action"), {
            identification: $('#identification').val(),
            pass: $('#pass').val()
        },
            function (resp) {
                if (resp == true) {
                    $('#app').load('home');
                } else {
                    alert('credenciales no validas');
                }

            })
    });

    $('#formContrasena').click(function () {
        $('#app').load('recovery');
    })

    $('#formRegistry').click(function () {
        $('#app').load('registry');
    })

})