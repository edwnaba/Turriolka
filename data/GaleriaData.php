<?php

include_once '../../Domain/Galeria.php';
include_once 'Connector.php';

/**
 * Clase encargada de realizar las consultas en la Base de Datos relacionadas a Productos 
 */
class GaleriaData extends Connector {

    //Insercion es solo una general, por ende no es publico ya que no tiene metodos especificos.
    function ingresarGaleriaData($imagen, $imagenin) {
        /* Primero se obtiene el nuevo codigo de producto */
        $resultCodigo = $this->exeQuery("select max(atcodigoImagen) from tu_galeria");
        $codigoImagen = (mysqli_fetch_array($resultCodigo)[0]) + 1;
        $query = "call IngresarImagenEnGaleria('" . $imagen->nombre . "','" . $imagen->descripcion . "'," . $imagen->idioma . "," . $codigoImagen . ")";
        $result = $this->exeQuery($query);
        $query = "call IngresarImagenEnGaleria('" . $imagenin->nombre . "','" . $imagenin->descripcion . "'," . $imagenin->idioma . "," . $codigoImagen . ")";
        $result = $this->exeQuery($query);
        return $result;
    }

    function eliminarGaleriaData($id) {
        $query = "call EliminarImagenGaleria(" . $id . ")";
        $result = $this->exeQuery($query);
        return $result;
    }

    function obtenerGaleriaData() {
        return $this->obtenerData(0);
    }

    function obtenerImagenesGaleriaData() {
        return $this->obtenerImagenesData(-1);
    }

    function obtenerImagenesGaleriaESData() {
        return $this->obtenerImagenesData(0);
    }

    function obtenerImagenesGaleriaENData() {
        return $this->obtenerImagenesData(1);
    }

    //Obtener
    private function obtenerImagenesData($idioma) {
        $query = "call ObtenerTodosGaleria(" . $idioma . ")";
        $result = $this->exeQuery($query);
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $miProducto = new Galeria($row['atId'], $row['atNombre'], $row['atDescripcion'], $row['atIdioma'], $row['atcodigoImagen']);
            array_push($array, $miProducto);
        }
        return $array;
    }

    //Actualizar
    function actualizarImagenEsData($producto) {
        return $this->actualizarGaleria($producto, 0);
    }

    function actualizarImagenInData($producto) {
        return $this->actualizarGaleria($producto, 1);
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

    //Actualizar
    private function actualizarGaleria($galeria, $idioma) {
        $query = "call ActualizarGaleria('" . $galeria->nombre . "','" . $galeria->descripcion . "'," . $idioma . "," . $galeria->codigoImagen . ")";
        $result = $this->exeQuery($query);
        return $result;
    }

}

?>