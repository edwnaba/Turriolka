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
                                    <p> <?php echo $textError; ?> </p>
                                </div>
                            </div>
                            <?php
                        }
                        ?>


                        <form action="../../Business/Variedades/VariedadesInsertAccion.php" method="POST" enctype="multipart/form-data" >
                            <div class="box col-md-12">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Ingresar Variedades en Español</h2>
                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nombreEs" id="nombreEs" placeholder="Digite el nombre de la variedad" > <br/>
                                            </div> 
                                            <div class="col-md-6">
                                                <textarea class="form-control" id="descripcionEs" name="descripcionEs"  placeholder="Digite la descripción de la variedad"></textarea><br/>
                                            </div>

                                            <div class="col-md-12">
                                                <hr>
                                            </div>
                                            
                                            <div class="col-md-3" class="dropdown">
                                                <p>Potencial de calidad mostrado en altura:</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <select name="calidad" id="calidad" class="btn btn-default dropdown-toggle">
                                                    <option value="1">Muy Bajo</option>
                                                    <option value="2">Bajo</option>
                                                    <option value="3">Bueno</option>
                                                    <option value="4">Muy Bueno</option>
                                                    <option value="5">Excepcional</option>
                                                </select>
                                                <br>
                                            </div>  

                                            <div class="col-md-3" class="dropdown">
                                                <p>Pontencial de rendimiento</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <select name="potencial" id="potencial" class="btn btn-default dropdown-toggle">
                                                    <option value="1">Bajo</option>
                                                    <option value="2">Medio</option>
                                                    <option value="3">Parecido a la Caturra</option>
                                                    <option value="4">Alta</option>
                                                    <option value="5">Muy Alta</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div class="col-md-12">
                                                <hr>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Altura</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <select name="altura" id="altura" class="btn btn-default dropdown-toggle">
                                                    <option value="1">Bajo/Compacto</option>
                                                    <option value="2">Alto</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>La altitud optima</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <input type="text" class="form-control" name="altitud" id="altitud" placeholder="Digite la altitud optima" >
                                                <br> 
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Roya del cafe</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="tolerancia" id="tolerancia" class="btn btn-default dropdown-toggle">
                                                    <option value="1">Resistente</option>
                                                    <option value="2">Tolerante</option>
                                                    <option value="3">Susceptible</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                            
                                                <p>Nematodos</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="nematodos" id="nematodos" class="btn btn-default dropdown-toggle">
                                                    <option value="1">Resistente</option>
                                                    <option value="2">Tolerante</option>
                                                    <option value="3">Susceptible</option>
                                                </select>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Antracnosis de la cereza(CBD)</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="antracnosis" id="antracnosis" class="btn btn-default dropdown-toggle">
                                                    <option value="1">Resistente</option>
                                                    <option value="2">Tolerante</option>
                                                    <option value="3">Susceptible</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                            
                                                <p>Años para la primera cosecha</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="anos" id="anos" class="btn btn-default dropdown-toggle">
                                                    <option value="1">Temprana</option>
                                                    <option value="2">Promedio</option>
                                                    <option value="3">Tardía</option>
                                                </select>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Requerimientos nutricionales</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="nutricionales" id="nutricionales" class="btn btn-default dropdown-toggle">
                                                    <option value="1">Muy Alta</option>
                                                    <option value="2">Alta</option>
                                                    <option value="3">Media</option>
                                                    <option value="4">Baja</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                            
                                                <p>Tamaño del fruto</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="tamano" id="tamano" class="btn btn-default dropdown-toggle">
                                                    <option value="1">Pequeños</option>
                                                    <option value="2">Promedio</option>
                                                    <option value="3">Grandes</option>
                                                    <option value="4">Muy Grandes</option>
                                                </select>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Color del brote de las hojas</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="color" id="color" class="btn btn-default dropdown-toggle">
                                                    <option value="Verde">Verde</option>
                                                    <option value="Bronce Claro">Bronce Claro</option>
                                                    <option value="Bronce">Bronce</option>
                                                    <option value="Bronce Oscuro">Bronce Oscuro</option>
                                                    <option value="Verde o Bronce">Verde o Bronce</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                            
                                                <p>Maduración de la fruta</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="maduracion" id="maduracion" class="btn btn-default dropdown-toggle">
                                                    <option value="Temprana">Temprana</option>
                                                    <option value="Promedio">Promedio</option>
                                                    <option value="Tardía">Tardía</option>
                                                    <option value="Muy Tardía">Muy Tardía</option>
                                                </select>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Rendimiento de la cereza a grano pergamino</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="rendimiento" id="rendimiento" class="btn btn-default dropdown-toggle">
                                                    <option value="Bajo">Bajo</option>
                                                    <option value="Promedio">Promedio</option>
                                                    <option value="Alto">Alto</option>
                                                    <option value="Muy Alto">Muy Alto</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div class="col-md-1" class="dropdown">
                                            
                                                <p>Densidad de la siembra</p>  
                                            </div>
                                            <div class="col-md-5" class="dropdown">
                                               <select name="densidad" id="densidad" class="btn btn-default dropdown-toggle">
                                                    <option value="1">Similar al Bórbon(3000-4000 plntas por ha)</option>
                                                    <option value="2">Similar al Hibrido F1(4000-5000 plntas por ha)</option>
                                                    <option value="3">Similar al Caturra(5000-6000 plntas por ha)</option>
                                                </select>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Información agronómica adicional</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <input type="text" class="form-control" name="informacionEs" id="informacionEs" placeholder="Digite la altitud optima" >
                                                <br> 
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Derecho de propiedad intelectual</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <input type="text" class="form-control" name="derechoEs"  id="derechoEs" placeholder="Digite la altitud optima" >
                                                <br> 
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Obtentor</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <input type="text" class="form-control" name="obtentorEs" id="obtentorEs" placeholder="Digite la altitud optima" >
                                                <br> 
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Descripción Genética</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <input type="text" class="form-control" name="geneticaEs" id="geneticaEs" placeholder="Digite la altitud optima" >
                                                <br> 
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Familia</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <input type="text" class="form-control" name="familiaEs" id="familiaEs" placeholder="Digite la altitud optima" >
                                                <br> 
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                            </div>




                                            <div class="col-md-6">
                                                <!--<img src="img/gal7.png" class="img-responsive"> <br/><br/>-->
                                                <input type="file" id="files" name="archivo" />
                                                <br />
                                                <output id="list" ></output>
                                                <br />
                                                <button type="submit" class="btn btn-primary">Ingresar</button>
                                                <!--<button type="submit" class="btn btn-primary">Eliminar</button>-->
                                            </div>      


                                        </div>

                                    </div>
                                </div>
                            </div>
                            


                        </form>
                    </div><!--/row-->



                    <!-- content ends -->
                </div><!--/#content.col-md-0-->
            </div><!--/fluid-row-->

        </div>


        <hr>

        <script>
            function archivo(evt) {
                var files = evt.target.files; // FileList object

                // Obtenemos la imagen del campo "file".
                for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }

                    var reader = new FileReader();

                    reader.onload = (function (theFile) {
                        return function (e) {
                            // Insertamos la imagen
                            document.getElementById("list").innerHTML = ['<img class="thumb img-responsive" style=" width: 100%; height: 100% " src="', e.target.result, '" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);

                    reader.readAsDataURL(f);
                }
            }

            document.getElementById('files').addEventListener('change', archivo, false);
        </script>

    </body>
</html>
