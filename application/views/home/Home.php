<?php echo form_open('HomeController/insert', ['method' =>'post','id'=>'form']); ?>
<div id="report">
 <!-- informacion de empresa -->
 <div class="card mt-2">
    <div class="card-header">
        <h6>Información de Empresa</h6>
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-2 col-lg-12">
                <label>Nit de la Empresa:</label>
                <input type="text" class="form-control form-control-sm" id="nit_empresa" required disabled
                    value="<?php echo $this->session->userdata('nit_business'); ?>" />
            </div>
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-4 col-lg-12">
                <label>Razon Social de la empresa:</label>
                <input type="text" class="form-control form-control-sm" id="razon_social" required />
            </div>
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-4 col-lg-12">
                <label>Representante Legal:</label>
                <input type="text" class="form-control form-control-sm" id="representante_legal" required />
            </div>
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-2 col-lg-12">
                <label>Gerente:</label>
                <input type="text" class="form-control form-control-sm" id="gerente" required />
            </div>
            <!-- -->
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-3 col-lg-12">
                <label>Pais:</label>
                <select class="form-control form-control-sm" name="cbCountry" id="cbCountry" required>
                    <option value="0">Seleccionar</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-3 col-lg-12">
                <label>Departamento:</label>
                <select class="form-control form-control-sm" name="cbDepart" id="cbDepart" required>
                    <option value="0">Seleccionar</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-3 col-lg-12">
                <label>Ciudad:</label>
                <select class="form-control form-control-sm" name="cbCity" id="cbCity" required>
                    <option value="0">Seleccionar</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-3 col-lg-12">
                <label>Pagina Web:</label>
                <input type="text" class="form-control form-control-sm" id="pagina_web" required />
            </div>
            <!--- -->
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-3 col-lg-12">
                <label>Dirección:</label>
                <input type="text" class="form-control form-control-sm" id="dirrecion" required />
            </div>
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-3 col-lg-12">
                <label>Telefono:</label>
                <input type="number" class="form-control form-control-sm" id="telefono" required />
            </div>
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-3 col-lg-12">
                <label>Celular:</label>
                <input type="number" class="form-control form-control-sm" id="celular" required />
            </div>
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-3 col-lg-12">
                <label>Email:</label>
                <input type="email" class="form-control form-control-sm" id="email" required />
            </div>
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-3 col-lg-12">
                <label>Email(contacto) factura electronica:</label>
                <input type="email" class="form-control form-control-sm" id="emailContactoFactura" required />
            </div>
        </div>
    </div>
 </div>
 <!-- informacion tributaria -->
 <div class="card mt-2">
    <div class="card-header">
        <h6>Información Tributaria</h6>
    </div>
    <div class="card-body">
        <div class="form row">
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-3 col-lg-12">
                <label>Gran Contribuyente:</label>
                <select class="form-control form-control-sm" name="cbGranContribuyente" id="cbGranContribuyente"
                    required>
                    <option value="0">Seleccionar</option>
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-3 col-lg-12">
                <label>Resolución:</label>
                <input type="text" class="form-control form-control-sm" id="resolGranContribuyente" />
            </div>
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-3 col-lg-12">
                <label>Auto Retenedor:</label>
                <select class="form-control form-control-sm" name="cbAutoRetenedor" id="cbAutoRetenedor" required>
                    <option value="0">Seleccionar</option>
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-xl-3 col-sm-12 col-md-3 col-lg-12">
                <label>Resolución:</label>
                <input type="text" class="form-control form-control-sm" id="resolAutoRetenedor" />
            </div>
            <div class="form-group col-xs-12 col-xl-6 col-sm-12 col-md-6 col-lg-12">
                <label>Responsable IVA:</label>
                <select class="form-control form-control-sm" name="cbResponsableIva" id="cbResponsableIva" required>
                    <option value="0">Seleccionar</option>
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-xl-6 col-sm-12 col-md-6 col-lg-12">
                <label>Regimén Simple:</label>
                <select class="form-control form-control-sm" name="cbRegimenSimple" id="cbRegimenSimple" required>
                    <option value="0">Seleccionar</option>
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-xl-4 col-sm-12 col-md-4 col-lg-12">
                <label>Practica ICA:</label>
                <select class="form-control form-control-sm" name="cbPracticaIca" id="cbPracticaIca" required>
                    <option value="0">Seleccionar</option>
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-xl-4 col-sm-12 col-md-4 col-lg-12">
                <label>Codigo Actividad:</label>
                <input type="text" class="form-control form-control-sm" id="codigoActividad" />
            </div>
            <div class="form-group col-xs-12 col-xl-4 col-sm-12 col-md-4 col-lg-12">
                <label>Tarifa:</label>
                <input type="text" class="form-control form-control-sm" id="tarifa" />
            </div>
        </div>
    </div>
 </div>
 <!-- informacion bancaria -->
 <div class="card mt-2">
    <div class="card-header">
        <h6>Información del Bancaria</h6>
    </div>
    <div class="card-body">
        <div class="form row">
            <div class="form-group col-xs-12 col-xl-6 col-sm-12 col-md-6 col-lg-12">
                <label>Entidad Bancaria:</label>
                <input type="text" class="form-control form-control-sm" id="entidadBancaria" required />
            </div>
            <div class="form-group col-xs-12 col-xl-6 col-sm-12 col-md-6 col-lg-12">
                <label>Cuenta Bancaria:</label>
                <input type="text" class="form-control form-control-sm" id="cuentaBancario" required />
            </div>
            <div class="form-group col-xs-12 col-xl-4 col-sm-12 col-md-4 col-lg-12">
                <label>Tipo de Cuenta:</label>
                <select class="form-control form-control-sm" name="cbTipoCuenta" id="cbTipoCuenta" required>
                    <option value="0">Seleccionar</option>
                    <option value="1">Ahorro</option>
                    <option value="2">Corriente</option>
                </select>
            </div>
            <div class="form-group col-xs-12 col-xl-4 col-sm-12 col-md-4 col-lg-12">
                <label>Nit Beneficiario:</label>
                <input type="text" class="form-control form-control-sm" id="nitBeneficiario" />
            </div>
            <div class="form-group col-xs-12 col-xl-4 col-sm-12 col-md-4 col-lg-12">
                <label>Nombre de la Cuenta:</label>
                <input type="text" class="form-control form-control-sm" id="nombreCuenta" />
            </div>
        </div>
    </div>
 </div>
 <!-- indormacion del funcionario -->
 <div class="card mt-2">
    <div class="card-header">
        <h6>Información del Funcionario</h6>
    </div>
    <div class="card-body">
        <div class="form row">
            <div class="form-group col-xs-12 col-xl-6 col-sm-12 col-md-6 col-lg-12">
                <label>Funcionario:</label>
                <input type="text" class="form-control form-control-sm" id="funcionario" required />
            </div>
            <div class="form-group col-xs-12 col-xl-6 col-sm-12 col-md-6 col-lg-12">
                <label>Email del Funcionario:</label>
                <input type="email" class="form-control form-control-sm" id="email_funcionario" required />
            </div>
        </div>
    </div>
 </div>
 <!-- contacto comercial  -->
 <div class="card mt-2">
    <div class="card-header">
        <h6>Contacto Comercial</h6>
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-xs-12 col-xl-4 col-sm-12 col-md-4 col-lg-12">
                <label>Nombre:</label>
                <input type="text" class="form-control form-control-sm" id="nombre_contacto" required />
            </div>
            <div class="form-group col-xs-12 col-xl-4 col-sm-12 col-md-4 col-lg-12">
                <label>Celular:</label>
                <input type="number" class="form-control form-control-sm" id="celular_contacto" required />
            </div>
            <div class="form-group col-xs-12 col-xl-4 col-sm-12 col-md-4 col-lg-12">
                <label>Email:</label>
                <input type="email" class="form-control form-control-sm" id="email_contacto" required />
            </div>
        </div>
    </div>
 </div>
 <!-- contacto para reportar -->
 <div class="card mt-2">
    <div class="card-header">
        <h6>Contacto para Reportar</h6>
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-xs-12 col-xl-4 col-sm-12 col-md-4 col-lg-12">
                <label>Nombre:</label>
                <input type="text" class="form-control form-control-sm" id="nombre_reporta" required />
            </div>
            <div class="form-group col-xs-12 col-xl-4 col-sm-12 col-md-4 col-lg-12">
                <label>Celular:</label>
                <input type="number" class="form-control form-control-sm" id="celular_reporta" required />
            </div>
            <div class="form-group col-xs-12 col-xl-4 col-sm-12 col-md-4 col-lg-12">
                <label>Email:</label>
                <input type="email" class="form-control form-control-sm" id="email_reporta" required />
            </div>
        </div>
    </div>
 </div>
</div> <!-- fin reporte --> 
<!-- botones -->
<div class="card mt-2">
    <div class="row">
        <div class="col-12 text-center">
            <input type="button" value="Inicio" class="btn btn-danger btn-sm mt-2 mb-2"
                id=home>
            <input type="button" value="Guardar y continuar" class="btn btn-primary btn-sm mt-2 mb-2"
                id=enviarDatosBasico>
        </div>
    </div>
</div>
</div>
</div>
<?php echo form_close(); ?>

<script src="<?php echo base_url('static/'); ?>js/form.js"></script>
