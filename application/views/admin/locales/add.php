
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Sucursales Monitoreados
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
                        <form action="<?php echo base_url();?>mantenimiento/locales/store" method="POST">
                            <div class="form-group">
                                <label for="numero_estable_sgii">Identificador Monitoreo SGI:</label>
                                <input type="text" class="form-control" id="numero_estable_sgii" name="numero_estable_sgii">
                            </div>
							<div class="form-group">
                                <label for="nombre_sucursal">Nombre Sucursal:</label>
                                <input type="text" class="form-control" id="nombre_sucursal" name="nombre_sucursal">
                            </div>
							<div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input type="text" class="form-control" id="direccion" name="direccion">
                            </div>
							<div class="form-group">
                                <label for="nombreciudad">Ciudad:</label>
                                <input type="text" class="form-control" id="nombreciudad" name="nombreciudad">
                            </div>
							
							
							
							
                            <div class="form-group">
                                <label for="nombrecomuna">Comuna:</label>
                                <input type="text" class="form-control" id="nombrecomuna" name="nombrecomuna">
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
