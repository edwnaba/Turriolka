<?php

/**
 * Clase descriptiva de Producto
 */
class Producto {

    public $id;
    public $nombre;
    public $precio;
    public $descripcion;
    public $idioma;
    public $codigoProducto;
    public $nombreImagen;

    function Producto($id, $nombre, $precio, $descripcion, $idioma, $codigoProducto, $nombreImagen) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->idioma = $idioma;
        $this->codigoProducto = $codigoProducto;
        $this->nombreImagen = $nombreImagen;
    }

}

?>