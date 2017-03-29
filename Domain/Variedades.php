<?php

class Variedades{
    
   public $atId, $atNombre, $atDescripcion, $atNombreImagen, $atCalidad ,
           $atPotencialRendimiento, $atAltura, $atAltitud, $atToleranciaRoya,
           $atNematodos, $atAntrscnosis, $atAnosCosecha, $atRequerimientosNutricionales,
           $atTamanoFruto, $atColor, $atMaduracion, $atRendimientoCereza, $atDensidad, 
           $atInformacionAdicional, $atDerechoPropiedad, $atObtentor, 
           $atdescripcionGenetica, $atFamilia, $atIdioma;
   
    function Variedades($atId, $atNombre, $atDescripcion, $atNombreImagen, $atCalidad, $atPotencialRendimiento, $atAltura, $atAltitud, $atToleranciaRoya, $atNematodos, $atAntrscnosis, $atAnosCosecha, $atRequerimientosNutricionales, $atTamanoFruto, $atColor, $atMaduracion, $atRendimientoCereza, $atDensidad, $atInformacionAdicional, $atDerechoPropiedad, $atObtentor, $atdescripcionGenetica, $atFamilia, $atIdioma) {
       $this->atId = $atId;
       $this->atNombre = $atNombre;
       $this->atDescripcion = $atDescripcion;
       $this->atNombreImagen = $atNombreImagen;
       $this->atCalidad = $atCalidad;
       $this->atPotencialRendimiento = $atPotencialRendimiento;
       $this->atAltura = $atAltura;
       $this->atAltitud = $atAltitud;
       $this->atToleranciaRoya = $atToleranciaRoya;
       $this->atNematodos = $atNematodos;
       $this->atAntrscnosis = $atAntrscnosis;
       $this->atAnosCosecha = $atAnosCosecha;
       $this->atRequerimientosNutricionales = $atRequerimientosNutricionales;
       $this->atTamanoFruto = $atTamanoFruto;
       $this->atColor = $atColor;
       $this->atMaduracion = $atMaduracion;
       $this->atRendimientoCereza = $atRendimientoCereza;
       $this->atDensidad = $atDensidad;
       $this->atInformacionAdicional = $atInformacionAdicional;
       $this->atDerechoPropiedad = $atDerechoPropiedad;
       $this->atObtentor = $atObtentor;
       $this->atdescripcionGenetica = $atdescripcionGenetica;
       $this->atFamilia = $atFamilia;
       $this->atIdioma = $atIdioma;
   }
   function getAtId() {
       return $this->atId;
   }

   function getAtNombre() {
       return $this->atNombre;
   }

   function getAtDescripcion() {
       return $this->atDescripcion;
   }

   function getAtNombreImagen() {
       return $this->atNombreImagen;
   }

   function getAtCalidad() {
       return $this->atCalidad;
   }

   function getAtPotencialRendimiento() {
       return $this->atPotencialRendimiento;
   }

   function getAtAltura() {
       return $this->atAltura;
   }

   function getAtAltitud() {
       return $this->atAltitud;
   }

   function getAtToleranciaRoya() {
       return $this->atToleranciaRoya;
   }

   function getAtNematodos() {
       return $this->atNematodos;
   }

   function getAtAntrscnosis() {
       return $this->atAntrscnosis;
   }

   function getAtAnosCosecha() {
       return $this->atAnosCosecha;
   }

   function getAtRequerimientosNutricionales() {
       return $this->atRequerimientosNutricionales;
   }

   function getAtTamanoFruto() {
       return $this->atTamanoFruto;
   }

   function getAtColor() {
       return $this->atColor;
   }

   function getAtMaduracion() {
       return $this->atMaduracion;
   }

   function getAtRendimientoCereza() {
       return $this->atRendimientoCereza;
   }

   function getAtDensidad() {
       return $this->atDensidad;
   }

   function getAtInformacionAdicional() {
       return $this->atInformacionAdicional;
   }

   function getAtDerechoPropiedad() {
       return $this->atDerechoPropiedad;
   }

   function getAtObtentor() {
       return $this->atObtentor;
   }

   function getAtdescripcionGenetica() {
       return $this->atdescripcionGenetica;
   }

   function getAtFamilia() {
       return $this->atFamilia;
   }

   function getAtIdioma() {
       return $this->atIdioma;
   }

   function setAtId($atId) {
       $this->atId = $atId;
   }

   function setAtNombre($atNombre) {
       $this->atNombre = $atNombre;
   }

   function setAtDescripcion($atDescripcion) {
       $this->atDescripcion = $atDescripcion;
   }

   function setAtNombreImagen($atNombreImagen) {
       $this->atNombreImagen = $atNombreImagen;
   }

   function setAtCalidad($atCalidad) {
       $this->atCalidad = $atCalidad;
   }

   function setAtPotencialRendimiento($atPotencialRendimiento) {
       $this->atPotencialRendimiento = $atPotencialRendimiento;
   }

   function setAtAltura($atAltura) {
       $this->atAltura = $atAltura;
   }

   function setAtAltitud($atAltitud) {
       $this->atAltitud = $atAltitud;
   }

   function setAtToleranciaRoya($atToleranciaRoya) {
       $this->atToleranciaRoya = $atToleranciaRoya;
   }

   function setAtNematodos($atNematodos) {
       $this->atNematodos = $atNematodos;
   }

   function setAtAntrscnosis($atAntrscnosis) {
       $this->atAntrscnosis = $atAntrscnosis;
   }

   function setAtAnosCosecha($atAnosCosecha) {
       $this->atAnosCosecha = $atAnosCosecha;
   }

   function setAtRequerimientosNutricionales($atRequerimientosNutricionales) {
       $this->atRequerimientosNutricionales = $atRequerimientosNutricionales;
   }

   function setAtTamanoFruto($atTamanoFruto) {
       $this->atTamanoFruto = $atTamanoFruto;
   }

   function setAtColor($atColor) {
       $this->atColor = $atColor;
   }

   function setAtMaduracion($atMaduracion) {
       $this->atMaduracion = $atMaduracion;
   }

   function setAtRendimientoCereza($atRendimientoCereza) {
       $this->atRendimientoCereza = $atRendimientoCereza;
   }

   function setAtDensidad($atDensidad) {
       $this->atDensidad = $atDensidad;
   }

   function setAtInformacionAdicional($atInformacionAdicional) {
       $this->atInformacionAdicional = $atInformacionAdicional;
   }

   function setAtDerechoPropiedad($atDerechoPropiedad) {
       $this->atDerechoPropiedad = $atDerechoPropiedad;
   }

   function setAtObtentor($atObtentor) {
       $this->atObtentor = $atObtentor;
   }

   function setAtdescripcionGenetica($atdescripcionGenetica) {
       $this->atdescripcionGenetica = $atdescripcionGenetica;
   }

   function setAtFamilia($atFamilia) {
       $this->atFamilia = $atFamilia;
   }

   function setAtIdioma($atIdioma) {
       $this->atIdioma = $atIdioma;
   }

    
}

