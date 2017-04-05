<?php
/*if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['user'])) {
    
} else {
    header("location: ./administracion.php");
}*/
?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
         <title>Lácteos las Abras</title>
    
        <?php
           include '../../Business/Empresa/EmpresaBusiness.php';
            $instEmpresaBusiness = new EmpresaBusiness();
            $tem = $instEmpresaBusiness->getEmpresaEsBusiness();
        ?>
    </head>

    <body>
        <!-- topbar ends -->
        <div class="ch-container">
            <div class="row">

                <?php include 'menuAdmin.php'; ?>

                <div id="content" class="col-lg-10 col-sm-10">
       

                    <!-- Mensaje de error o de realizado -->
                    <?php
                        $textError = "";
                        if (isset($_GET['msg'])) {
                            $textError = $_GET['msg'];
                    ?>
                            <div class="col-md-offset-1 col-md-10">
                                <div class="alert alert-success text-center">
                                    <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                    <h4> <?php echo $textError; ?> </h4>
                                </div>
                            </div>
                    <?php
                       }
                    ?>

                    <form method="POST" action="../../Business/Empresa/ActualizarEmpresaAccion.php?len=es">
                        <div class="row">

                            <!-- Input no visibles -->
                            <input type="hidden" name="id" value="<?php echo $tem->id ?>" readonly="readonly">
                            <input type="hidden" name="idioma" value="<?php echo $tem->idioma ?>">

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Historia</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="historia"><?php echo $tem->historia ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Quienes Somos</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="quienesSomos" ><?php echo $tem->quienesSomos ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Misión</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="mision" ><?php echo $tem->mision ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Visión</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="vision"  ><?php echo $tem->vision ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Descripción de Productos</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="descripcionProductos" ><?php echo $tem->descripcionProductos ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Descripción Galería</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="descripcionGaleria" ><?php echo $tem->descripcionGaleria ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Descripción Premios</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="descripcionPremios" ><?php echo $tem->descripcionPremios ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Dirección</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="direccion" ><?php echo $tem->direccion ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Correo</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="correo" ><?php echo $tem->correo ?></textarea>
                                            </div>                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="box col-md-6">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Teléfono</h2>

                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="exampleInputPassword1" name="telefono" ><?php echo $tem->telefono ?></textarea>
                                            </div>                                        
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="box col-md-6">
                                <div class="row">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>


                          
                        </div><!--/row-->

                    </form>
                    <!-- content ends -->
                </div><!--/#content.col-md-0-->
            </div><!--/fluid-row-->

        </div>


        <hr>

        


    </body>
</html>
