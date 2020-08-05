$(document).ready(function () {


    $('#form-register').submit(function (e) {
        e.preventDefault();

      $.post($(this).attr("action"), {
            identification: $('#identification').val(),
            username: $('#username').val(),
            email: $('#email').val(),
            password: $('#password').val()
        }, function () {
                $('#app').load('confirm');
        })
    })

})