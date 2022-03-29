
    <div class="box box-solid box-default">
        <div class="box-header">
            <h3 class="box-title">Cierre de Lote</h3>
            <div class="pull-right">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">
                Nuevo
            </button>
            </div>
        </div>
        <div class="box-body">
            <div class="direct-chat-messages">
                <?php
                    $this->load->view('cierre_caja/common/_tabla_lote');
                ?>
            </div>
        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Lote</h4>
      </div>
      <div class="modal-body">
        <?php
            $this->load->view('cierre_caja/nuevo/_nuevo_lote');
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btn-agregar-lote" data-dismiss="modal">Guardar</button>
      </div>
    </div>
  </div>
</div>