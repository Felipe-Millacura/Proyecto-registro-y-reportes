<?php
	include_once('../entidad/Tproducto.php');
	if(isset($_POST['metodo']) && $_POST['metodo'] == "grabar") // BOTÓN PRESIONADO
	{
		if(!$_POST['txtNombre'])
			echo "No especifico nombre";
		else
		{
			$Tproducto = new Tproducto();
			$Tproducto->setNombre($_POST['txtNombre']);
			$Tproducto->setActivo(isset($_POST['chkActivo'])?1:0);
			$res = $Tproducto->grabar();
			if($res == 1)
				echo 'Guardado con éxito';
			else
				echo 'Error en la ejecución de la solicitud';
		}		
	}
	else if(isset($_POST['metodo']) && $_POST['metodo'] == "listar")  // BOTÓN PRESIONADO
	{
		$Tproducto = new Tproducto();
		$Tproducto->setNombre($_POST['txtNombre']);
		echo $Tproducto->listar();
	}
?>