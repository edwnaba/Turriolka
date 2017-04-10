<?php

include_once './PremioBusiness.php';
include_once '../Validaciones.php';

$instValidaciones = new Validaciones();
$resultValidaRecibidos = $instValidaciones->validaRecibidos(
        array('nombreEs', 'nombreIn', 'descripcionEs', 'descripcionIn', 'ano', 'codigo'));

/* Si se recibieron todos los datos esperados */
if (($resultValidaRecibidos == 1)) {

    $nombreEs = $_POST['nombreEs'];
    $nombreIn = $_POST['nombreIn'];

    $descripcionEs = $_POST['descripcionEs'];
    $descripcionIn = $_POST['descripcionIn'];

    $ano = $_POST['ano'];

    $codigo = $_POST['codigo'];

    /*
     * Una ves que se asegura que se recibieron los datos deseados, se validan campos vacios o
     * datos no numericos en campos numericos. 
     */

    //Se hace el llamado a la funcion que valida campos vacios.
    $resultValidaVacios = $instValidaciones->validaVacios(array($nombreEs, $nombreIn, $descripcionEs,
        $descripcionIn, $ano,$codigo));

    //Se interpretan los resultados de las validaciones.
    if (!$resultValidaVacios) {
        header("location: ../../Presentation/Admin/AdministrarPremios.php?msg=Todos los datos deben ser ingresados.");
    } else {

        /******* validar archivo ********/
        if ($instValidaciones->validarArchivo('imagen')) {

            /* validar extensiones */
            if ($instValidaciones->validarExtensiones('imagen')) {
                $ruta = "../../img/premios/" . $_FILES['imagen']['name'];
                if (!file_exists($ruta)) {
                    unlink("../../img/premios/" . $_POST['imagOriginal']);
                    $resultado = @move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                    if ($resultado) {
                        $premioEs = new Premio(0, $nombreEs, $descripcionEs, $ano, $_FILES['imagen']['name'], 0, $codigo);
                        $premioIn = new Premio(0, $nombreIn, $descripcionIn, $ano, $_FILES['imagen']['name'], 1,$codigo);
                        $instBusiness = new PremioBusiness();
                        $instBusiness->actualizarPremioBusiness($premioEs);
                        $instBusiness->actualizarPremioBusiness($premioIn);

                        header("location: ../../Presentation/Admin/AdministrarPremios.php?result=success&msg=Inserción realizada con éxito.");
                    } else {
                        header("location: ../../Presentation/Admin/AdministrarPremios.php?msg=La imagen no pudo ser ingresada.");
                    }
                } else {
                    header("location: ../../Presentation/Admin/AdministrarPremios.php?msg=No se permite el ingreso porque existe una imagen con el mismo nombre.");
                }
            } else {
                header("location: ../../Presentation/Admin/AdministrarPremios.php?msg=El formato del archivo no es permitido. Ingrese una imagen en formato jpg o png.");
            }
        } else {
            $premioEs = new Premio(0, $nombreEs, $descripcionEs, $ano, $_POST['imagOriginal'], 0, $codigo);
            $premioIn = new Premio(0, $nombreIn, $descripcionIn, $ano, $_POST['imagOriginal'], 1,$codigo);
            $instBusiness = new PremioBusiness();
            $instBusiness->actualizarPremioBusiness($premioEs);
            $result = $instBusiness->actualizarPremioBusiness($premioIn);
            header("location: ../../Presentation/Admin/AdministrarPremios.php?result=success&msg=Actualización realizada con éxito.->" . $result);
        }
    }
} else {
    header("location: ../../Presentation/Admin/AdministrarPremios.php?msg=No se recibieron todos los datos esperados.");
}
?>