$(document).ready(function () {

  $('#app').load('recovery_change');

  $('#recovery-form').submit(function (e) {
    e.preventDefault();

    $.post($(this).attr("action"), {
      identificationPass: $('#identificationPass').val(),
      emailPass: $('#emailPass').val()
    }, function (resp) {

      var data = JSON.parse(resp);

      if (data.status == 200) {
        alert(data.msg);
        window.location.replace('https://www.inscripciones.ferrincaribe.co/')
      } else {
        $("#msgPass").html("<span class='alert alert-danger text-center' role='alert'>" + data.msg);
      }
    });
  });


})