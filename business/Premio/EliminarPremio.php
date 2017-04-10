<?php

include_once './PremioBusiness.php';
include_once '../Validaciones.php';
$instValidaciones = new Validaciones();
$resultValidaRecibidos = $instValidaciones->validaRecibidos(array('id', 'imagen'));
if ($resultValidaRecibidos) {
    $instBusiness = new PremioBusiness();
    $result = $instBusiness->eliminarPremioBusiness($_POST['id']);
    unlink("../../img/premios/". $_POST['imagen']);
    return true;
//    $result = $instBusiness->eliminarProductoBusiness($_POST['id']);
//    header("location: ../../Presentation/Admin/administrarProductos.php?msg=Actualizacion realizada con exito");
} else {
//    header("location: ../../Presentation/Admin/administrarProductos.php?msg=No se recibieron todos los datos esperados");
    return false;
}