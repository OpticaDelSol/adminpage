<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-warning">
            <div class="box-header"><h3 class="box-title">Nuevo Cierre de Caja</h3></div>
            <div class="box-body">
                <div class="col-md-12">
                    <label for="sucursal">
                        Sucursal
                    </label>
                    <select class="form-control" id="sucursal">
                        <option value="">Barranqueras</option> 
                        <option value="">Colon</option> 
                        <option value="">Alberdi</option> 
                        <option value="">Fontana</option> 
                        <option value="">Corrientes</option> 
                        <option value="">Parana</option> 
                    </select>
                </div>
                <div class="col-md-6">
                <?php
                    $this->load->view('cierre_caja/nuevo/_lista_cierre_z');
                ?>
                </div>
                <div class="col-md-6">
                <?php
                    $this->load->view('cierre_caja/nuevo/_lista_lote');
                ?>
                </div>
            </div>
            <div class="box-footer">
                <button class="btn btn-success btn-lg">Guardar</button>
                <button class="btn btn-danger">Cancelar</button>
            </div>
        </div>
    </div>
</div>


