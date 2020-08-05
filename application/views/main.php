<form action="<?php base_url(); ?>HomeController/loadInforProviders" 
      method="get" 
      id="formConsultar">
<div class="card">
    <div class="card-body text-center">
    <h5 class="text-center">Inscripciòn de proveedores o Clientes</h5>
    <hr>
        <p>Si eres Persona <strong>persona natural</strong> o <strong>juridica</strong> 
           digita tu nit o cedula en el campo, preciona <strong>Enter</strong> o en el boton de busqueda,
           para consultar tu informaciòn </p>
        <div class=" form-row">
        <div class="form-group col-10 ml-5">
                  <div class="input-group">
                    <input
                      type="number"
                      class="form-control form-control-sm"
                      name="textbusquedaNit" 
                      id="textbusquedaNit"
                      required
                      placeholder="Digite el numero de documento o nit "
                      maxlength="26"
                    />
                    <span class="input-group-btn">
                      <input
                        class="btn btn-primary btn-sm"
                        type="submit"
                        value="Buscar"
                      >
                    </span>
                  </div>
        </div>
    </div>
    <div id="notExistmsg"></div>
    <div class="card-footer text-center">
        <div id="notExist"></div>
    </div>
</div>
</form>
<div id="registryExist"></div>
<script src="<?php echo base_url('static/'); ?>js/main.js"></script>
