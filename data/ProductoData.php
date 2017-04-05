<?php

include_once '../../Domain/Producto.php';
include_once 'Connector.php';

/**
 * Clase encargada de realizar las consultas en la Base de Datos relacionadas a Productos 
 */
class ProductoData extends Connector {
    /*
     * ************* Metodos especificos *************
     */

    //Obtener
    function obtenerProductosEsData() {
        return $this->obtenerProductosData(0);
    }

    function obtenerProductosInData() {
        return $this->obtenerProductosData(1);
    }

    function obtenerTodoProductoData() {
        return $this->obtenerProductosData(-1);
    }

    //Actualizar
    function actualizarProductosEsData($producto) {
        return $this->actualizarProducto($producto, 0);
    }

    function actualizarProductosInData($producto) {
        return $this->actualizarProducto($producto, 1);
    }

    /*
     * ************* Metodos generales *************
     */

    //Obtener
    private function obtenerProductosData($idioma) {
        $query = "call ObtenerTodosProductos(" . $idioma . ")";
        $result = $this->exeQuery($query);
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $miProducto = new Producto($row['atId'], $row['atNombre'], $row['atDescripcionCorta'], $row['atDescripcionLarga'], $row['atIdioma'], $row['atcodigoProducto'], $row['atNombreImagen']);
            array_push($array, $miProducto);
        }
        return $array;
    }


/*
* ($id, $nombre, $descripcionCorta, $descripcionLarga, $idioma, $codigoProducto, $nombreImagen)
*/

    //Actualizar
    private function actualizarProducto($producto, $idioma) {
        $query = "call ActualizarProducto('" . $producto->nombre . "', '" . $producto->descripcionCorta . "','" .
                $producto->descripcionLarga . "', " . $idioma . ", " . $producto->codigoProducto . ",'" . $producto->nombreImagen . "')";
        $result = $this->exeQuery($query);
        return $result;
    }

    //Insercion es solo una general, por ende no es publico ya que no tiene metodos especificos.
    function insertProductoData($productoEs, $productoIn) {
        /* Primero se obtiene el nuevo codigo de producto */
        $resultCodigo = $this->exeQuery("select max(atcodigoProducto) from tu_producto");
        $codigoProducto = (mysqli_fetch_array($resultCodigo)[0]) + 1;
        $queryEs = "call InsertarProducto(" . $productoEs->id . ", '" . $productoEs->nombre . "','" .
                $productoEs->descripcionCorta . "', '" . $productoEs->descripcionLarga . "', " . $productoEs->idioma . ", " . $codigoProducto . ",'" . $productoEs->nombreImagen . "')";
        
        $queryIn = "call InsertarProducto(" . $productoIn->id . ", '" . $productoIn->nombre . "','" .
                $productoIn->descripcionCorta . "', '" . $productoIn->descripcionLarga . "', " . $productoIn->idioma . ", " . $codigoProducto . ",'" . $productoEs->nombreImagen . "')";
        $result = $this->exeQuery($queryEs);
        $result = $this->exeQuery($queryIn);
        return $result;
    }

    //Insercion es solo una general, por ende no es publico ya que no tiene metodos especificos.
    function eliminarProductoData($id) {
        $query = "call EliminarProducto(" . $id . ")";
        $result = $this->exeQuery($query);
        return $result;
    }

}

?>