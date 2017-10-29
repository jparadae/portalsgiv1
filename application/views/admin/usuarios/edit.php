
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Usuarios
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
                        <form action="<?php echo base_url();?>mantenimiento/usuarios/update" method="POST">
                            <input type="hidden" value="<?php echo $usuario->idUsuario;?>" name="idUsuario">
                            <div class="form-group">
                                <label for="nombe">Nombre:</label>
                                <input type="text" class="form-control" id="nombe" name="nombe" value="<?php echo $usuario->nombe?>">
                            </div>
							
							
							                     <div class="form-group">
                                <label for="apellido">Apellido:</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $usuario->apellido?>">
                            </div>
							
							
							                            <div class="form-group">
                                <label for="username">Usuario:</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo $usuario->username?>">
                            </div>
							
							
							                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="text" class="form-control" id="password" name="password" value="<?php echo $usuario->password?>">
                            </div>
                            <div class="form-group">
                                <label for="id_rol">Rol:</label>
                                <input type="text" class="form-control" id="id_rol" name="id_rol" value="<?php echo $usuario->id_rol?>">
                            </div>
							
							<div class="form-group">
                                <label for="correo">Correo:</label>
                                <input type="mail" class="form-control" id="correo" name="correo" value="<?php echo $usuario->correo?>">
                            </div>
							
							<div class="form-group">
                                <label for="fecha_ingreso">Fecha Ingreso:</label>
                                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" value="<?php echo $usuario->fecha_ingreso?>">
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
