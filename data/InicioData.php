<?php

include_once '../../Domain/Inicio.php';
include_once 'Data.php';

/**
 * Clase encargada de realizar las consultas en la Base de Datos relacionadas a Productos 
 */
class InicioData extends Data {

    //Insercion es solo una general, por ende no es publico ya que no tiene metodos especificos.
    function ingresarInicioData($imagen) {
      
        $query = "call IngresarImagenDeInicio('" . $imagen->nombre . "'," . $imagen->tipo . ")";
        $result = $this->exeQuery($query);
        return $result;
    }

    function eliminarInicioData($id) {
        $query = "call EliminarImagenDeInicio(" . $id . ")";
        $result = $this->exeQuery($query);
        return $result;
    }

    function obtenerInicioData() {
        return $this->obtenerData(0);
    }

    function obtenerData($tipo) {
        $query = "call ObtenerImagenesInicio(" . $tipo . ")";
        $result = $this->exeQuery($query);
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $image = new Inicio($row['atId'], $row['atNombre'], $row['atTipo']);
            array_push($array, $image);
        }
        return $array;
    }

}

?>