<?php
	include_once('../HTML/head.php');
?>
<link rel="stylesheet" href="../css/form.css">
<link rel="stylesheet" href="../css/btn.css">
<div class="form-style-8">
	<form action=Sucursal.php method=post>
		<h2>Reportes</h2>
		<div class="row">
			<div class="col-12">
                <a href = "http://localhost:8082/nota2/test/index/stockP.php" target="_blank" class="btn">Stock de productos</a>
				<br><br>
				<a href = "http://localhost:8082/nota2/test/index/ventasV.php" target="_blank" class="btn">Productos vendidos por vendedor</a>
				<br><br>
                <a href = "http://localhost:8082/nota2/test/index/boletasV.php" target="_blank" class="btn">Boletas por vendedor</a>
				<br><br>
                <a href = "http://localhost:8082/nota2/test/index/ventasS.php" target="_blank" class="btn">Boletas por Sucrusal</a>
				<br><br>
                <a href = "http://localhost:8082/nota2/test/index/productosQ.php" target="_blank" class="btn">Quiebre de stock</a>
                <br><br>
			</div>
		</div>
	</form>
</div>