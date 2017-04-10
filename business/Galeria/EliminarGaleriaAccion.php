<?php

include_once 'GaleriaBusiness.php';
$instGaleriaBusiness = new GaleriaBusiness();
/* Se valida el id */
if (isset($_GET['id']) && $_GET['id'] != "") {
    $result = $instGaleriaBusiness->eliminarGaleriaBusiness($_GET['id']);
    if ($result) {
        unlink("../../img/Gallery/" . $_POST['srcImage']);
        header("location: ../../Presentation/Admin/actualizarGaleria.php?msg=La imagen ha sido eliminada con éxito");
    } else {
    	header("location: ../../Presentation/Admin/actualizarGaleria.php?msg=No se ha logrado eliminar.");
    }
} else {
    header("location: ../../Presentation/Admin/actualizarGaleria.php?msg=No se ha logrado eliminar.");
}
?>