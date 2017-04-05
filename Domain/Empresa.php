<?php

/**
 * Clase descriptiva de Empresa 
 * 
 * @author Gustavo
 */
class Empresa {
    public $id;
    public $historia;
    public $quienesSomos;
    public $mision;
    public $vision;
    public $descripcionProductos;
    public $descripcionGaleria;
    public $descripcionPremios;
    public $direccion;
    public $correo;
    public $telefono;
    public $idioma;
    
    public function Empresa($id, $historia, $quienesSomos, $mision, $vision, $descripcionProductos,
        $descripcionGaleria, $descripcionPremios, $direccion, $correo, $telefono, $idioma){

        $this->id = $id;
        $this->historia = $historia;
        $this->quienesSomos = $quienesSomos;
        $this->mision = $mision;
        $this->vision = $vision;
        $this->descripcionProductos = $descripcionProductos;
        $this->descripcionGaleria = $descripcionGaleria;
        $this->descripcionPremios = $descripcionPremios;
        $this->direccion = $direccion;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->idioma = $idioma;
    }
}