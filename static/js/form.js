$(document).ready(function () {
    try {

        var data = JSON.parse(localStorage.getItem('dato'));
        var fechaActual = moment().format('YYYY-MM-DD');
        var id_provider = localStorage.getItem('idProv');

        async(desactivarControles);

        $("#cbGranContribuyente").change(function () {
            if ($("#cbGranContribuyente").val() == 1) {
                $("#resolGranContribuyente").prop('disabled', false);
            } else {
                $("#resolGranContribuyente").prop('disabled', true);
                $("#resolGranContribuyente").val("");
            }
        })

        $("#cbAutoRetenedor").change(function () {
            if ($("#cbAutoRetenedor").val() == 1) {
                $("#resolAutoRetenedor").prop('disabled', false);
            } else {
                $("#resolAutoRetenedor").prop('disabled', true);
                $("#resolAutoRetenedor").val("");
            }
        })

        function desactivarControles(){
            $("#resolGranContribuyente").prop('disabled', true);
            $("#resolAutoRetenedor").prop('disabled', true);
        }

        function habilitarButton() {
            $("#enviarDatosBasico").prop('disabled', false);
            $("#home").prop('disabled', false);
        }

        function desHabilitarButton() {
            $("#enviarDatosBasico").prop('disabled', true);
            $("#home").prop('disabled', true);
        }

        function validationCampo() {
            var respuesta = true;
            if ($("#nit_empresa").val() == "") {
                $("#nit_empresa").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#razon_social").val() == "") {
                $("#razon_social").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#representante_legal").val() == "") {
                $("#representante_legal").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#gerente").val() == "") {
                $("#gerente").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#cbCountry").val() == 0) {
                $("#cbCountry").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#cbDepart").val() == 0) {
                $("#cbDepart").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#cbCity").val() == 0) {
                $("#cbCity").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#dirrecion").val() == "") {
                $("#dirrecion").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#telefono").val() == "") {
                $("#telefono").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#celular").val() == "") {
                $("#celular").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#email").val() == "") {
                $("#email").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#emailContactoFactura").val() == "") {
                $("#emailContactoFactura").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#cbGranContribuyente").val() == 0) {
                $("#cbGranContribuyente").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#cbGranContribuyente").val() == 1 && $("#resolGranContribuyente").val() == "") {
                $("#resolGranContribuyente").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#cbAutoRetenedor").val() == 0) {
                $("#cbAutoRetenedor").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#cbAutoRetenedor").val() == 1 && $("#resolAutoRetenedor").val() == "") {
                $("#resolAutoRetenedor").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#cbResponsableIva").val() == 0) {
                $("#cbResponsableIva").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#cbRegimenSimple").val() == 0) {
                $("#cbRegimenSimple").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#cbPracticaIca").val() == 0) {
                $("#cbPracticaIca").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#codigoActividad").val() == "") {
                $("#codigoActividad").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#tarifa").val() == "") {
                $("#tarifa").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#entidadBancaria").val() == "") {
                $("#entidadBancaria").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#cuentaBancario").val() == "") {
                $("#cuentaBancario").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#cbTipoCuenta").val() == 0) {
                $("#cbTipoCuenta").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#nitBeneficiario").val() == "") {
                $("#nitBeneficiario").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#nombreCuenta").val() == "") {
                $("#nombreCuenta").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#funcionario").val() == "") {
                $("#funcionario").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#email_funcionario").val() == "") {
                $("#email_funcionario").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#nombre_contacto").val() == "") {
                $("#nombre_contacto").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#celular_contacto").val() == "") {
                $("#celular_contacto").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#email_contacto").val() == "") {
                $("#email_contacto").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#nombre_reporta").val() == "") {
                $("#nombre_reporta").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#celular_reporta").val() == "") {
                $("#celular_reporta").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            if ($("#email_reporta").val() == "") {
                $("#email_reporta").css('background-color', '#F4F1AF');
                respuesta = false;
            }
            return respuesta;
        }

        $("#home").click(function () {
            opcion = confirm('¿ Desea volver ?, recuerde guardar todo los cambios, si tiene algo pendiente');
            if (opcion == true) {
                $('#contenido').load('main');
            }
        });

        cargarComboPais();

        $("#cbCountry").change(function () {
            cargarComboDepartamento();
        });


        $("#cbDepart").change(function () {
            cargarComboCiudad();
        });

        $("#enviarDatosBasico").click(function () {
            if (validationCampo()) {

                desHabilitarButton()

                try {
                    if (data == null) {
                        registryData("HomeController/insert");
                    } else {
                        registryData("HomeController/update", id_provider);
                    }
                } catch (error) {
                    console.log('error en ' + error)
                    habilitarButton()
                }
            } else {
                alert('Los campos marcados son obrigatorio');
                habilitarButton()
            }
        });

        function cargarComboPais() {
            $.post("HomeController/getCountrys", function (data) {
                $("#cbCountry").html(data);
            });
        }

        function cargarComboDepartamento(pmIdCountry = '') {
            $('#cbCountry option:selected').each(function () {

                if (pmIdCountry != '') {
                    idCountry = pmIdCountry
                } else {
                    idCountry = $("#cbCountry").val();
                }

                $.post("HomeController/getDepartments", {
                    id_country: idCountry
                }, function (data) {
                    $("#cbDepart").html(data);
                });
            });
        }

        function cargarComboCiudad(pmIdDepartamento = '') {
            $('#cbDepart option:selected').each(function () {

                if (pmIdDepartamento != '') {
                    iddepart = pmIdDepartamento
                } else {
                    iddepart = $("#cbDepart").val();
                }

                $.post("HomeController/getCitys", {
                    id_department: iddepart
                }, function (data) {
                    $("#cbCity").html(data);
                });
            });
        }

        function registryData(url, id_provider = '') {
            $.post(url, {
                nit_empresa: $("#nit_empresa").val(),
                razon_social: $("#razon_social").val(),
                representante_legal: $("#representante_legal").val(),
                gerente: $("#gerente").val(),
                cbCountry: $("#cbCountry").val(),
                cbDepart: $("#cbDepart").val(),
                cbCity: $("#cbCity").val(),
                pagina_web: $("#pagina_web").val(),
                dirrecion: $("#dirrecion").val(),
                telefono: $("#telefono").val(),
                celular: $("#celular").val(),
                email: $("#email").val(),
                funcionario: $("#funcionario").val(),
                email_funcionario: $("#email_funcionario").val(),
                nombre_contacto: $("#nombre_contacto").val(),
                celular_contacto: $("#celular_contacto").val(),
                email_contacto: $("#email_contacto").val(),
                nombre_reporta: $("#nombre_reporta").val(),
                celular_reporta: $("#celular_reporta").val(),
                email_reporta: $("#email_reporta").val(),
                emailContactoFactura: $("#emailContactoFactura").val(),
                cbGranContribuyente: $("#cbGranContribuyente").val(),
                resolGranContribuyente: $("#resolGranContribuyente").val(),
                cbAutoRetenedor: $("#cbAutoRetenedor").val(),
                resolAutoRetenedor: $("#resolAutoRetenedor").val(),
                cbResponsableIva: $("#cbResponsableIva").val(),
                cbRegimenSimple: $("#cbRegimenSimple").val(),
                cbPracticaIca: $("#cbPracticaIca").val(),
                codigoActividad: $("#codigoActividad").val(),
                tarifa: $("#tarifa").val(),
                entidadBancaria: $("#entidadBancaria").val(),
                cuentaBancario: $("#cuentaBancario").val(),
                cbTipoCuenta: $("#cbTipoCuenta").val(),
                nitBeneficiario: $("#nitBeneficiario").val(),
                nombreCuenta: $("#nombreCuenta").val(),
                modification_date: fechaActual,
                id_provider: id_provider
            },
                function () {
                    $('#contenido').load('clasificacion');
                });
        }

        async(cargarDatos);

        function cargarDatos() {
            if (data != null) {
                $("#razon_social").val(data.business_name);
                $("#representante_legal").val(data.legal_representative);
                $("#gerente").val(data.manager);
                $("#cbCountry").val(data.id_country);
                async(cargarComboDepartamento, data.id_country);
                async(cargarComboCiudad, data.id_department);
                $("#pagina_web").val(data.web_page);
                $("#dirrecion").val(data.address);
                $("#telefono").val(data.phone);
                $("#celular").val(data.mobile);
                $("#email").val(data.email);
                $("#funcionario").val(data.official);
                $("#email_funcionario").val(data.email_Official);
                $("#nombre_contacto").val(data.contact_name);
                $("#celular_contacto").val(data.contact_movil);
                $("#email_contacto").val(data.contact_email);
                $("#nombre_reporta").val(data.contact_report_name);
                $("#celular_reporta").val(data.contact_report_mobil);
                $("#email_reporta").val(data.contact_report_email);
                $("#emailContactoFactura").val(data.email_contacto_factura);
                $("#cbGranContribuyente").val(data.id_grancontribuyente);
                $("#resolGranContribuyente").val(data.resolucion_grancontribuyente);
                $("#cbAutoRetenedor").val(data.id_auto_retenedor);
                $("#resolAutoRetenedor").val(data.resolucion_auto_retenedor);
                $("#cbResponsableIva").val(data.id_responsable_iva);
                $("#cbRegimenSimple").val(data.id_regimen_simple);
                $("#cbPracticaIca").val(data.id_practica_ica);
                $("#codigoActividad").val(data.codigo_actividad);
                $("#tarifa").val(data.tarifa);
                $("#entidadBancaria").val(data.entidad_bancaria);
                $("#cuentaBancario").val(data.cuenta_bancaria);
                $("#cbTipoCuenta").val(data.tipo_cuenta);
                $("#nitBeneficiario").val(data.nit_beneficiario);
                $("#nombreCuenta").val(data.nombre_cuenta);
                async(cargarOtros);
            }
        }

        function cargarOtros() {
            if (data != null) {
                $("#cbDepart").val(data.id_department);
                $("#cbCity").val(data.id_city,);
            }
        }

        function async(fn, param = '') {
            setTimeout(function () {
                if (param == '') {
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