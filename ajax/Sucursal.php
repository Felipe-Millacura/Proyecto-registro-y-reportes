<?php
	include_once('../entidad/Sucursal.php');
	if(isset($_POST['metodo']) && $_POST['metodo'] == "grabar") // BOTÓN PRESIONADO
	{
		if(!$_POST['txtNombre'])
			echo "No especifico nombre";
		else
		{
			$sucursal = new sucursal();
			$sucursal->setId($_POST['txtId']);
			$sucursal->setNombre($_POST['txtNombre']);
			$sucursal->setActivo(isset($_POST['chkActivo'])?1:0);
			$res = $sucursal->grabar();
			if($res == 1)
				echo 'Guardado con éxito';
			else
				echo 'Error en la ejecución de la solicitud';
		}		
	}
	else if(isset($_POST['metodo']) && $_POST['metodo'] == "listar")  // BOTÓN PRESIONADO
	{
		$sucursal = new sucursal();
		$sucursal->setNombre($_POST['txtNombre']);
		echo $sucursal->listar();
	}
?>