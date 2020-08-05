$(document).ready(function () {
    try {

        var id_provider = localStorage.getItem('idProv');

        $.post("HomePageClasifController/menuClasificacion",
            function (data) {
                $("#menuClasificacion").html(data);
            });

        $('#saveCls').click(function () {
            var select = [];
            $(":radio[name=check]").each(function () {
                if (this.checked) {
                    select.push($(this).val());
                }
            });
            $('#saveCls').prop('disabled', true);
            if (select.length) {
                var jsonString = JSON.stringify(select);
                var url = id_provider != null ? 'HomePageClasifController/update' : 'HomePageClasifController/save';
                $.post(url, { data: jsonString }, function () {
                    $('#contenido').load('actividad');
                })
            } else
                alert('seleccione');
            $('#saveCls').prop('disabled', false);
            return false;
        });

        async(cargarClasif);

        function cargarClasif() {
            if (id_provider != null) {
                $.post('HomePageClasifController/loadCheckMenu', {
                    id_provider: id_provider
                }, function (resp) {
                    if (resp != null) {
                        resp = JSON.parse(resp);
                        $(":radio[name=check]").each(function () {
                            if ($(this).val() == resp.id_classification) {
                                this.checked = true
                            }
                        });
                    }
                });
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
})