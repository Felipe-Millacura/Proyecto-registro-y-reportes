<?php
	include_once('../entidad/producto.php');
	if(isset($_POST['metodo']) && $_POST['metodo'] == "grabar") // BOTÓN PRESIONADO
	{
		if(!$_POST['txtcodigo'])
			echo "No especifico codigo";
		else
		{
			$producto = new producto();
			$producto->setId($_POST['txtidProducto']);
			$producto->setidMarca($_POST['cmbMarca']);	
			$producto->setidProveedor($_POST['cmbProveedor']);
			$producto->setidTipoProducto($_POST['cmbTipoProducto']);
			$producto->setcodigo($_POST['txtcodigo']);
			$producto->setnombreP($_POST['txtnombreP']);
			$producto->setdescripcion($_POST['txtdescripcion']);
			$producto->setstock($_POST['txtstock']);
			$producto->setstockMinimo($_POST['txtstockMinimo']);
			$producto->setprecio($_POST['txtprecio']);
			$producto->setActivo(isset($_POST['chkActivo'])?1:0);
			$res = $producto->grabar();
			if($res == 1)
				echo 'Guardado con éxito';
			else
				echo 'Error en la ejecución de la solicitud';
		}		
	}
	else if(isset($_POST['metodo']) && $_POST['metodo'] == "listar")  // BOTÓN PRESIONADO
	{
		$producto = new producto();
		$producto->setcodigo($_POST['txtcodigo']);
		echo $producto->listar();
	}
?>