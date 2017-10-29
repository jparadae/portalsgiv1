
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Equipo
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
                        <form action="<?php echo base_url();?>mantenimiento/equipos/store" method="POST">
                            <div class="form-group">
                                <label for="Nombre">Nombre:</label>
                                <input type="text" class="form-control" id="Nombre" name="Nombre">
                            </div>
							<div class="form-group">
                                <label for="codigo_servicio">Código Servicio:</label>
                                <input type="text" class="form-control" id="codigo_servicio" name="codigo_servicio">
                            </div>
							<div class="form-group">
                                <label for="descripcion">Descripcion:</label>
                                <input type="text" class="form-control" id="descripcion" name="descripcion">
                            </div>
							<div class="form-group">
                                <label for="categoria">Categoría:</label>
                                <input type="text" class="form-control" id="categoria" name="categoria">
                            </div>
							
							
                            <div class="form-group">
                                <label for="idMarca">Marca:</label>
                                <input type="text" class="form-control" id="idMarca" name="idMarca">
                            </div>
							
							<div class="form-group">
                                <label for="modelo">Modelo:</label>
                                <input type="text" class="form-control" id="modelo" name="modelo">
                            </div>
							
							    <div class="form-group">
                                <label for="serie">Serie:</label>
                                <input type="text" class="form-control" id="serie" name="serie">
                            </div>
							
							<div class="form-group">
                                <label for="habilitar_monitoreo">Monitoereo Habilitado:</label>
                                <input type="text" class="form-control" id="habilitar_monitoreo" name="habilitar_monitoreo">
                            </div>
					<div class="form-group">
                                <label for="ubicacion">Ubicación:</label>
                                <input type="text" class="form-control" id="ubicacion" name="ubicacion">
                            </div>
							
							<div class="form-group">
                                <label for="eestablecimiento">Sucursal:</label>
                                <input type="text" class="form-control" id="eestablecimiento" name="eestablecimiento">
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
