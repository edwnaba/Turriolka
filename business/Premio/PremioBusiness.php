<?php

/*
* Clase conectora entre la capa vista y la capa de datos en lo referente a los premios
*/
include_once '../../Data/PremioData.php';

class PremioBusiness extends PremioData{
	
	/*Metodos accesores*/
	function getPremioTodosBusiness(){
		return $this->getPremioTodosData();
	}

	function getPremioEsBusiness(){
		return $this->getPremioEsData();
	}

	function getPremioInBusiness(){
		return $this->getPremioInData();
	}

	/*Eliminacion de premios*/
	function eliminarPremioBusiness($idCodigoPremio){
		return $this->eliminarPremioData($idCodigoPremio);
	}

	/*Ingresar premio*/
	function insertarPremioBusiness($premioEs, $premioIn){
		return $this->insertarPremioData($premioEs, $premioIn);
	}

	function actualizarPremioBusiness($premio){
		return $this->actualizarPremioData($premio);
	}


}