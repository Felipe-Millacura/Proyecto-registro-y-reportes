<?php
	include_once('../entidad/Proveedor.php');
	if(isset($_POST['metodo']) && $_POST['metodo'] == "grabar") // BOTÓN PRESIONADO
	{
		if(!$_POST['txtNombre'])
			echo "No especifico nombre";
		else
		{
			$proveedor = new proveedor();
			$proveedor->setNombre($_POST['txtNombre']);
			$proveedor->setActivo(isset($_POST['chkActivo'])?1:0);
			$res = $proveedor->grabar();
			if($res == 1)
				echo 'Guardado con éxito';
			else
				echo 'Error en la ejecución de la solicitud';
		}		
	}
	else if(isset($_POST['metodo']) && $_POST['metodo'] == "listar")  // BOTÓN PRESIONADO
	{
		$proveedor = new proveedor();
		$proveedor->setNombre($_POST['txtNombre']);
		echo $proveedor->listar();
	}
?>