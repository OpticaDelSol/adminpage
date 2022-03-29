<div class="row">
    <div class="col-md-6">
        <div class="box">
            <div class="box-footer">
                <button class="btn btn-sm btn-default " id="agregar-modo-pago">Agregar Modo de Pago</button>
            </div>
        </div>
    </div>
</div>
<div id="modo-pago-content" style="visibility: hidden">
    <div class="box box-default">
        <div class="box-header"><b>Modo De Pago</b></div>
        <div class="box-body">
    <div class="col-md-6">
        <label class="control-label">Modo</label>
        <div class="form-group">
            <select id="fkModoPago" name="fkModoPago[]" class="form-control">
                        <option value="1">EFECTIVO</option>
                        <option value="2">CHEQUE</option>
                        <option value="3">DEPOSITO</option>
                        <option value="4">OTRO</option>
                </select>
        </div>
    </div>
    <div class="col-md-6">
        <label for='monto' class='control-label'>Monto</label>
            <div class='input-group'>
                <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type='number' step=".01" name='modo_monto[]' id="0" value='' class='form-control  monto-type modo-pago-monto' />
            </div>
    </div>
    </div></div>
</div>
