<?php
	include_once('../entidad/boleta.php');
	$js = "boleta.js"; // es el archivo js para esta página
	include_once('../HTML/HeadUser.php');	
?>
<link rel="stylesheet" href="../css/form.css">
<div class="form-style-8">
	<form action=boleta.php method=post>
		<h2>Registro de boletas</h2>
		<div class="row">

		<div class="col-12">
				Usuario
			</div>			
			<div class="col-12">
				<?php 
					$boleta = new boleta(); 
					echo $boleta->cmbUsuario();
				?>
			</div>
			<br><br>
			<div class="col-12">
				Sucursal
			</div>			
			<div class="col-12">
				<?php 
					$boleta = new boleta(); 
					echo $boleta->cmbSucursal();
				?>
			</div>
			<br><br>
			<div class="col-12">
				Fecha
			</div>
			<div class="col-12">
				<input type=hidden name=txtidBoleta class="txtidBoleta" value=0> 
				<input type=date name=txtfecha class="txtfecha form-control" 
						size=20 maxlength=50
						placeholder="Ingrese fecha de emision"
						title="fecha">
			</div>
			<br><br>
			<div class="col-12">
				Total
			</div>
			<div class="col-12">
				<input type=text name=txttotal class="txttotal form-control" 
						size=20 maxlength=50
						placeholder="Ingrese el total de la boleta"
						title="total">
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
	include_once('../HTML/FooterUser.php');
?>
