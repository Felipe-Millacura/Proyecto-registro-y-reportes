<?php
	include_once('../entidad/detalle.php');
	if(isset($_POST['metodo']) && $_POST['metodo'] == "grabar") // BOTÓN PRESIONADO
	{	
		if(!$_POST['cmbProducto'])
			echo "No especifico Producto";
		else
		{
			$detalle = new detalle();
			$detalle->setidBoleta($_POST['cmbBoleta']);
			$detalle->setidProducto($_POST['cmbProducto']);
			$detalle->setcantidad($_POST['txtcantidad']);
			$detalle->setprecio($_POST['txtprecio']);
			$detalle->setsubTotal($_POST['txtsubTotal']);
			$res = $detalle->grabar();
			if($res == 1)
				echo 'Guardado con éxito';
			else
				echo 'Error en la ejecución de la solicitud';
		}		
	}
	else if(isset($_POST['metodo']) && $_POST['metodo'] == "listar")  // BOTÓN PRESIONADO
	{
		$detalle = new detalle();
		$detalle->setidProducto($_POST['cmbProducto']);
		echo $detalle->listar();
	}
?>