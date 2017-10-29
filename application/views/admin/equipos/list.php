
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Equipos Monitoreados
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
                        <a href="<?php echo base_url();?>mantenimiento/equipos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Equipos</a>
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
									<th>Código Servicio</th>
									<th>Categoría</th>
									<th>Marca</th>
                                    <th>Sucursal</th>
			                         <th>Ubicación</th>
									  <th>Opciones</th>
									
																											
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($equipos)):?>
                                    <?php foreach($equipos as $equipo):?>
                                        <tr>
                                            <td><?php echo $equipo->idEquipo;?></td>
                                            <td><?php echo $equipo->Nombre;?></td>
											  <td><?php echo $equipo->codigo_servicio;?></td>
						                   <td><?php echo $equipo->categoria;?></td>
										     <td><?php echo $equipo->marca;?></td>
										   <td><?php echo $equipo->eestablecimiento;?></td>
											   <td><?php echo $equipo->ubicacion;?></td>
									
										
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view-equipos" data-toggle="modal" data-target="#modal-default" value="<?php echo $equipo->idEquipo;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <a href="<?php echo base_url()?>mantenimiento/equipos/edit/<?php echo $equipo->idEquipo;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>mantenimiento/equipos/delete/<?php echo $equipo->idEquipo;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
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
        <h4 class="modal-title">Mostrando informacón de equipos monitoreados</h4>
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
