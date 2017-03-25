<?php

/**
 * Clase descriptiva de Producto
 */
class Producto {

    public $id;
    public $nombre;
    public $descripcionCorta;
    public $descripcionLarga;
    public $idioma;
    public $codigoProducto;
    public $nombreImagen;

    function Producto($id, $nombre, $descripcionCorta, $descripcionLarga, $idioma, $codigoProducto, $nombreImagen) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcionCorta = $descripcionCorta;
        $this->descripcionLarga = $descripcionLarga;
        $this->idioma = $idioma;
        $this->codigoProducto = $codigoProducto;
        $this->nombreImagen = $nombreImagen;
    }

}

?>