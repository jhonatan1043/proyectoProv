$(document).ready(function () {
  try {
    var id_provider = localStorage.getItem("idProv");
    var select = [];

    async(cargarRegistro);

    $.post("HomeActividadController/getCategory", function (data) {
        $("#cbCategoria").html(data);
    });

    $("#formActivi").submit(function (e) {
      e.preventDefault();
      var cbtexto = $("#cbBusquedaAct").val();
      var texto = $("#txtBusquedaAct").val();
      var categoria = $("#cbCategoria").val();
      cargarDatosCiiu(cbtexto, texto, categoria);
    });

    $("#saveAct").click(function () {
      $("#saveAct").prop("disabled", true);

      if (select.length >= 2) {
        var jsonString = JSON.stringify(utilidadSoloCod());
        var url =
          id_provider != null
            ? "HomeActividadController/update"
            : "HomeActividadController/save";

        $.post(url, { data: jsonString }, function () {
          $("#contenido").load("subirArchivo");
        });
      } else alert("seleccione minimo 2 items");

      $("#saveAct").prop("disabled", false);

      return false;
    });

    function cargarRegistro() {
      if (id_provider != null) {
        $.post(
          "HomeActividadController/loadCheckMenu",
          {
            id_provider: id_provider,
          },
          function (resp) {
            if (resp != null) {
              data = JSON.parse(resp);
              data.forEach((element) => {
                select.push(element);
              });
              createAlert(select);
            }
          }
        );
      }
    }

    function cargarDatosCiiu(cbtxt = "", txt = "", cbCategoria = "") {
      $.post(
        "HomeActividadController/loadBox",
        { combo: cbtxt, texto: txt, dataSelect: utilidadSoloCod(), cbCategoria },
        function (resp) {
          if (resp != null) {
            var data = JSON.parse(resp);
            var contenido = "";
            var carta;
            data.forEach((element) => {
              carta =
                `<li class='list-group-item'><div class='form-check'><input type='checkbox' value='${element.code}'  class='form-check-input' id='${element.code}'><label class='form-check-label' for=${element.code}'>${element.description}</label></div></li>`;

              contenido = contenido + carta;
            });

            $("#cajasActividad").html(contenido);

            data.forEach((element) => {
              $("#" + element.code).on("click", function () {
                addSelect(element);
                cargarDatosCiiu(
                  $("#cbBusquedaAct").val(),
                  $("#txtBusquedaAct").val(),
                  $("#cbCategoria").val()
                );
              });
            });
          }
        }
      );
    }

    function addSelect(jsonElement) {
      select.push(jsonElement);
      var data = select;
      createAlert(data);
    }

    function createAlert(data) {
      var alerta = "";
      var contenido = "";
      data.forEach((element) => {
        alerta =
          "<div class='col-4'><div class='alert alert-secondary alert-dismissible fade show' role='alert'>" +
          "<strong>" +
          element.description +
          "<button type='button' id='cl" +
          element.code +
          "' class='close' data-dismiss='alert' aria-label='Close'>" +
          "<span aria-hidden='true'>&times;</span>" +
          "</button>" +
          "</div></div>";

        contenido = contenido + alerta;
      });

      $("#notifActividad").html(contenido);

      data.forEach((element) => {
        $("#cl" + element.code).on("click", function () {
          select.splice(select.indexOf(element), 1);
          cargarDatosCiiu(
            $("#cbBusquedaAct").val(),
            $("#txtBusquedaAct").val(),
            $("#cbCategoria").val()
          );
        });
      });
    }

    function utilidadSoloCod() {
      var dataSelect = [];

      if (select.length > 0) {
        select.forEach((element) => {
          dataSelect.push(element.code);
        });
      }

      return dataSelect;
    }
    function async(fn, param = "") {
      setTimeout(function () {
        if (param == "") {
          fn.call(undefined);
        } else {
          fn.call(undefined, param);
        }
      }, 1000);
    }
  } catch (error) {
    alert(error);
  }
});
