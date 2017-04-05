<?php

include_once './ProductoBusiness.php';
include_once '../Validaciones.php';

$instValidaciones = new Validaciones();
$resultValidaRecibidos = $instValidaciones->validaRecibidos(
        array('nombreEs', 'descripcionCortaEs', 'descripcionLargaEs', 'nombreIn', 'descripcionCortaIn', 'descripcionLargaIn'));

//validar archivo
$resultadoArchivo = $instValidaciones->validarArchivo('archivo');

/* Si se recibieron todos los datos esperados */
if (($resultValidaRecibidos == 1) && ($resultadoArchivo == 1)) {

    $nombreEs = $_POST['nombreEs'];
    $nombreIn = $_POST['nombreIn'];

    $descriCortaEs = $_POST['descripcionCortaEs'];
    $descriCortaIn = $_POST['descripcionCortaIn'];

    $descriLargaEs = $_POST['descripcionLargaEs'];
    $descriLargaIn = $_POST['descripcionLargaIn'];

    /*
     * Una ves que se asegura que se recibieron los datos deseados, se validan campos vacios o
     * datos no numericos en campos numericos. 
     */

    //Se hace el llamado a la funcion que valida campos vacios.
    $resultValidaVacios = $instValidaciones->validaVacios(array($nombreEs, $nombreIn, $descriCortaEs,
        $descriCortaIn, $descriLargaEs, $descriLargaIn));

    //Se interpretan los resultados de las validaciones.
    if (!$resultValidaVacios) {
        header("location: ../../Presentation/Admin/ingresarProductos.php?msg=Todos los datos deben ser ingresados.");
    }else {
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        // validar extensiones
        if ($instValidaciones->validarExtensiones('archivo')) {
            $ruta = "../../img/productos/" . $_FILES['archivo']['name'];
            if (!file_exists($ruta)) {
                $resultado = @move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta);
                if ($resultado) {
                    $productoEs = new Producto(0, $nombreEs, $descriCortaEs, $descriLargaEs, 0, 0, $_FILES['archivo']['name']);
                    $productoIn = new Producto(0, $nombreIn, $descriCortaIn, $descriLargaIn, 0, 0, $_FILES['archivo']['name']);
                    $instBusiness = new ProductoBusiness();
                    //recomendacion insertar como transaccion, si todo se guarda en base de datos (ingles y espa) se notificica exito al usuario,
                    // si ocurre error e nvbase se suprime la imagen copiada en la carpeta y se envia error
                    // preguntar a tavo
                    $result = $instBusiness->insertProductoBusiness($productoEs, $productoIn);

                    header("location: ../../Presentation/Admin/ingresarProductos.php?result=success&msg=Inserción realizada con éxito.");
                } else {
                    header("location: ../../Presentation/Admin/ingresarProductos.php?msg=La imagen no pudo ser ingresada.");
                }
            } else {
                header("location: ../../Presentation/Admin/ingresarProductos.php?msg=No se permite el ingreso porque existe una imagen con el mismo nombre.");
            }
        } else {
            header("location: ../../Presentation/Admin/ingresarProductos.php?msg=El formato del archivo no es permitido. Ingrese una imagen en formato jpg o png.");
        }
    }
} else {
    header("location: ../../Presentation/Admin/ingresarProductos.php?msg=No se recibieron todos los datos esperados. Verifique que todos los campos estén llenos.");
}
?>