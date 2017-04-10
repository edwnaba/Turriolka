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
        <script>
            function eliminar(id, imagen) {
                var url = "../../Business/Premio/EliminarPremio.php";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: "id=" + id + "&imagen=" + imagen,
                    success: function (data)
                    {
                        location.href = './AdministrarPremios.php?success&msg=Eliminación realizada con éxito.';
                    },
                    error: function (data)
                    {
                    }
                });
                return false; // Evitar ejecutar el submit del formulario.
            }
        </script>


        <style type="text/css">

        .item2{
        transition:box-shadow 2s, transform 500ms, filter 500ms ease-in-out; 
        }


        .item2:hover{
        transform: scale(1.05);
        box-shadow: 0px 0px 5px rgba(0,0,0,0.8);
        } 

        .blur{
        filter: blur(3px);
        transform: scale(0.95);
        }

        .mg-10{
            margin-bottom: 10px;
        }
    </style>

    </head>
    <body>
        <!-- topbar ends -->
        <div class="ch-container">
            <div class="row">
                <?php include 'menuAdmin.php'; ?>
                <div id="content" class="col-lg-10 col-sm-10">
                
                    <div class="row">
                        <!-- Mensaje de error o de realizado -->
                        <?php
                        $textError = "";
                        if (isset($_GET['msg'])) {
                            $textError = $_GET['msg'];
                            ?>
                            <div class="col-md-offset-1 col-md-10">
                                <?php
                                if (isset($_GET['result'])) {
                                    ?>
                                    <div class="alert alert-success text-center">
                                        <?php
                                    } else {
                                        ?>
                                        <div class="alert alert-danger text-center">
                                            <?php
                                        }
                                        ?>

                                        <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                        <h4> <?php echo $textError; ?> </h4>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                            <?php
                            include '../../Business/Premio/PremioBusiness.php';
                            $instBusiness = new PremioBusiness();
                            $resultado = $instBusiness->getPremioTodosBusiness();
                            $cont = 0;
                            for ($index = 0; $index < sizeof($resultado); $index = $index + 2) {
                                $cont++;
                                ?>
                                <div class="box col-md-5">
                                    <form method="POST" action="../../Business/Premio/ActualizarPremiosAccion.php" enctype="multipart/form-data" >
                                        <div class="box-inner">
                                            <div class="box-header well" data-original-title="">
                                                <h2><i class="glyphicon glyphicon-th"></i> <?php echo $resultado[$index]->nombre .  " / " . $resultado[$index+1]->nombre ?> </h2>
                                                <div class="box-icon">
                                                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                            class="glyphicon glyphicon-chevron-up"></i></a>
                                                </div>
                                            </div>
                                            <div class="box-content">
                                                <div class="row">

                                                    <!--***************** Columna 1 ******************-->
                                                    <div class="col-md-6">
                                                            <!-- Imagen -->
                                                        <img src="../../img/premios/<?php echo $resultado[$index]->nombreImagen ?>" class="img-responsive item2 img-thumbnail"> <br/><br/>
                                                        <input name="imagen" class="form-control" type="file"><br/> 

                                                        <!-- Nombre español -->
                                                        <span class="badge">Nombre del producto</span>

                                                        <div class="input-group mg-10">
                                                            <span class="input-group-addon" title="Español">Es</span>
                                                            <input name="nombreEs" type="text" title="Español" class="form-control" placeholder="Nombre en Español" value="<?php echo $resultado[$index]->nombre ?>"> <br/> 
                                                        </div>
                                                        
                                                        <!-- Nombre Inglés -->
                                                        <div class="input-group mg-10">
                                                            <span class="input-group-addon" title="Ingles">In</span>
                                                            <input name="nombreIn" title="Ingles" type="text" class="form-control" placeholder="Nombre en Inglés" value="<?php echo $resultado[$index+1]->nombre ?>"> <br/>
                                                        </div>
                                                        
                                                    </div>

                                                    <!--***************** Columna 2 ******************-->
                                                    <div class="col-md-6">

                                                        <!-- Descripción corta -->
                                                        <span class="badge">Descripción</span>

                                                        <!-- Español -->
                                                        <div class="input-group mg-10">
                                                            <span class="input-group-addon" title="Ingles">Es</span>
                                                            <textarea name="descripcionEs" type="text" class="form-control" placeholder="Descripción Español" ><?php echo $resultado[$index]->descripcion ?></textarea>
                                                        </div>

                                                        <!-- Inglés -->
                                                        <div class="input-group mg-10">
                                                            <span class="input-group-addon" title="Ingles">In</span>
                                                            <textarea name="descripcionIn" class="form-control" placeholder="Descripción Ingles" ><?php echo $resultado[$index+1]->descripcion ?></textarea>
                                                        </div>


                                                        <!-- Descripción Larga -->
                                                        <span class="badge">Año</span>

                                                        <!-- Español -->
                                                        <div class="input-group mg-10">
                                                            <span class="input-group-addon" >Español/Inglés</span>
                                                            <input name="ano" type="number" class="form-control" placeholder="Año" value="<?php echo $resultado[$index]->ano ?>">
                                                        </div>


                                                        <!-- Botones -->
                                                        <button type="submit" class="btn btn-primary item2">Actualizar</button>
                                                        <button type="button" onclick="eliminar(<?php echo "'" . $resultado[$index]->codigoPremio . "','" . $resultado[$index]->nombreImagen . "'" ?>)"class="btn btn-primary item2">Eliminar</button>
                                                    </div>  


                                                    <div class="col-md-6">
                                                        <input style="visibility: hidden" name="codigo"  value="<?php echo $resultado[$index]->codigoPremio ?>"> <br/>
                                                        <input style="visibility: hidden" name="imagOriginal"  value="<?php echo $resultado[$index]->nombreImagen ?>"> <br/>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php if(($cont%2) == 0) echo '<div class="clearfix"></div>'?>
                                
                            <?php
                            }
                            ?>
                        </div>          
                    </div>
                </div>
            </div>
            <hr>
            </body>
            </html>
