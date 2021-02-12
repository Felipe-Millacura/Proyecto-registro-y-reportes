<?php
	include_once('../entidad/Usuario.php');
	$js = "Usuario.js"; // es el archivo js para esta página
	include_once('../HTML/Head.php');	
?>
<link rel="stylesheet" href="../css/form.css">
<link rel="stylesheet" href="../css/style.css">
<div class="form-style-8">
	<form action=Usuario.php method=post>
		<h2>Registro de Usuarios</h2>
		<div class="row">
		<div class="col-12">
				Sucursal
			</div>
			<div class="col-12">
			<input type=hidden name=txtidUsuario class="txtidUsuario" value=0> 
				<?php 
					$Usuario = new Usuario(); 
					echo $Usuario->cmbSucursal();
				?>
			</div>
			<br><br>
			<div class="col-12">
				Rut
			</div>			
			<div class="col-10">
				<input type=text name=txtruut class="txtruut form-control" 
						size=20 maxlength=8
						placeholder="Ingrese rut 11111111"
						title="Ingrese Rut">
			</div>
			<div class="col-2">
				<input type=text name=txtdigito class="txtdigito form-control"
						size=20 maxlength=1
						placeholder="K"
						title="Ingrese verificador">
			</div>	
			<div class="col-9">
			</div>
			<div class="col-12">
				Nombre
			</div>
			<div class="col-12">
				<input type=text name=txtnombre class="txtnombre form-control" 
						size=20 maxlength=50
						placeholder="Ingrese nombre usuario"
						title="Nombre Sucursal">
			</div>
			<br><br>
			<div class="col-12">
				Apellido Paterno
			</div>
			<div class="col-12"> 
				<input type=text name=txtpaterno class="txtpaterno form-control" 
						size=20 maxlength=50
						placeholder="Ingrese apellido paterno"
						title="apellido paterno">
			</div>
			<br><br>
			<div class="col-12">
				Apellido Materno
			</div>
			<div class="col-12"> 
				<input type=text name=txtmaterno class="txtmaterno form-control" 
						size=20 maxlength=50
						placeholder="Ingrese apellido materno"
						title="apellido materno">
			</div>
			<br><br>
			<div class="col-12">
				Contraseña
			</div>
			<div class="col-12"> 
				<input type=password name=txtpassword class="txtpassword form-control" 
						size=20 maxlength=50
						placeholder="Ingrese contraseña secreta"
						title="contraseña">
			</div>
			<br><br>
			<div class="col-12">
				Activo
			</div>
			<div class="col-12">
				<input type=checkbox name=chkActivo class="chkActivo" value=1>
			</div>
			<br>
			<div class="col-12">
				Vendedor
			</div>
			<div class="col-12">
				<input type=checkbox name=chkesVendedor class="chkesVendedor" value=1>
			</div>
			<br>
			<div class="col-12">
				Nivel de usuario
			</div>
			<div class="col-12"> 
				<input type=text name=txtlevel class="txtlevel form-control" 
						size=20 maxlength=50
						placeholder="Ingrese nivel de usuario - 1 admin o 2 vendedor"
						title="Nivel de usuario">
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<input type=button name=btnGrabar class="btnGrabar btn btn-danger float-right" value=Grabar>
				<input type=button name=btnListar class="btnListar btn btn-success float-right" value=Listar>
				<input type=submit name=btnlimpiar class="btnlimpiar btn btn-dark float-right" value=limpiar>
			</div>
		</div>
	</form>
        </div>
<?php
	include_once('../HTML/Footer.php');
?>
