<div class="card">
    <div class="card-header">
        <h5 class="text-center">Actividad Economica</h5>
    </div>
    <div class="card-body">
       <form method="post" id="formActivi">
             <div class="card mb-2 p-2">
               <p>consulte su actividad economica, <strong>Despliegue la categoria</strong> o/y digite una <strong>palabra clave</strong> en la <strong>caja de busqueda</strong>
                  si la busqueda tiene exito, aparecera el resultado en lista, la cual al <strong>hacer click</strong> se agregar automaticamente
                  guarde para confirmar los cambios. Minimo 2 actividades economica.
               </p>
             </div>
             <div class="input-group">
                        <select
                          class="form-control col-md-3 form-control-sm"
                          id="cbBusquedaAct"
                         >
                         <option  value ="1">Descripciòn</option>
                          <option value ="2">Codigo Ciiu</option>  
                        </select>
                        <select
                          class="form-control col-md-3 form-control-sm"
                          id="cbCategoria"
                          required
                         >
                        </select>
                        <input
                          type="text"
                          id="txtBusquedaAct"
                          class="form-control form-control-sm"
                          placeholder="presione enter para recargar"
                        />
                        <button
                          type="submit"
                          class="btn btn-primary btn-sm"
                          id="btnBusquedaAct"
                        >
                          <i class="fa fa-search"></i> Buscar
                        </button>
              </div>
        <hr>
        <ul class="list-group list-group-flush mb-2">
        <div id="cajasActividad"></div>
        </ul>

        <div id="notifActividad" class="row"></div>

      </form>
    </div>
    <div class="card-footer text-center">
        <div class="row">
            <div class="col-12">
               <!-- <input type="button" value="Atras" class="btn btn-danger btn-sm m-2" id="prevClasif"> -->
                <input type="button" value="Guardar y continuar" class="btn btn-primary btn-sm mt-2 mb-2" id="saveAct">
            </div>
        </div>
    </div>
</div>
<?php //$this->load->view('home/Footer'); ?>
<script src="<?php echo base_url('static/'); ?>js/activid.js"></script>