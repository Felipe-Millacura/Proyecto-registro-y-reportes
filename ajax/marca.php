<?php
	include_once('../entidad/marca.php');
	if(isset($_POST['metodo']) && $_POST['metodo'] == "grabar") // BOTÓN PRESIONADO
	{
		if(!$_POST['txtNombre'])
			echo "No especifico nombre";
		else
		{
			$marca = new marca();
			$marca->setNombre($_POST['txtNombre']);
			$marca->setActivo(isset($_POST['chkActivo'])?1:0);
			$res = $marca->grabar();
			if($res == 1)
				echo 'Guardado con éxito';
			else
				echo 'Error en la ejecución de la solicitud';
		}		
	}
	else if(isset($_POST['metodo']) && $_POST['metodo'] == "listar")  // BOTÓN PRESIONADO
	{
		$marca = new marca();
		$marca->setNombre($_POST['txtNombre']);
		echo $marca->listar();
	}
?>