<div class="box box-solid box-default">
    <div class="box-header">
        <h3 class="box-title">Desde</h3>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <label class="control-label">D&iacute;a:</label>
            <input type="number" min="1" max="31" class="form-control" name="_dia" id="_dia" value="1" step="1">
        </div>
        <div class="col-md-12">
            <label for="_mes" class="control-label">Mes:</label>
            <!--<input type="number" min="1" max="12" class="form-control" name="_mes" id="_mes">-->
            <select class="form-control" name="_mes" id="_mes">
                <?php for($i=1;$i<13;$i++){ ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                <?php }?>
            </select>
        </div>
        <div class="col-md-12">
            <label for="_anio" class="control-label">A&ntilde;o:</label>
            <input type="number" min="2019" max="20000" class="form-control" name="_anio" id="_anio" value="2020" step="1">
        </div>
    </div>
</div>
<div class="box box-solid box-default">
    <div class="box-header">
        <h3 class="box-title">Hasta</h3>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <label class="control-label">D&iacute;a:</label>
            <input type="number" min="1" max="31" class="form-control" name="_diah" id="_diah" value="1" step="1">
        </div>
        <div class="col-md-12">
            <label for="_mesh" class="control-label">Mes:</label>
            <!--<input type="number" min="1" max="12" class="form-control" name="_mes" id="_mes">-->
            <select class="form-control" name="_mesh" id="_mesh">
                <?php for($i=1;$i<13;$i++){ ?>
                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                <?php }?>
            </select>
        </div>
        <div class="col-md-12">
            <label for="_anioh" class="control-label">A&ntilde;o:</label>
            <input type="number" min="2019" max="20000" class="form-control" name="_anioh" id="_anioh" value="2020" step="1">
        </div>
    </div>
    </div>
<div class="box-footer">
    <button type="button" class="btn btn-success" id="ver-informe">Ver Informe IVA</button>
</div>
