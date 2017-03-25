<?php

include_once './ProductoBusiness.php';
include_once '../Validaciones.php';

$instValidaciones = new Validaciones();
$resultValidaRecibidos = $instValidaciones->validaRecibidos(
        array('nombreEs', 'nombreIn', 'descriCortaEs', 'descriCortaIn', 'descriLargaEs', 'descriLargaIn', 'codigo'));

/* Si se recibieron todos los datos esperados */
if (($resultValidaRecibidos == 1)) {

    $nombreEs = $_POST['nombreEs'];
    $nombreIn = $_POST['nombreIn'];

    $descriCortaEs = $_POST['descriCortaEs'];
    $descriCortaIn = $_POST['descriCortaIn'];

    $descriLargaEs = $_POST['descriLargaEs'];
    $descriLargaIn = $_POST['descriLargaIn'];

    $codigo = $_POST['codigo'];

    /*
     * Una ves que se asegura que se recibieron los datos deseados, se validan campos vacios o
     * datos no numericos en campos numericos. 
     */

    //Se hace el llamado a la funcion que valida campos vacios.
    $resultValidaVacios = $instValidaciones->validaVacios(array($nombreEs, $nombreIn, $descriCortaEs,
        $descriCortaIn, $descriLargaEs, $descriLargaIn,$codigo));

    //Se interpretan los resultados de las validaciones.
    if (!$resultValidaVacios) {
        header("location: ../../Presentation/Admin/administrarProductos.php?msg=Todos los datos deben ser ingresados.");
    } else {

        /******* validar archivo ********/
        if ($instValidaciones->validarArchivo('imagen')) {

            /* validar extensiones */
            if ($instValidaciones->validarExtensiones('imagen')) {
                $ruta = "../../img/productos/" . $_FILES['imagen']['name'];
                if (!file_exists($ruta)) {

                    unlink("../../img/productos/" . $_POST['imagOriginal']);
                    $resultado = @move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                    if ($resultado) {
                        $productoEs = new Producto(0, $nombreEs, $descriCortaEs, $descriLargaEs, 0, $codigo, $_FILES['imagen']['name']);
                        $productoIn = new Producto(0, $nombreIn, $descriCortaIn, $descriLargaIn, 0, $codigo, $_FILES['imagen']['name']);
                        $instBusiness = new ProductoBusiness();
                        $instBusiness->actualizarProductosEsBusiness($productoEs);
                        $instBusiness->actualizarProductosInBusiness($productoIn);

                        header("location: ../../Presentation/Admin/administrarProductos.php?result=success&msg=Inserción realizada con éxito.");
                    } else {
                        header("location: ../../Presentation/Admin/administrarProductos.php?msg=La imagen no pudo ser ingresada.");
                    }
                } else {
                    header("location: ../../Presentation/Admin/administrarProductos.php?msg=No se permite el ingreso porque existe una imagen con el mismo nombre.");
                }
            } else {
                header("location: ../../Presentation/Admin/administrarProductos.php?msg=El formato del archivo no es permitido. Ingrese una imagen en formato jpg o png.");
            }
        } else {
            $productoEs = new Producto(0, $nombreEs, $descriCortaEs, $descriLargaEs, 0, $codigo, $_POST['imagOriginal']);
            $productoIn = new Producto(0, $nombreIn, $descriCortaIn, $descriLargaIn, 0, $codigo, $_POST['imagOriginal']);
            $instBusiness = new ProductoBusiness();
            $instBusiness->actualizarProductosEsBusiness($productoEs);
            $instBusiness->actualizarProductosInBusiness($productoIn);
            header("location: ../../Presentation/Admin/administrarProductos.php?result=success&msg=Actualización realizada con éxito.");
        }
    }
} else {
    header("location: ../../Presentation/Admin/administrarProductos.php?msg=No se recibieron todos los datos esperados.");
}
?>