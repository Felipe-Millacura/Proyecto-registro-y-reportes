<?php
	include_once('../entidad/Usuario.php');
	if(isset($_POST['metodo']) && $_POST['metodo'] == "grabar") // BOTÓN PRESIONADO
	{
		if(!$_POST['txtnombre'])
			echo "No especifico nombre";
		else
		{
			$Usuario = new Usuario();
			$Usuario->setidUsuario($_POST['txtidUsuario']);	
			$Usuario->setidSucursal($_POST['cmbSucursal']);
			$Usuario->setrut($_POST['txtruut']);
			$Usuario->setdigito($_POST['txtdigito']);
			$Usuario->setusername($_POST['txtnombre']);
			$Usuario->setpaterno($_POST['txtpaterno']);
			$Usuario->setmaterno($_POST['txtmaterno']);
			$Usuario->setpassword($_POST['txtpassword']);
			$Usuario->setActivo(isset($_POST['chkActivo'])?1:0);
			$Usuario->setesVendedor(isset($_POST['chkesVendedor'])?1:0);
			$Usuario->setid_level($_POST['txtlevel']);
			$res = $Usuario->grabar();
			if($res == 1)
				echo 'Guardado con éxito';
			else
				echo 'Error en la ejecución de la solicitud';
		}		
	}
	else if(isset($_POST['metodo']) && $_POST['metodo'] == "listar")  // BOTÓN PRESIONADO
	{
		$Usuario = new Usuario();
		$Usuario->setusername($_POST['txtnombre']);
		echo $Usuario->listar();
	}
?>