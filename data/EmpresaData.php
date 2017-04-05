<?php

include_once 'Connector.php';
include_once '../../Domain/Empresa.php';

/*
 * Clase destinada a consultas en la Base de Datos 
 * relacionadas a la tabla la_empresa
 */

class EmpresaData extends Connector {
    /*
     * ************* Métodos específicos *************
     */

    //Obtiene los datos de la empresa en español
    function getEmpresaEsData() {
        return $this->getEmpresaData(0);
    }

    //Obtiene los datos de la empresa en ingles
    function getEmpresaInData() {
        return $this->getEmpresaData(1);
    }

    //Actualiza Empresa en español
    function actualizaEmpresaEsData($empresa) {
        return $this->actualizaEmpresaData($empresa, 0);
    }

    //Actualiza Empresa en Ingles
    function actualizaEmpresaInData($empresa) {
        return $this->actualizaEmpresaData($empresa, 1);
    }

    /*
     * ************* Metodos generales *************
     */

    //funcion para obtener todos los datos de la empresa
    private function getEmpresaData($idioma) {
        $query = "select * from tu_empresa where atIdioma = " . $idioma;
        $result = $this->exeQuery($query);
        $miEmpresa = NULL;
        if ($row = mysqli_fetch_array($result)) {
            $miEmpresa = new Empresa(
                $row['atId'], $row['atHistoria'], $row['atQuienesSomos'], $row['atMision'], $row['atVision'],
                $row['atDescripcionProductos'], $row['atDescripcionGaleria'], $row['atDescripcionPremios'], 
                $row['atDireccion'], $row['atCorreo'], $row['atTelefono'], $row['atIdioma']);
        }
        return $miEmpresa;
    }

    //Actualiza la información de la empresa
    private function actualizaEmpresaData($empresa, $idioma) {

        $query = "call ActualizarEmpresa(0, '" . $empresa->historia . "', '" . $empresa->quienesSomos . "', '" .
                $empresa->mision . "', '" . $empresa->vision . "', '" . $empresa->descripcionProductos . "', '" . 
                $empresa->descripcionGaleria . "', '" . $empresa->descripcionPremios . "', '" . $empresa->direccion
                . "', '" . $empresa->correo . "', " . $empresa->telefono .
                ", " . $idioma . ")";

        $result = $this->exeQuery($query);
        return $result;
    }
}
?>