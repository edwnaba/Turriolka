<?php 
include_once '../../Data/VariedadesData.php';

/**
* Clase encargada de conectar la capa de presentacion con la capa de
* Datos, relacionada a Productos.
*/
class VariedadesBusiness extends VariedadesData
{

	//*********Insertar Productos*********
	function insertVariedadBusiness($variedadEs, $variedadIn){
		return $this->insertVariedadesData($variedadEs, $variedadIn);
	}
}
?>