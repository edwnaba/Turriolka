<?php

include_once './VariedadesBusiness.php';
include_once '../Validaciones.php';

/*nombreEs
descripcionEs
calidad
potencial
altura
altitud
tolerancia
nematodos
antracnosis
anos
nutricionales
tamano
color
maduracion
rendimiento
densidad
informacionEs
derechoEs
obtentorEs
geneticaEs
familiaEs*/


$instValidaciones = new Validaciones();
$resultValidaRecibidos = $instValidaciones->validaRecibidos(
        array('nombreEs', 'descripcionEs', 'calidad', 'potencial', 'altura','altitud','tolerancia','nematodos','antracnosis','anos','nutricionales','tamano','color','maduracion','rendimiento','densidad','informacionEs','derechoEs','obtentorEs','geneticaEs','familiaEs'));
//validar archivo
$resultadoArchivo = $instValidaciones->validarArchivo('archivo');


    /*$nombreEs = $_POST['nombreEs'];
    $descripcionEs= $_POST['descripcionEs'];
    $calidad= $_POST['calidad'];
    $potencial= $_POST['potencial'];
    $altura= $_POST['altura'];
    $altitud= $_POST['altitud'];
    $tolerancia= $_POST['tolerancia'];
    $nematodos= $_POST['nematodos'];
    $antracnosis= $_POST['antracnosis'];
    $anos= $_POST['anos'];
    $nutricionales= $_POST['nutricionales'];
    $tamano= $_POST['tamano'];
    $color= $_POST['color'];
    $maduracion= $_POST['maduracion'];
    $rendimiento= $_POST['rendimiento'];
    $densidad= $_POST['densidad'];
    $informacionEs= $_POST['informacionEs'];
    $derechoEs= $_POST['derechoEs'];
    $obtentorEs= $_POST['obtentorEs'];
    $geneticaEs= $_POST['geneticaEs'];
    $familiaEs= $_POST['familiaEs'];*/

    /*echo $nombreEs = $_POST['nombreEs'] . '  -  '.
    $descripcionEs= $_POST['descripcionEs']. '  -  '.
    $calidad= $_POST['calidad']. '  -  '.
    $potencial= $_POST['potencial']. '  -  '.
    $altura= $_POST['altura']. '  -  '.
    $altitud= $_POST['altitud']. '  -  '.
    $tolerancia= $_POST['tolerancia']. '  -  '.
    $nematodos= $_POST['nematodos']. '  -  '.
    $antracnosis= $_POST['antracnosis']. '  -  '.
    $anos= $_POST['anos']. '  -  '.
    $nutricionales= $_POST['nutricionales']. '  -  '.
    $tamano= $_POST['tamano']. '  -  '.
    $color= $_POST['color']. '  -  '.
    $maduracion= $_POST['maduracion']. '  -  '.
    $rendimiento= $_POST['rendimiento']. '  -  '.
    $densidad= $_POST['densidad']. '  -  '.
    $informacionEs= $_POST['informacionEs']. '  -  '.
    $derechoEs= $_POST['derechoEs']. '  -  '.
    $obtentorEs= $_POST['obtentorEs']. '  -  '.
    $geneticaEs= $_POST['geneticaEs']. '  -  '.
    $familiaEs= $_POST['familiaEs'];

    exit();*/




/* Si se recibieron todos los datos esperados */
if (($resultValidaRecibidos == 1) && ($resultadoArchivo == 1)) {
    

    $nombreEs = $_POST['nombreEs'];
    $descripcionEs= $_POST['descripcionEs'];
    $calidad= $_POST['calidad'];
    $potencial= $_POST['potencial'];
    $altura= $_POST['altura'];
    $altitud= $_POST['altitud'];
    $tolerancia= $_POST['tolerancia'];
    $nematodos= $_POST['nematodos'];
    $antracnosis= $_POST['antracnosis'];
    $anos= $_POST['anos'];
    $nutricionales= $_POST['nutricionales'];
    $tamano= $_POST['tamano'];
    $color= $_POST['color'];
    $maduracion= $_POST['maduracion'];
    $rendimiento= $_POST['rendimiento'];
    $densidad= $_POST['densidad'];
    $informacionEs= $_POST['informacionEs'];
    $derechoEs= $_POST['derechoEs'];
    $obtentorEs= $_POST['obtentorEs'];
    $geneticaEs= $_POST['geneticaEs'];
    $familiaEs= $_POST['familiaEs'];

    /*
     * Una ves que se asegura que se recibieron los datos deseados, se validan campos vacios o
     * datos no numericos en campos numericos. 
     */

    //Se hace el llamado a la funcion que valida campos vacios.
    $resultValidaVacios = $instValidaciones->validaVacios(array($nombreEs, $descripcionEs, $calidad,$potencial,
    $altura,  $altitud, $tolerancia, $nematodos, $antracnosis,$anos,$nutricionales, $tamano, $color,
    $maduracion, $rendimiento, $densidad, $informacionEs, $derechoEs,$obtentorEs,$geneticaEs,$familiaEs));

    //Se hace el llamado a la funcion que valida campos numericos.	
    //$resultValidaNumericos = $instValidaciones->validaNumericos(array($precio));

    //Se interpretan los resultados de las validaciones.
    if (!$resultValidaVacios) {
        header("location: ../../Presentation/Admin/ingresarVariedades.php?msg=Todos los datos deben ser ingresados.");
     }else {
        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        // validar extensiones
        if ($instValidaciones->validarExtensiones('archivo')) {
            $ruta = "../../Presentation/Admin/img/variedadesimg/" . $_FILES['archivo']['name'];
            if (!file_exists($ruta)) {
                $resultado = @move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta);
                if ($resultado) {


                    $productoEs = new Variedades(0, $nombreEs, $descripcionEs, $_FILES['archivo']['name'], $calidad, $potencial, $altura,  $altitud, $tolerancia, $nematodos, $antracnosis, $anos, $nutricionales, $tamano, $color, $maduracion, $rendimiento, $densidad, $informacionEs, $derechoEs, $obtentorEs, $geneticaEs, $familiaEs,0);



                   // $productoIn = new Variedades(0, $nombreIn, $precio, $descripcionIn, 1, 4, $_FILES['files']['files']);
                    $instBusiness = new VariedadesBusiness();
                    //recomendacion insertar como transaccion, si todo se guarda en base de datos (ingles y espa) se notificica exito al usuario,
                    // si ocurre error e nvbase se suprime la imagen copiada en la carpeta y se envia error
                    // preguntar a tavo
                    $result = $instBusiness->insertVariedadBusiness($productoEs, $productoEs);

                    header("location: ../../Presentation/Admin/ingresarVariedades.php?result=success&msg=Inserción realizada con éxito.");
                } else {
                    header("location: ../../Presentation/Admin/ingresarVariedades.php?msg=La imagen no pudo ser ingresada.");
                }
            } else {
                header("location: ../../Presentation/Admin/ingresarVariedades.php?msg=No se permite el ingreso porque existe una imagen con el mismo nombre.");
            }
        } else {
            header("location: ../../Presentation/Admin/ingresarVariedades.php?msg=El formato del archivo no es permitido. Ingrese una imagen en formato jpg o png.");
        }
    }
} else {
    header("location: ../../Presentation/Admin/ingresarVariedades.php?msg=No se recibieron todos los datos esperados. Verifique que todos los campos estén llenos.");
}

?>