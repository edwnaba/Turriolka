<?php

/**
 * Clase descriptiva de Premio 
 * 
 * @author Gustavo
 */
class Premio {
    public $id;
    public $nombre;
    public $descripcion;
    public $ano;
    public $nombreImagen;
    public $idioma;
    
    public function Empresa($id, $nombre, $descripcion, $ano, $nombreImagen, $idioma){

        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->ano = $ano;
        $this->nombreImagen = $nombreImagen;
        $this->idioma = $idioma;
    }
}