<?php
	include_once('../entidad/Sucursal.php');
	$js = "Sucursal.js"; // es el archivo js para esta página
	include_once('../HTML/head.php');	
?>
<link rel="stylesheet" href="../css/form.css">
<div class="form-style-8">
	<form action=Sucursal.php method=post>
		<h2>Registro de Sucursales</h2>
		<div class="row">
			<div class="col-12">
				Nombre de la Sucursal
			</div>
			<div class="col-12">
				<input type=hidden name=txtId class="txtId" value=0> 
				<input type=text name=txtNombre class="txtNombre form-control" 
						size=20 maxlength=50
						placeholder="Ingrese nombre de la Sucursal"
						title="Sucursal">
			</div>
			<br><br>
			<div class="col-12">
				Activo
			</div>
			<div class="col-12">
				<input type=checkbox name=chkActivo class="chkActivo" value=1>
			</div>			
		</div>
		<div class="row">
			<div class="col-12">
				<input type=button name=btnGrabar  class="btnGrabar btn btn-outline-danger float-right" value=Grabar>
				<input type=button name=btnListar class="btnListar btn btn-success float-right" value=Listar>
				<input type=submit name=btnlimpiar class="btnlimpiar btn btn-dark float-right" value=limpiar>
			</div>
		</div>
	</form>
</div>
<?php
	include_once('../HTML/Footer.php');
?>