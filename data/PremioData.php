<?php
/*
* Clase descriptiva para premio
*/
include_once '../../Domain/Premio.php';
include_once 'Connector.php';

class PremioData extends Connector{

	/*Metodos especificos*/
	function getPremioTodosData(){
		return $this->getPremio(-1);
	}

	function getPremioEsData(){
		return $this->getPremio(0);
	}

	function getPremioInData(){
		return $this->getPremio(1);
	}


	/*Metodos generales*/
	private function getPremio($idioma){
		$query = "call ObtenerTodosPremios(" . $idioma . ")";
        $result = $this->exeQuery($query);
        $array = [];
        while ($row = mysqli_fetch_array($result)) {
            $miPremio = new Premio($row['atId'], $row['atNombre'], $row['atDescripcion'], $row['atAno'],
             $row['atNombreImagen'], $row['atIdioma'], $row['atCodigoPremio'] );
            array_push($array, $miPremio);
        }
        return $array;
	}

	/*Insertar premio*/
	function insertarPremioData($premioEs, $premioIn){
		/* Primero se obtiene el nuevo codigo de producto */
        $resultCodigo = $this->exeQuery("select max(atCodigoPremio) from tu_premio");
        $codigoPremio = (mysqli_fetch_array($resultCodigo)[0]) + 1;
        $queryEs = "call InsertarPremio('" . $premioEs->id . "', '" . $premioEs->nombre . "','" .
                $premioEs->descripcion . "', '" . $premioEs->ano . "', '" . $premioEs->nombreImagen . "', '" . $premioEs->idioma . "','" . $codigoPremio . "')";
        
        $queryIn = "call InsertarPremio('" . $premioIn->id . "', '" . $premioIn->nombre . "','" .
                $premioIn->descripcion . "', '" . $premioIn->ano . "', '" . $premioIn->nombreImagen . "', '" . $premioIn->idioma . "','" . $codigoPremio . "')";
        
        $result = $this->exeQuery($queryEs);
        $result = $this->exeQuery($queryIn);
        return $result;		
	}

	function actualizarPremioData($premio){
		$query = "call ActualizarPremio('" . $premio->nombre . "','" .
                $premio->descripcion . "', '" . $premio->ano . "', '" . $premio->nombreImagen . "', " . $premio->idioma . "," . $premio->codigoPremio . ")";
        $result = $this->exeQuery($query);
        return $premio->codigoPremio."k";
	}


	function eliminarPremioData($idCodigoPremio){
		$query = "call EliminarPremio(" . $idCodigoPremio . ")";
        $result = $this->exeQuery($query);
        return $result;
	}


}