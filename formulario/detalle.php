<?php
	include_once('../entidad/detalle.php');
	$js = "detalle.js"; // es el archivo js para esta página
	include_once('../HTML/Head.php');	
?>
<link rel="stylesheet" href="../css/form.css">
<div class="form-style-8">
	<form action=boleta.php method=post>
		<h2>Registro de detalle</h2>
		<div class="row">

		<div class="col-12">
				Boletas
			</div>			
			<div class="col-12">
			<input type=hidden name=txtidDetalle class="txtidDetalle" value=0> 
				<?php 
					$detalle = new detalle(); 
					echo $detalle->cmbBoleta();
				?>
			</div>
			<br><br>
			<div class="col-12">
				Productos
			</div>			
			<div class="col-12">
				<?php 
					$detalle = new detalle(); 
					echo $detalle->cmbProducto();
				?>
			</div>
			<br><br>
			<div class="col-12">
				cantidad
			</div>
			<div class="col-12">
				<input type=text name=txtcantidad class="txtcantidad form-control" 
						size=20 maxlength=50
						placeholder="Ingrese cantidad"
						title="cantidad">
			</div>
			<br><br>
			<div class="col-12">
				precio
			</div>
			<div class="col-12">
				<input type=text name=txtprecio class="txtprecio form-control" 
						size=20 maxlength=50
						placeholder="Ingrese precio"
						title="precio">
			</div>
			<br><br>
			<div class="col-12">
				subTotal
			</div>
			<div class="col-12">
				<input type=text name=txtsubTotal class="txtsubTotal form-control" 
						size=20 maxlength=50
						placeholder="Ingrese subTotal"
						title="subTotal">
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
