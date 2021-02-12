<?php
	include_once('../entidad/boleta.php');
	if(isset($_POST['metodo']) && $_POST['metodo'] == "grabar") // BOTÓN PRESIONADO
	{
		if(!$_POST['cmbUsuario'])
			echo "No especifico Usuario";
		else
		{
			$boleta = new boleta();
			$boleta->setidUsuario($_POST['cmbUsuario']);
			$boleta->setidSucursal($_POST['cmbSucursal']);
			$boleta->setfecha($_POST['txtfecha']);
			$boleta->settotal($_POST['txttotal']);
			$res = $boleta->grabar();
			if($res == 1)
				echo 'Guardado con éxito';
			else
				echo 'Error en la ejecución de la solicitud';
		}		
	}
	else if(isset($_POST['metodo']) && $_POST['metodo'] == "listar")  // BOTÓN PRESIONADO
	{
		$boleta = new boleta();
		$boleta->setidUsuario($_POST['cmbUsuario']);
		echo $boleta->listar();
	}
?>