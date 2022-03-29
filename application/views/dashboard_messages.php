<div class="box box-primary">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Mensajes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list ui-sortable">
                  
                  <?php foreach ($mensajes as $mensaje) {?>
                        <li>
                        <!-- drag handle -->
                        <span class="handle ui-sortable-handle">
                              <i class="fa fa-ellipsis-v"></i>
                              <i class="fa fa-ellipsis-v"></i>
                            </span>
                        <!-- checkbox -->
                        <input type="checkbox" value="">
                        <!-- todo text -->
                        <span class="text">Tarea 1</span>
                        <!-- Emphasis label -->
                        <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                          <i class="fa fa-edit"></i>
                          <i class="fa fa-trash-o"></i>
                        </div>
                      </li>
                  <?php } ?>
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
                <a href="<?php echo site_url('mensaje/nuevo_mensaje');?>"  type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Nuevo</a>
            </div>
          </div>