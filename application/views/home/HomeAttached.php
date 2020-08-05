<div class="card">
    <div class="card-header">
        <h5 class="text-center">Adjuntar Documentos Legales</h5>
    </div>
        <!--- col-->
        <!--Clausula de comercio -->
        <div class="col-12">
            <div class="card mt-2">
                <form action="<?php echo base_url(); ?>HomeAttachedController/uploadFtp" method="post"
                    enctype=" multipart/form-data" id="formSubirClausulaComercio">
                    <div class="card-header text-center">
                        <small>camara de comercio</small>
                    </div>
                    <div class="card-body">
                        <input type="text" id="textClauCom" class="form-control form-control-sm" disabled>
                        <input type="file" id="fileClauCom" name="file" lang="es" accept="pdf/pdf, .pdf" required>
                        <div id="msgClauCom"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" id="subirClauCom" value="Subir" class="btn btn-primary btn-sm">
                                <input type="button" id="verClauCom" value="ver" class="btn btn-secondary btn-sm" >
                            </div>
                        </div>
                    </div>
                </form>
                <!--- terminar form-->
            </div>
            <!--- terminar card-->
        </div>
        <!--- col-->
        <!-- cedula del representante legal -->
        <div class="col-12">
            <div class="card">
                <form action="<?php echo base_url(); ?>HomeAttachedController/uploadFtp" method="post"
                    enctype=" multipart/form-data" id="formSubirCedulaRepresentantelegal">
                    <div class="card-header text-center">
                        <small>cedula del representante legal</small>
                    </div>
                    <div class="card-body">
                        <input type="text" id="textCedulaRep" class="form-control form-control-sm" disabled>
                        <input type="file" id="fileCedulaRep" name="file" lang="es" accept="pdf/pdf, .pdf" required>
                        <div id="msgCedulaRep"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" id="subirCedulaRep" value="Subir" class="btn btn-primary btn-sm">
                                <input type="button" id="verCedulaRep" value="ver" class="btn btn-secondary btn-sm" >
                            </div>
                        </div>
                    </div>
                </form>
                <!--- terminar form-->
            </div>
            <!--- terminar card-->
        </div>
        <!--- col-->
        <!-- Certificado Bancario -->
        <div class="col-12">
            <div class="card">
                <form action="<?php echo base_url(); ?>HomeAttachedController/uploadFtp" method="post"
                    enctype=" multipart/form-data" id="formSubirCertificadoBancario">
                    <div class="card-header text-center">
                        <small>Certificado Bancario</small>
                    </div>
                    <div class="card-body">
                        <input type="text" id="textCertBan" class="form-control form-control-sm" disabled>
                        <input type="file" id="fileCertBan" name="file" lang="es" accept="pdf/pdf, .pdf" required>
                        <div id="msgCertBan"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" id="subirCertBan" value="Subir" class="btn btn-primary btn-sm">
                                <input type="button" id="verCertBan" value="ver" class="btn btn-secondary btn-sm" >
                            </div>
                        </div>
                    </div>
                </form>
                <!--- terminar form-->
            </div>
            <!--- terminar card-->
        </div>
        <!--- col-->
        <!-- Certificado de experiencia -->
        <div class="col-12">
            <div class="card">
                <form action="<?php echo base_url(); ?>HomeAttachedController/uploadFtp" method="post"
                    enctype=" multipart/form-data" id="formSubirCertificadoExperiencia">
                    <div class="card-header text-center">
                        <small>Referencia Comercial</small>
                    </div>
                    <div class="card-body">
                        <input type="text" id="textCertExp" class="form-control form-control-sm" disabled>
                        <input type="file" id="fileCertExp" name="file" lang="es" accept="pdf/pdf, .pdf" required>
                        <div id="msgCertExp"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" id="subirCertExp" value="Subir" class="btn btn-primary btn-sm">
                                <input type="button" id="verCertExp" value="ver" class="btn btn-secondary btn-sm" >
                            </div>
                        </div>
                    </div>
                </form>
                <!--- terminar form-->
            </div>
            <!--- terminar card-->
        </div>
        <!--- col-->
        <!-- Rut -->
        <div class="col-12">
            <div class="card">
                <form action="<?php echo base_url(); ?>HomeAttachedController/uploadFtp" method="post"
                    enctype=" multipart/form-data" id="formSubirRut">
                    <div class="card-header text-center">
                        <small>Rut</small>
                    </div>
                    <div class="card-body">
                        <input type="text" id="textRut" class="form-control form-control-sm" disabled>
                        <input type="file" id="fileRut" name="file" lang="es" accept="pdf/pdf, .pdf" required>
                        <div id="msgRut"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" id="subirRut" value="Subir" class="btn btn-primary btn-sm">
                                <input type="button" id="verRut" value="ver" class="btn btn-secondary btn-sm" >
                            </div>
                        </div>
                    </div>
                </form>
                <!--- terminar form-->
            </div>
            <!--- terminar card-->
        </div>
        <!--- col-->
        <!-- Certificado de Incripcion a la pagina -->
        <div class="col-12">
            <div class="card mb-2">
                <form action="<?php echo base_url(); ?>HomeAttachedController/uploadFtp" method="post"
                    enctype=" multipart/form-data" id="formSubirCertificadoFerricaribe">
                    <div class="card-header text-center">
                        <small>Certificado de Inscripción a la pagina</small><p><small>(<strong>descargue el cerificado</strong> lo firma y <strong>suba el archivo</strong>)</small></p>
                    </div>
                    <div class="card-body">
                         <input type="text" id="textCertInscrPag" class="form-control form-control-sm" disabled>
                        <input type="file"  id="fileCertInscrPag" name="file" lang="es" accept="pdf/pdf, .pdf" required>
                        <div id="msgCertInscrPag"></div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" id="subirCertInscrPag" value="Subir" class="btn btn-primary btn-sm">
                                <input type="button" id="verCertInscrPag" value="ver" class="btn btn-secondary btn-sm" >
                                <input type="button" value="Descargar" class="btn btn-danger btn-sm float-right"
                                       id=generarpdf>
                            </div>
                        </div>
                    </div>
                </form>
                <!--- terminar form-->
            </div>
            <!--- terminar card-->
        </div>
        <!--- col-->
    </div>
</div>
<div class="card-footer text-center">
    <div class="row">
        <div class="col-12">
         <!--   <input type="button" value="Atras" class="btn btn-danger btn-sm m-2" id="prevActiv"> -->
            <input type="button" value="Terminar" class="btn btn-sm btn-primary mt-2 mb-2" id="home">
        </div>
    </div>
</div>

</div>

<?php //$this->load->view('home/Footer'); ?>
<script src="<?php echo base_url('static/'); ?>js/attached.js"></script>

</html>