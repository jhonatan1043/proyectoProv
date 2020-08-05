<div class="card">
    <div class="card-header">
        <h5 class="text-center">Administración de usuario</h5>
    </div>
    <div class="card-body">
       <div id="tableUser"></div>
    </div><!-- fin card-body -->
    <div class="card-footer text-center">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" id="btModificar">
            Modificar
        </button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                    <div class="col-12">
                            <div class="form-group">
                                <label for="nombreUser">identificaciòn</label>
                                <input type="text" class="form-control form-control-sm" name="identUser" id="identUser">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nombreUser">Nombre</label>
                                <input type="text" class="form-control form-control-sm" name="username" id="username">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="emailUser">Email</label>
                                <input type="email" class="form-control form-control-sm" name="email" id="email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="rolUser">Rol</label>
                                <input type="email" disabled class="form-control form-control-sm" name="rolUser" id="rolUser">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" id="regAdmin" class="btn btn-primary btn-sm">Registrar Cambios</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('static/'); ?>js/uses.js"></script>
