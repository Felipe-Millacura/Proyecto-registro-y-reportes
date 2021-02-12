<?php
	include_once('../entidad/marca.php');
	$js = "marca.js"; // es el archivo js para esta página
	include_once('../HTML/Head.php');	
?>
<link rel="stylesheet" href="../css/form.css">
<div class="form-style-8">
	<form action=marca.php method=post>
		<h2>Registro de Marcas</h2>
		<div class="row">
			<div class="col-12">
				Nombre de la Marca
			</div>
			<div class="col-12">
				<input type=hidden name="txtidMarca" class="txtidMarca" value=0> 
				<input type=text name=txtNombre class="txtNombre form-control" 
						size=20 maxlength=50
						placeholder="Ingrese nombre de la marca"
						title="marca">
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