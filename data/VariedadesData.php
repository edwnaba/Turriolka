<?php

include_once '../../Domain/Variedades.php';
include_once 'Connector.php';

/**
 * Clase encargada de realizar las consultas en la Base de Datos relacionadas a variedadIn
 */
class VariedadesData extends Connector {
    
    //Insercion es solo una general, por ende no es publico ya que no tiene metodos especificos.
    public function insertVariedadesData($variedadEs, $variedadIn) {


        /* Primero se obtiene el nuevo codigo de Variedades */
        $resultCodigo = $this->exeQuery("select max(atId) from tu_variedad");
        $codigoProducto = (mysqli_fetch_array($resultCodigo)[0]) + 1;
        
        $queryEs = "call insertarVariedad(" . $variedadEs->atId . ", '" . $variedadEs->atNombre . "','" .
                $variedadEs->atDescripcion . "', '" . $variedadEs->atNombreImagen . "', " . $variedadEs->atCalidad . ", " . $variedadEs->atPotencialRendimiento. ", " . $variedadEs->atAltura. ", " . $variedadEs->atAltitud. ", " . $variedadEs->atToleranciaRoya. ", " . $variedadEs->atNematodos. ", " . $variedadEs->atAntrscnosis. ", " . $variedadEs->atAnosCosecha. ", " . $variedadEs->atRequerimientosNutricionales. ", " . $variedadEs->atTamanoFruto. ", '" . $variedadEs->atColor. "', '" . $variedadEs->atMaduracion. "', '" . $variedadEs->atRendimientoCereza. "', '" . $variedadEs->atDensidad. "', '" . $variedadEs->atInformacionAdicional. "', '" . $variedadEs->atDerechoPropiedad. "', '" . $variedadEs->atObtentor. "', '" . $variedadEs->atdescripcionGenetica . "','" . $variedadEs->atFamilia. "'," . $variedadEs->atIdioma . ")";

        
       /*$queryIn = "call insertarVariedad(" . $variedadIn->atId . ", '" . $variedadIn->atNombre . "','" .
                $variedadIn->atDescripcion . "', '" . $variedadIn->atNombreImagen . "', " . $variedadIn->atCalidad . ", " . $variedadIn->atPotencialRendimiento. ", " . $variedadIn->atAltura. ", " . $variedadIn->atAltitud. ", " . $variedadIn->atToleranciaRoya. ", " . $variedadIn->atNematodos. ", " . $variedadIn->atAntrscnosis. ", " . $variedadIn->atAnosCosecha. ", " . $variedadIn->atRequerimientosNutricionales. ", " . $variedadIn->atTamanoFruto. ", '" . $variedadIn->atColor. "', '" . $variedadIn->atMaduracion. "', '" . $variedadIn->atRendimientoCereza. "', '" . $variedadIn->atDensidad. "', '" . $variedadIn->atInformacionAdicional. "', '" . $variedadIn->atDerechoPropiedad. "', '" . $variedadIn->atObtentor. "', '" . $variedadIn->atdescripcionGenetica . "','" . $variedadIn->atFamilia. "'," . $variedadIn->atIdioma . ")";*/


        $result = $this->exeQuery($queryEs);
        //$result = $this->exeQuery($queryIn);
        return $result;
    }


}

?>