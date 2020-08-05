window.onbeforeunload = confirmExit;

function confirmExit() {
    return "Ha intentado salir de esta pagina, ¿Seguro que desea salir de esta pagina? ";
}

$(document).ready(function () {
    try {

        $("#formConsultar").submit(function (e) {
            e.preventDefault();
            identification = $('#textbusquedaNit').val();
            $.get($(this).attr("action"), { identification: identification },
                function (resp) {
                    if (resp != '') {
                        data = JSON.parse(resp);
                        var fechaInscripcion = moment(data.modification_date, 'YYYY-MM-DD');
                        var fechaActual = moment(new Date(), 'YYYY-MM-DD');
                        var mes = fechaActual.diff(fechaInscripcion, 'months')
                        var mss;

                        localStorage.setItem('dato', resp);
                        localStorage.setItem('idProv',data.id_provider);


                        if (mes <= 3) {
                            mss = "<div class='text-center'><div class='alert alert-success' role='alert'>" +
                                "la Informaciòn se encuentra actualizada!" +
                                "</div></div>"
                        } else {
                            mss = "<div class='text-center'><div class='alert alert-danger' role='alert'>" +
                                "la Informaciòn se encuentra desactualizada!" +
                                "</div></div>"
                        }

                        $('#registryExist').show();
                        $('#notExistmsg').hide();
                        $('#notExist').hide();

                        $('#registryExist').html(`<div class='card m-2'><div class='card-header'>${mss}</div><div class='card-body'><div  class='table table-responsive'><table class='table-sm table-bordered table-hover'><tbody><tr><td>Inscripciòn</td><td><button id='btnForm' class='btn btn-sm btn-primary'><i class='fa fa-arrow-right' aria-hidden='true'></i></button></td></tr><tr><td>Clasificaciòn Empresa</td><td><button id='btnClasif' class='btn btn-sm btn-primary'><i class='fa fa-arrow-right' aria-hidden='true'></i></button></td></tr><tr><td>Actividad Economica</td><td><button id='btnActivity' class='btn btn-sm btn-primary'><i class='fa fa-arrow-right' aria-hidden='true'></i></button></td></tr><tr><td>Ajuste de documentos</td><td><button id='btnAttached' class='btn btn-sm btn-primary'><i class='fa fa-arrow-right' aria-hidden='true'></i></button></td></tr></tbody></table></div></div></div>`)

                        $("#btnForm").on("click", function () {
                            $('#contenido').load('form');
                        })
                        $("#btnClasif").on("click", function () {
                            $('#contenido').load('clasificacion');
                        })
                        $("#btnActivity").on("click", function () {
                            $('#contenido').load('actividad');
                        })
                        $("#btnAttached").on("click", function () {
                            $('#contenido').load('subirArchivo');
                        })

                    } else { 
                        $('#notExistmsg').show();
                        $('#notExist').show();
                        $('#registryExist').hide();
                        localStorage.clear();
                        $('#notExistmsg').html("<span class=" + "text-danger>" + "El nit o la identificación no se encuentran en nuestro registro.</span>");
                        $('#notExist').html("<input type='button' class='btn btn-primary btn-sm' id='btnRegProv' value='Inscribir' >");
                        $("#btnRegProv").on("click", function () {
                            $('#contenido').load('licencia');
                        })
                    }
                });
        });

        $("#btnRechazarLic").on('click', function () {
            $('#contenido').load('main');
        });

        $("#btnAceptarLic").on('click', function () {
            $('#contenido').load('form');
        });

        $("#btPerfil").click(function () {
            $('#contenido').load('perfil');
        });

        $("#admin").click(function () {
            $('#contenido').load('admin');
        });

    } catch (error) {
        alert(error);
    }
});