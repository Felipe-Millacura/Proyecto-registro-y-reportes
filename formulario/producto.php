<?php
	include_once('../entidad/producto.php');
	$js = "producto.js"; // es el archivo js para esta página
	include_once('../HTML/Head.php');	
?>
<link rel="stylesheet" href="../css/form.css">
<link rel="stylesheet" href="../css/style.css">
<div class="form-style-8">
	<form action=producto.php method=post>
		<h2>Registro de Producto</h2>
		<div class="row">
		<div class="col-12">
				Marca
			</div>			
			<div class="col-12">
				<?php 
					$producto = new producto(); 
					echo $producto->cmbMarca();
				?>
			</div>
			<br><br>
			<div class="col-12">
				Proveedor
			</div>
			<div class="col-12">
				<?php 
					$producto = new producto(); 
					echo $producto->cmbProveedor();
				?>
			</div>
			<br><br>
			<div class="col-12">
			Tipo de Producto
			</div>
			<div class="col-12">
				<?php 
					$producto = new producto(); 
					echo $producto->cmbTipoProducto();
				?>
			</div>
			<br><br>
			<div class="col-12">
				codigo
			</div>
			<div class="col-12">
				<input type=hidden name="txtidProducto" class="txtidProducto" value=0>
				<input type=text name=txtcodigo class="txtcodigo form-control" 
						size=20 maxlength=50
						placeholder="Ingrese codigo del producto"
						title="codigo producto">
			</div>
			<br><br>
			<div class="col-12">
				Nombre del Producto
			</div>
			<div class="col-12"> 
				<input type=text name=txtnombreP class="txtnombreP form-control" 
						size=20 maxlength=50
						placeholder="Ingrese nombre del producto"
						title="nombre producto">
			</div>
			<br><br>
			<div class="col-12">
				Descripcion
			</div>
			<div class="col-12"> 
				<input type=text name=txtdescripcion class="txtdescripcion form-control" 
						size=20 maxlength=50
						placeholder="Descripcion del producto"
						title="Descripcion">
			</div>
			<br><br>
			<div class="col-12">
				Stock
			</div>
			<div class="col-12"> 
				<input type=text name=txtstock class="txtstock form-control" 
						size=20 maxlength=50
						placeholder="Stock del producto"
						title="stock">
			</div>
			<br><br>
			<div class="col-12">
				Stock Minimo
			</div>
			<div class="col-12"> 
				<input type=text name=txtstockMinimo class="txtstockMinimo form-control" 
						size=20 maxlength=50
						placeholder="Ingrese Stock Minimo"
						title="stock minimo">
			</div>
			<br><br>
			<div class="col-12">
				Precio
			</div>
			<div class="col-12"> 
				<input type=text name=txtprecio class="txtprecio form-control" 
						size=20 maxlength=50
						placeholder="Precio del producto"
						title="precio">
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
