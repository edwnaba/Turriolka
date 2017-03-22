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


                        <form action="../../Business/Producto/ProductoInsertarAccion.php" method="POST" enctype="multipart/form-data" >
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
                                                <input type="text" class="form-control" name="nombreEs" placeholder="Digite el nombre de la variedad" > <br/>
                                            </div> 
                                            <div class="col-md-6">
                                                <textarea class="form-control" id="exampleInputPassword1" name="descripcionEs"  placeholder="Digite la descripción de la variedad"></textarea><br/>
                                            </div>

                                            <div class="col-md-12">
                                                <hr>
                                            </div>
                                            
                                            <div class="col-md-3" class="dropdown">
                                                <p>Potencial de calidad mostrado en altura:</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <select name="a" id="a" class="btn btn-default dropdown-toggle">
                                                   <option value="asd">Muy Bajo</option>
                                                    <option value="asd">Bajo</option>
                                                    <option value="asd">Bueno</option>
                                                    <option value="asd">Muy Bueno</option>
                                                    <option value="asd">Excepcional</option>
                                                </select>
                                                <br>
                                            </div>  

                                            <div class="col-md-3" class="dropdown">
                                                <p>Pontencial de rendimiento</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <select name="a" id="a" class="btn btn-default dropdown-toggle">
                                                    <option value="asd">Bajo</option>
                                                    <option value="asd">Medio</option>
                                                    <option value="asd">Parecido a la Caturra</option>
                                                    <option value="asd">Alta</option>
                                                    <option value="asd">Muy Alta</option>
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
                                                <select name="a" id="a" class="btn btn-default dropdown-toggle">
                                                    <option value="asd">Bajo/Compacto</option>
                                                    <option value="asd">Alto</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>La altitud optima</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <input type="text" class="form-control" name="nombreEs" placeholder="Digite la altitud optima" >
                                                <br> 
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Roya del cafe</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="a" id="a" class="btn btn-default dropdown-toggle">
                                                    <option value="asd">Resistente</option>
                                                    <option value="asd">Tolerante</option>
                                                    <option value="asd">Susceptible</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                            
                                                <p>Nematodos</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="a" id="a" class="btn btn-default dropdown-toggle">
                                                    <option value="asd">Resistente</option>
                                                    <option value="asd">Tolerante</option>
                                                    <option value="asd">Susceptible</option>
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
                                               <select name="a" id="a" class="btn btn-default dropdown-toggle">
                                                    <option value="asd">Resistente</option>
                                                    <option value="asd">Tolerante</option>
                                                    <option value="asd">Susceptible</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                            
                                                <p>Años para la primera cosecha</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="a" id="a" class="btn btn-default dropdown-toggle">
                                                    <option value="asd">Temprana</option>
                                                    <option value="asd">Promedio</option>
                                                    <option value="asd">Tardía</option>
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
                                               <select name="a" id="a" class="btn btn-default dropdown-toggle">
                                                    <option value="asd">Muy Alta</option>
                                                    <option value="asd">Alta</option>
                                                    <option value="asd">Media</option>
                                                    <option value="asd">Baja</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                            
                                                <p>Tamaño del fruto</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="a" id="a" class="btn btn-default dropdown-toggle">
                                                    <option value="asd">Pequeños</option>
                                                    <option value="asd">Promedio</option>
                                                    <option value="asd">Grandes</option>
                                                    <option value="asd">Muy Grandes</option>
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
                                               <select name="a" id="a" class="btn btn-default dropdown-toggle">
                                                    <option value="asd">Verde</option>
                                                    <option value="asd">Bronce Claro</option>
                                                    <option value="asd">Bronce</option>
                                                    <option value="asd">Bronce Oscuro</option>
                                                    <option value="asd">Verde o Bronce</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                            
                                                <p>Maduración de la fruta</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                               <select name="a" id="a" class="btn btn-default dropdown-toggle">
                                                    <option value="asd">Temprana</option>
                                                    <option value="asd">Promedio</option>
                                                    <option value="asd">Tardía</option>
                                                    <option value="asd">Muy Tardía</option>
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
                                               <select name="a" id="a" class="btn btn-default dropdown-toggle">
                                                    <option value="asd">Bajo</option>
                                                    <option value="asd">Promedio</option>
                                                    <option value="asd">Alto</option>
                                                    <option value="asd">Muy Alto</option>
                                                </select>
                                                <br>
                                            </div>

                                            <div class="col-md-1" class="dropdown">
                                            
                                                <p>Densidad de la siembra</p>  
                                            </div>
                                            <div class="col-md-5" class="dropdown">
                                               <select name="a" id="a" class="btn btn-default dropdown-toggle">
                                                    <option value="asd">Similar al Bórbon(3000-4000 plntas por ha)</option>
                                                    <option value="asd">Similar al Hibrido F1(4000-5000 plntas por ha)</option>
                                                    <option value="asd">Similar al Caturra(5000-6000 plntas por ha)</option>
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
                                                <input type="text" class="form-control" name="nombreEs" placeholder="Digite la altitud optima" >
                                                <br> 
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Derecho de propiedad intelectual</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <input type="text" class="form-control" name="nombreEs" placeholder="Digite la altitud optima" >
                                                <br> 
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Obtentor</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <input type="text" class="form-control" name="nombreEs" placeholder="Digite la altitud optima" >
                                                <br> 
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Descripción Genética</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <input type="text" class="form-control" name="nombreEs" placeholder="Digite la altitud optima" >
                                                <br> 
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                            </div>

                                            <div class="col-md-3" class="dropdown">
                                                <p>Familia</p>  
                                            </div>
                                            <div class="col-md-3" class="dropdown">
                                                <input type="text" class="form-control" name="nombreEs" placeholder="Digite la altitud optima" >
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
                             <div class="box col-md-12">
                                <div class="box-inner">
                                    <div class="box-header well" data-original-title="">
                                        <h2><i class="glyphicon glyphicon-th"></i>Ingresar Variedades en Inglés</h2>
                                        <div class="box-icon">
                                            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                                                    class="glyphicon glyphicon-chevron-up"></i></a>
                                        </div>
                                    </div>
                                    <div class="box-content">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="badge">Español</span>
                                                <input type="text" class="form-control" name="nombreEs" placeholder="Digite el nombre del producto en español." > <br/>
                                                <textarea class="form-control" id="exampleInputPassword1" name="descripcionEs"  placeholder="Digite la descripción del producto en español."></textarea><br/>

                                                <span class="badge">Inglés</span>
                                                <input type="text" class="form-control" name="nombreIn" placeholder="Digite el nombre del producto en inglés." > <br/>
                                                <textarea class="form-control" id="exampleInputPassword1" name="descripcionIn" placeholder="Digite la descripción del producto en inglés."></textarea>

                                            </div> 
                                            <div class="col-md-6">
                                                <input type="number" name="precio" class="form-control" placeholder="Digite el precio del producto." > <br/>   
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
