
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Usuarios Sistema SGI
        <small>Listado</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>mantenimiento/usuarios/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Usuario</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
									<th>Apellido</th>
			                         <th>Usuario</th>
									<th>Rol</th>
									<th>Fecha Ingreso</th>
									<th>Opciones</th>
									
																											
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($usuarios)):?>
                                    <?php foreach($usuarios as $usuario):?>
                                        <tr>
                                            <td><?php echo $usuario->idUsuario;?></td>
                                            <td><?php echo $usuario->nombe;?></td>	
											  <td><?php echo $usuario->apellido;?></td>
						                   <td><?php echo $usuario->username;?></td>
										   <td><?php echo $usuario->id_rol;?></td>
											   <td><?php echo $usuario->fecha_ingreso;?></td>
											
										
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-usuarios" data-toggle="modal" data-target="#modal-default" value="<?php echo $usuario->idUsuario;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <a href="<?php echo base_url()?>mantenimiento/usuarios/edit/<?php echo $usuario->idUsuario;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>mantenimiento/usuarios/delete/<?php echo $usuario->idUsuario;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Mostrando informacion de usuarios Sistema</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
