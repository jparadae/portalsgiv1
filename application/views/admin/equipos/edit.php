
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Categorias
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>mantenimiento/categorias/update" method="POST">
                            <input type="hidden" value="<?php echo $categoria->idCategoria;?>" name="idCategoria">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $categoria->Nombre?>">
                            </div>
							
							
							                     <div class="form-group">
                                <label for="archivo">Archivo:</label>
                                <input type="text" class="form-control" id="archivo" name="archivo" value="<?php echo $categoria->Archivo?>">
                            </div>
							
							
							                            <div class="form-group">
                                <label for="equipo">ID Equipo::</label>
                                <input type="text" class="form-control" id="equipo" name="equipo" value="<?php echo $categoria->Equipo_id?>">
                            </div>
							
							
							                            <div class="form-group">
                                <label for="documento">Documento:</label>
                                <input type="text" class="form-control" id="documento" name="documento" value="<?php echo $categoria->Documento?>">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripcion:</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $categoria->Categoria_Equipocol?>">
                            </div>
							
							<div class="form-group">
                                <label for="creacion">Creación:</label>
                                <input type="date" class="form-control" id="creacion" name="creacion" value="<?php echo $categoria->Creacion?>">
                            </div>
							
							
							
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
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
