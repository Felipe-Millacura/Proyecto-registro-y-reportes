
<html>
	<head>
		<title>Fan´s Levi Love</title>
		<script src="../js/jquery-3.4.0.min.js" ></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/<?php echo $js?>"></script>
		
		<link rel='shortcut icon' type='image/x-icon' href='../images/icono64.ico' />
		<link rel="stylesheet" 	href="../css/bootstrap.min.css">
		<link rel="stylesheet" 	href="../css/style.css">		
		<link rel="manifest" 	href="../formulario/manifest.json"> 

		
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #428000;" style="color: white;">
		  <a class="navbar-brand" href="../formulario/mainmenu.php">
				<img src='../images/icono64.ico'  width="40" height="40" class="d-inline-block align-top" alt="">
				Fan´s Levi Love
				</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    			<div class="navbar-nav">
      				
      				<a class="nav-item nav-link" href="../formulario/Sucursal.php">Registrar Sucursal</a>
      				<a class="nav-item nav-link" href="../formulario/Usuario.php">Registrar Usuario</a>
      				<a class="nav-item nav-link" href="../formulario/marca.php">Registrar Marca</a>
					<a class="nav-item nav-link" href="../formulario/proveedor.php">Registrar Proveedor</a>
					<a class="nav-item nav-link" href="../formulario/Tproducto.php">Registrar TipoProducto</a>
					<a class="nav-item nav-link" href="../formulario/producto.php">Registrar Producto</a>
					<a class="nav-item nav-link" href="../formulario/boleta.php">Registrar Boleta</a>
					<a class="nav-item nav-link" href="../formulario/detalle.php">Registrar Detalle</a>
					<a class="nav-item nav-link" href="../formulario/reportes.php">Reportes</a>
				</div>
			  </div>
			  <a class="nav-item nav-link" href="../login2/logout.php">Cerrar Sesion</a>
			  <!--<div class="menu">
				  <a href="#">Cerrar Sesion</a>
			  </div>-->
		</nav>

		<script>
			$(function()
			{
				if ('serviceWorker' in navigator) {
					navigator.serviceWorker.register('sw.js')
					.then(reg => console.log('Registro de SW exitoso', reg))
					.catch(err => console.warn('Error al tratar de registrar el sw', err))
				}
			})
		</script>		
	</head>
	<body>
		<div class="container-fluid"> 