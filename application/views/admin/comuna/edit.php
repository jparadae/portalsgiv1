
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Comunas
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
                        <form action="<?php echo base_url();?>mantenimiento/comuna/update" method="POST">
                            <input type="hidden" value="<?php echo $comuna->idComuna;?>" name="idComuna">
                            <div class="form-group">
                                <label for="Nombre">Nombre:</label>
                                <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $comuna->Nombre?>">
                            </div>
							
							
							<div class="form-group">
                                <label for="estado">Estado:</label>
                                <input type="number_format" class="form-control" id="estado" name="estado" value="<?php echo $comuna->estado?>">
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
