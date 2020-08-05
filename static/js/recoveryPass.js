$(document).ready(function () {

    $('#form-changer').submit(function (e) {
        e.preventDefault();

        $.post($(this).attr("action"), {
            identificationPass: $('#identificationPass').val(),
            emailPass: $('#passwordChange').val()
        }, function (resp) {
            var data = JSON.parse(resp);
            if (data.status == 200) {
                alert(data.msg);
                location.href ="https://www.inscripciones.ferrincaribe.co/";
            } else {
                $("#msgRecoveryPass").html("<span class='alert alert-danger text-center' role='alert'>" + data.msg);
            }
        });
    });
})