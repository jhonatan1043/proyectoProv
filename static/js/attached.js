$(document).ready(function () {
    try {

        const MAXIMO_TAMANIO_BYTES = 2000000;
        var fileComplet = "https://www.inscripciones.ferrincaribe.co/uploads/";
        var raiz = "https://www.inscripciones.ferrincaribe.co/";
        var id_provider = localStorage.getItem('idProv');
        var dataProv = []
        var dataciiu = [];

        loadAtt();
        elemenHide();
        consulDatos();
        consulDatosCiiu();

        $('#formSubirClausulaComercio').submit(function (e) {
            e.preventDefault();
            var formData = new FormData($("#formSubirClausulaComercio")[0]);
            var fileSize = $('#fileClauCom')[0].files[0].size;

            if (fileSize > MAXIMO_TAMANIO_BYTES) {
                alert("valor no permitido en camara de comercio, debe ser inferior a 2 MB")
            } else {
                $('#fileClauCom').prop('disabled', true)
                $('#subirClauCom').prop('disabled', true)
                upload(formData, $('#formSubirClausulaComercio'), $("#msgClauCom"), 1);
            }
        });

        $('#formSubirCedulaRepresentantelegal').submit(function (e) {
            e.preventDefault();
            var formData = new FormData($("#formSubirCedulaRepresentantelegal")[0]);
            var fileSize = $('#fileCedulaRep')[0].files[0].size;

            if (fileSize > MAXIMO_TAMANIO_BYTES) {
                alert("valor no permitido en cedula representante legal, debe ser inferior a 2 MB")
            } else {
                $('#fileCedulaRep').prop('disabled', true)
                $('#subirCedulaRep').prop('disabled', true)
                upload(formData, $('#formSubirCedulaRepresentantelegal'), $("#msgCedulaRep"), 2);
                $('#verCedulaRep').prop('disabled', false)
            }
        });
        $('#formSubirCertificadoBancario').submit(function (e) {
            e.preventDefault();
            var formData = new FormData($("#formSubirCertificadoBancario")[0]);
            var fileSize = $('#fileCertBan')[0].files[0].size;

            if (fileSize > MAXIMO_TAMANIO_BYTES) {
                alert("valor no permitido en certificado bancario, debe ser inferior a 2 MB")
            } else {
                $('#fileCertBan').prop('disabled', true)
                $('#subirCertBan').prop('disabled', true)
                upload(formData, $('#formSubirCertificadoBancario'), $("#msgCertBan"), 3);
                $('#verCertBan').prop('disabled', false)
            }
        });
        $('#formSubirCertificadoExperiencia').submit(function (e) {
            e.preventDefault();
            var formData = new FormData($("#formSubirCertificadoExperiencia")[0]);
            var fileSize = $('#fileCertExp')[0].files[0].size;

            if (fileSize > MAXIMO_TAMANIO_BYTES) {
                alert("valor no permitido en referencia comercial, debe ser inferior a 2 MB")
            } else {
                $('#fileCertExp').prop('disabled', true)
                $('#subirCertExp').prop('disabled', true)
                upload(formData, $('#formSubirCertificadoExperiencia'), $("#msgCertExp"), 4);
                $('#verCertExp').prop('disabled', false)
            }
        });

        $('#formSubirRut').submit(function (e) {
            e.preventDefault();
            var formData = new FormData($("#formSubirRut")[0]);
            var fileSize = $('#fileRut')[0].files[0].size;

            if (fileSize > MAXIMO_TAMANIO_BYTES) {
                alert("valor no permitido en rut, debe ser inferior a 2 MB")
            } else {
                $('#fileRut').prop('disabled', true)
                $('#subirRut').prop('disabled', true)
                upload(formData, $('#formSubirRut'), $("#msgRut"), 5);
                $('#verRut').prop('disabled', false)
            }
        });
        $('#formSubirCertificadoFerricaribe').submit(function (e) {
            e.preventDefault();
            var formData = new FormData($("#formSubirCertificadoFerricaribe")[0]);
            var fileSize = $('#fileCertInscrPag')[0].files[0].size;

            if (fileSize > MAXIMO_TAMANIO_BYTES) {
                alert("valor no permitido en Certificado Ferricaribe, debe ser inferior a 2 MB")
            } else {
                $('#fileCertInscrPag').prop('disabled', true)
                $('#subirCertInscrPag').prop('disabled', true)
                upload(formData, $('#formSubirCertificadoFerricaribe'), $("#msgCertInscrPag"), 6);
                $('#verCertInscrPag').prop('disabled', false)
            }
        });

        $('#verClauCom').click(function () {
            var filename = fileComplet + id_provider + "/" + $('#textClauCom').val();
            window.open(filename);
        })
        $('#verCedulaRep').click(function () {
            var filename = fileComplet + id_provider + "/" + $('#textCedulaRep').val();
            window.open(filename);
        })
        $('#verCertBan').click(function () {
            var filename = fileComplet + id_provider + "/" + $('#textCertBan').val();
            window.open(filename);
        })
        $('#verCertExp').click(function () {
            var filename = fileComplet + id_provider + "/" + $('#textCertExp').val();
            window.open(filename);
        })
        $('#verRut').click(function () {
            var filename = fileComplet + id_provider + "/" + $('#textRut').val();
            window.open(filename);
        })
        $('#verCertInscrPag').click(function () {
            var filename = fileComplet + id_provider + "/" + $('#textCertInscrPag').val();
            window.open(filename);
        })

        $("#home").click(function () {
            opcion = confirm('¿ Desea terminar el proceso de inscripciòn ?');
            if (opcion == true) {
                $('#contenido').load('main');
            }
        });

        $("#generarpdf").click(function () {
            getPDF();
        })

        function upload(formData, form, msg, order) {
            formData.append('order', order)
            $.ajax({
                url: $(form).attr("action"),
                type: $(form).attr("method"),
                data: formData,
                contentType: false,
                processData: false,
                cache: false,
                success: function () {
                    msg.html("<center><span class='alert alert-success' >" + "Archivo subido con exito</span></center>")
                }
            });
        }
        function loadAtt() {
            $.post("HomeAttachedController/loadAtt", { id_provider },
                function (resp) {
                    if (resp != '') {
                        var data = JSON.parse(resp)
                        data.forEach(element => {
                            filename = element.attached.replace(/ /g, '_');
                            if (element.order_position == 1) {
                                async(validarElement, true, $('#textClauCom'),
                                    $('#verClauCom'),
                                    $('#fileClauCom'),
                                    $('#subirClauCom'))
                                $('#textClauCom').val(filename);
                            } else if (element.order_position == 2) {
                                async(validarElement, true, $('#textCedulaRep'),
                                    $('#verCedulaRep'),
                                    $('#fileCedulaRep'),
                                    $('#subirCedulaRep'));
                                $('#textCedulaRep').val(filename);
                            } else if (element.order_position == 3) {
                                async(validarElement, true, $('#textCertBan'),
                                    $('#verCertBan'),
                                    $('#fileCertBan'),
                                    $('#subirCertBan'));
                                $('#textCertBan').val(filename);
                            } else if (element.order_position == 4) {
                                async(validarElement, true, $('#textCertExp'),
                                    $('#verCertExp'),
                                    $('#fileCertExp'),
                                    $('#subirCertExp'));
                                $('#textCertExp').val(filename);
                            } else if (element.order_position == 5) {
                                async(validarElement, true, $('#textRut'),
                                    $('#verRut'),
                                    $('#fileRut'),
                                    $('#subirRut'));
                                $('#textRut').val(filename);
                            } else if (element.order_position == 6) {
                                async(validarElement, true, $('#textCertInscrPag'),
                                    $('#verCertInscrPag'),
                                    $('#fileCertInscrPag'),
                                    $('#subirCertInscrPag'));
                                $('#textCertInscrPag').val(filename);
                            }
                        });
                    }
                });
        }

        function validarElement(controlText, controlVer, controlFile, controlSubir) {
            controlText.show()
            controlVer.show()
            controlFile.hide()
            controlSubir.hide()
        }

        function elemenHide() {
            $('#verClauCom').hide()
            $('#verCedulaRep').hide()
            $('#verCertBan').hide()
            $('#verCertExp').hide()
            $('#verRut').hide()
            $('#verCertInscrPag').hide()

            $('#textClauCom').hide()
            $('#textCedulaRep').hide()
            $('#textCertBan').hide()
            $('#textCertExp').hide()
            $('#textRut').hide()
            $('#textCertInscrPag').hide()
        }

        function async(fn, status = false, controlText = '', controlVer = '', controlFile = '', controlSubir = '') {
            setTimeout(function () {
                if (status == false) {
                    return fn.call(undefined);
                } else {
                    fn.call(undefined, controlText, controlVer, controlFile, controlSubir);
                }
            }, 1000);
        }

        function getPDF() {
            var jsonProv = JSON.parse(dataProv);
            var jsonCiiu = JSON.parse(dataciiu);
            var doc = new jsPDF('p', 'pt', 'legal');
            var fechaAct = moment().format("YYYYMMDDHHmm");
            var nameInf = 'reporteInforme_' + fechaAct.toString() + ".pdf";
            var logo = new Image();
            var imgData = raiz + "img/logo-small-1.png"
            var columns = ['Informaciòn General', 'datos'];
            var columnsTributaria = ['Informaciòn Tributaria', 'datos'];
            var columnsBancaria = ['Informaciòn Bancaria', 'datos'];
            var gContribuyente = jsonProv.id_grancontribuyente == 1 ? 'SI' : 'NO';
            var autoRenedor = jsonProv.id_auto_retenedor == 1 ? 'SI' : 'NO';
            var respIva = jsonProv.id_responsable_iva == 1 ? 'SI' : 'NO';
            var regSimple = jsonProv.id_regimen_simple == 1 ? 'SI' : 'NO';
            var tcuenta = jsonProv.tipo_cuenta == 1 ? 'Ahorro' : 'Corriente';
            var practicaIca = jsonProv.id_practica_ica == 1 ? 'SI' : 'NO';
            var actividad = descriptionActivEcon(jsonCiiu);

            var data = [
                ['Nit:', jsonProv.nit_business],
                ['Razòn Social:', jsonProv.business_name],
                ['Representante Legal:', jsonProv.legal_representative],
                ['Direcciòn:', jsonProv.address],
                ['Pais:', jsonProv.country],
                ['Ciudad:', jsonProv.city],
                ['Telefono:', jsonProv.phone],
                ['Celular:', jsonProv.mobile],
                ['Email:', jsonProv.email],
                ['E-mail (contacto) facturación electronica:', jsonProv.email_contacto_factura],
                ['Clasificaciòn:', jsonProv.description],
                ['Actividad Economica:', actividad]
            ];
            var dataTributaria = [
                ['Gran Contribuyente:', gContribuyente],
                ['Resoluciòn:', jsonProv.resolucion_grancontribuyente],
                ['Auto Retenedor:', autoRenedor],
                ['Resoluciòn:', jsonProv.resolucion_auto_retenedor],
                ['Responsable Iva:', respIva],
                ['Regimèn Simple:', regSimple],
                ['Practica ICA:', practicaIca],
                ['Codigo Actividad:', jsonProv.codigo_actividad],
                ['Tarifa:', jsonProv.tarifa]
            ];

            var dataBancaria = [
                ['Entidad Bancaria:', jsonProv.entidad_bancaria],
                ['Cuenta Nº:', jsonProv.cuenta_bancaria],
                ['Tipo de Cuenta:', tcuenta],
                ['Nit Beneficiario:', jsonProv.nit_beneficiario],
                ['Nombre de la Cuenta:', jsonProv.nombre_cuenta],
            ];

            logo.src = imgData;

            doc.setFont("helvetica");
            doc.setFontType("bold");
            doc.setFontSize(9);

            doc.addImage(logo, 'PNG', 20, 20, 90, 50);
            doc.line(580, 80, 20, 80) // largo, plano derecho,margen derecho, plano izquierdo
            doc.text(150, 60, "Matrícula y actualización de Información Clientes y  proveedores ");
            doc.autoTable(columns, data,
                { margin: { top: 100 } }
            );
           /* doc.line(570, 380, 40, 380) // largo, plano derecho,margen derecho, plano izquierdo
            doc.text(40, 390, "INFORMACIÒN TRIBUTARIA");*/
            doc.autoTable(columnsTributaria, dataTributaria,
                { margin: { top: 110 } }
            );
           /* doc.line(570, 620, 40, 620) // largo, plano derecho,margen derecho, plano izquierdo
            doc.text(40, 630, "INFORMACIÒN BANCARIA");*/
            doc.autoTable(columnsBancaria, dataBancaria,
                { margin: { top: 110 } }
            );
            doc.rect(40, 800, 530, 200);
            doc.text(45, 810, "OBRANDO EN NOMBRE PROPIO, DE MANERA VOLUNTARIA Y DANDO CERTEZA DE LA VERACIDAD DE LO AQUI CON -");
            doc.text(45, 820, "SIGNADO,REALIZO LA SIGUIENTE DECLARACION DE FUENTE DE FONDOS PARA DAR CUMPLIMIENTO A LA CIRCULA -");
            doc.text(45, 830, "R EXTERNA N. 07 DE 1996 EXPEDIDA POR LA SUPERINTENDENCIA BANCARIA, EL ESTATUTO ORGANICO DEL SISTEM -");
            doc.text(45, 840, "A FINANCIERO, LEY 190 DE 1995 ' ESTATUTO ANTICORRUPCION ' CIRCULAR EXTERNA No. 11 DEL 2011 DE LA SUPER -");
            doc.text(45, 850, "INTENDENCIA BANCARIA, EL ESTATUTO ORGANICO DEL SISTEMA FINANCIERO, LEY 190 DE 1995 ' ESTATUTO ANTIC -");
            doc.text(45, 860, "ORRUPCION ' CIRCULAR EXTERNA No. 11 DEL 2011 DE LA SUPERINTENDENCIA DE PUERTOS Y TRANSPORTE Y DEM -");
            doc.text(45, 870, "AS NORMAS NORMAS LEGALES CONCORDANTES CON LA PREVENCION DE LAVADO DE ACTIVOS DECLARO QUE :");
            doc.line(570, 880, 40, 880) // largo, plano derecho,margen derecho, plano izquierdo
            doc.text(45, 890, "1.LOS RECURSOS QUE POSEO PROVIENEN DE LAS SIGUIENTES FUENTES");
            doc.line(570,900, 40, 900) // largo, plano derecho,margen derecho, plano izquierdo
            doc.text(45, 910, "2.MIS RECURSOS NO PROVIENEN DE NINGUNA ACTIVIDAD ILICITA DE LAS CONTEMPLADAS EN EL CODIGO PENAL");
            doc.text(45, 920, "COLOMBIANO EN CUALQUIER NORMA QUE LO MODIFIQUE O ADICIONE;");
            doc.line(570,930, 40, 930) // largo, plano derecho,margen derecho, plano izquierdo
            doc.text(45, 940, " 3.AUTORIZO A  FERRINCARIBE LTDA PARA TOMAR LAS MEDIDAS CORRESPONDIENTES, EN CASO DE DETECTAR");
            doc.text(45, 950, "CUALQUIER INCONSISTENCIA EN LA INFORMACION CONSIGNADA EN ESTE FORMULARIO, EXIMIENDO A LA INSTITU");
            doc.text(45, 960, "CION DE TODA RESPONSABILIDAD QUE SE DERIVE DE ELLO");
            doc.line(570,970, 40, 970) // largo, plano derecho,margen derecho, plano izquierdo
            doc.text(45, 980, " 4.EN CALIDAD DE REPRESENTANTE LEGAL CERTIFICO QUE LA EMPRESA A LA CUAL REPRESENTO NO SE");
            doc.text(45, 990, "ENCUENTRA REGISTRADA EN LISTAS INTERNACIONALES DE SANCIONADOS.");
            doc.addPage()
            doc.addImage(logo, 'PNG', 20, 20, 90, 50);
            doc.line(580, 80, 20, 80) // largo, plano derecho,margen derecho, plano izquierdo
            doc.text(150, 60, "Matrícula y actualización de Información Clientes y  proveedores ");
            doc.rect(40, 100, 530, 260);
            doc.text(45, 110, "5. GARANTIZO EL CUMPLIMIENTO DE LA NORMATIVA LEGAL VIGENTE, Y ME COMPROMETO A ACATAR Y DAR ESTRI -");
            doc.text(45, 120, "CTO CUMPLIMIENTO TODAS LAS POLITICAS DE FERRINCARIBE LTDA");
            doc.line(570,130, 40, 130) // largo, plano derecho,margen derecho, plano izquierdo
            doc.text(45, 140, "ADICIONALMENTE, AUTORIZO DE MANERA PERMANENTE E IRREVOCABLE A  FERRINCARIBE LTDA  O A QUIEN RE -");
            doc.text(45, 150, "PRESENTE SUS DERECHOS PARA QUE CON FINES ESTADISTICOS, DE CONTROL, SUPERVISION Y DE INFORMACION");
            doc.text(45, 160, "COMERCIAL CON OTRAS ENTIDADES, PROCESE, REPORTE, CONSERVE, CONSULTE, SUMINISTRE O ACTUALICE");
            doc.text(45, 170, "CUALQUIER INFORMACION  A LA UIAF, FINANCIERA  Y COMERCIAL DESDE EL MOMENTO DE MI SOLICITUD A LAS");
            doc.text(45, 180, "CENTRALES DE INFORMACION O BASES DE DATOS DEBIDAMENTE CONSTITUIDAS QUE ESTIME CONVENIENTE,");
            doc.text(45, 190, "EN LOS TERMINOS Y DURANTE EL TIEMPO QUE LOS SISTEMAS DE BASES DE DATOS,");
            doc.text(45, 200, "LAS NORMAS Y LAS AUTORIDADES LO ESTABLEZCAN.");
            doc.line(570,210, 40, 210) // largo, plano derecho,margen derecho, plano izquierdo
            doc.text(45, 220, "LA CONSECUENCIA DE ESTA AUTORIZACION SERA LA INCLUSION DE MIS DATOS EN LAS MENCIONADAS");
            doc.text(45, 230, "BASES DE DATOS Y POR TANTO LAS ENTIDADES DEL SECTOR FINANCIERO O DE CUALQUIER OTRO");
            doc.text(45, 240, "SECTOR AFILIADO CONOCERAN MI COMPORTAMIENTO PRESENTE Y PASADO RELACIONADO CON MIS");
            doc.text(45, 250, "OBLIGACIONES FINANCIERAS O CUALQUIER OTRO DATO PERSONAL O ECONOMICO QUE ESTIME PERTINENTE.");
            doc.line(570,260, 40, 260) // largo, plano derecho,margen derecho, plano izquierdo
            doc.line(570,320, 40, 320) // largo, plano derecho,margen derecho, plano izquierdo
            doc.text(235, 330, "FIRMA Y SELLO DE LA EMPRESA");
            doc.text(45, 350, "NOMBRE COMPLETO REPRESENTANTE LEGAL: " + jsonProv.legal_representative);
            doc.output('save',nameInf);
            doc.output(nameInf);
        }

        function consulDatos() {
            $.post("HomeAttachedController/loadData", { id_provider }, function (data) {
                dataProv = data;
            })
        }

        function consulDatosCiiu() {
            $.post("HomeAttachedController/loadDataCiiu", { id_provider }, function (data) {
                dataciiu = data;
            })
        }

        function descriptionActivEcon(dataAtiv)
        {
            var resultado = '';
            var description = '';

            dataAtiv.forEach(element => {
                description = element.description
                resultado = resultado + "," + description
            })

            return resultado;
        }

    } catch (error) {
        alert(error);
    }
});