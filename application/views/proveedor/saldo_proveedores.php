<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header">
                <h3>Saldos Proveedores</h3>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table-condensed">
                        <thead>
                            <tr>
                                <th>Proveedor</th>
                                <th>Debe</th>
                                <th>Haber</th>
                                <th>Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            $list = array_merge($debitos,$creditos);
                            
                            //sort
                            $continue = true;
                            while($continue)
                            {
                                $continue = false;
                                for($i=0;$i<sizeof($list);$i++)
                                {
                                    if($list[$i]['proveedor_id']>$list[$i+1]['proveedor_id'])
                                    {
                                        $temp = $list[$i];
                                        $list[$i] = $list[$i+1];
                                        $list[$i+1]=$temp;
                                        $continue=true;
                                    }
                                }
                            }
                            //show
                            $count = 0;
                            $prev_id=null;
                            
                            while($count<sizeof($list))
                            {
                                 
                            ?>
                            <tr>
                            <td><?php echo $list[$count]['proveedor'];  ?></td>
                            <?php
                                $prev_id = $prev_id = $list[$count]['proveedor_id'];
                                while($count<sizeof($list) &&  $prev_id == $list[$count]['proveedor_id'])
                                {
                                    $row = $list[$count];
                                    ?>
                                
                                    
                            <td><?php echo (isset($row['debito'])? number_format($row['debito']) : number_format(0,2,'.') ); ?></td>
                            <td><?php echo (isset($row['credito'])? number_format($row['credito']) : number_format(0,2,'.') );  ?></td>
                                    
                                
                            <?php
                                    $count++;
                                }
                                
                                ?>
                                    <td><?php ?></td>
                            </tr>
                            <?php
                            }
                            
                            
                            ?>
                            
                            <?php ?>
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="box-footer">
                
            </div>
        </div>
    </div>
</div>