<div class="box box-solid">
    <div class="box-header">Resumen Saldos (Hasta: <?php echo $periodo; ?>)</div>
    <div class="box-body">
        
        <table class="table table-bordered  table-danger">
            <thead>
                <tr>
                    <th>Proveedor</th>
<!--                    <th style='text-align:right;'>Debe</th>
                    <th style='text-align:right;'>Haber</th>-->
                    <th style='text-align:right;'>Saldo</th>
                    <th></th>
                </tr>
            </thead>    
            <tbody>
            <?php 
            //print_r($rows);
            foreach($rows as $row){
                ?>
                <tr>
                    <td ><?php echo $row["proveedor"]; ?></td>
<!--                    <td style='text-align:right;'><?php echo number_format($row["debe"],2,'.',''); ?></td>
                    <td style='text-align:right;'><?php echo number_format($row["haber"],2,'.',''); ?></td>-->
                    <td style='text-align:right;'><?php echo number_format($row["saldo"],2,'.',''); ?></td>
                    <td style='text-align:center;'><a href="<?php echo site_url("proveedor/details/".$row["id"]); ?>" class="btn btn-sm btn-warning" target="_blank">Ir a Ficha</a></td>
                </tr>

            <?php
            }
            ?>
            </tbody>
        </table>
        
    </div>
    <div class="box-footer"></div>
</div>