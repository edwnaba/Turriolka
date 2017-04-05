<?php

	include './EmpresaBusiness.php';
	include '../Validaciones.php';

	$instValidaciones = new Validaciones();

	$resultValidaRecibidos = $instValidaciones->validaRecibidos(
		array('id','historia','quienesSomos','descripcionProductos',
			'descripcionGaleria','direccion','correo',
			'telefono','descripcionPremios','mision','vision','idioma')
		);

	/*Si se recibieron todos los datos esperados*/
	if ($resultValidaRecibidos) {
		$id = $_POST['id'];
		$historia = $_POST['historia'];
		$quienesSomos = $_POST['quienesSomos'];	
		$descripcionProductos = $_POST['descripcionProductos'];
		$descripcionGaleria = $_POST['descripcionGaleria'];
		$direccion = $_POST['direccion'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		$descripcionPremios = $_POST['descripcionPremios'];
		$mision = $_POST['mision'];
		$vision = $_POST['vision'];
		$idioma = $_POST['idioma'];

		/*
		* Una ves que se asegura que se recibieron los datos deseados, se validan campos vacios o
		* datos no numericos en campos numericos. 
		*/

		//Se hace el llamado a la funcion que valida campos vacios.
		$resultValidaVacios = $instValidaciones->validaVacios(
			array($id, $historia, $quienesSomos, $descripcionProductos, $descripcionGaleria,
				$direccion, $correo, $telefono, $descripcionPremios, $mision,
				$vision, $idioma));
			
		//Se hace el llamado a la funcion que valida campos numericos.	
		$resultValidaNumericos = $instValidaciones->validaNumericos(array($telefono));

		//Se interpretan los resultados de las validaciones.
		if(!$resultValidaVacios){
			redireccionarConResultado("Todos los datos deben ser ingresados.");
		}elseif (!$resultValidaNumericos) {
			redireccionarConResultado("ERROR de formato, asegurese de ingresar solo números en los campos numéricos.");
		}else{
			/*Si se recibieron todos los datos, ninguno esta vacio*/
			$empresa = new Empresa($id, $historia, $quienesSomos, $mision, $vision, $descripcionProductos,
        $descripcionGaleria, $descripcionPremios, $direccion, $correo, $telefono, $idioma);

			$instBusiness = new EmpresaBusiness();
			if(isset($_GET['len']) && $_GET['len'] == 'es'){
				$result = $instBusiness->actualizaEmpresaEsBusiness($empresa);
				redireccionarConResultado("Actualización realizada con éxito.");
			}else{
				$result = $instBusiness->actualizaEmpresaInData($empresa);
				redireccionarConResultado("Actualización realizada con éxito.");
			}
		}
	}
	else header("location: ../../Presentation/Admin/empresaEspanol.php?msg=No se recibieron todos los datos esperados.");


	function redireccionarConResultado($respuesta){
		if(isset($_GET['len']) && $_GET['len'] == 'es'){
				header("location: ../../Presentation/Admin/empresaEspanol.php?msg=".$respuesta);
		}else{
			header("location: ../../Presentation/Admin/empresaIngles.php?msg=".$respuesta);
		}
	} 
?>