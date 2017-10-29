
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Categorias Equipo
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
                        <a href="<?php echo base_url();?>mantenimiento/categorias/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Categoria</a>
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
                                    
			                         <th>ID Equipo</th>
									<th>Documento</th>
									<th>Descripcion</th>
                                    <th>Creación</th>
			                         <th>Estado</th>
									  <th>Opciones</th>
									
																											
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($categorias)):?>
                                    <?php foreach($categorias as $categoria):?>
                                        <tr>
                                            <td><?php echo $categoria->idCategoria;?></td>
                                            <td><?php echo $categoria->Nombre;?></td>
											
											  <td><?php echo $categoria->Equipo_id;?></td>
						                   <td><?php echo $categoria->Documento;?></td>
										   <td><?php echo $categoria->Categoria_Equipocol;?></td>
											   <td><?php echo $categoria->Creacion;?></td>
											   <td><?php echo $categoria->estado;?></td>
										
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $categoria->idCategoria;?>">
                                                        <span class="fa fa-search"></span>
                                                    </button>
                                                    <a href="<?php echo base_url()?>mantenimiento/categorias/edit/<?php echo $categoria->idCategoria;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                    <a href="<?php echo base_url();?>mantenimiento/categorias/delete/<?php echo $categoria->idCategoria;?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>
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
        <h4 class="modal-title">Informacion de las Categorias</h4>
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
