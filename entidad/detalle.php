<?php
include_once('../entidad/IOperaciones.php');
include_once('../entidad/Conectar.php');

class detalle implements IOperaciones
{
	private $idDetalle;
	private $idBoleta;
	private $idProducto;
	private $cantidad;
	private $precio;
	private $subTotal;
	
	public function __construct()
	{
		$this->limpiar();
	}
	function getidDetalle()
	{
		return $this->idDetalle;
	}
	function getidBoleta()
	{
		return $this->idBoleta;
	}
	function getidProducto()
	{
		return $this->idProducto;
	}
	function getcantidad()
	{
		return $this->cantidad;
	}
	function getprecio()
	{
		return $this->precio;
	}
	function getsubTotal()
	{
		return $this->subTotal;
	}


	function setidDetalle($idDetalle)
	{
		$this->idDetalle=$idDetalle;
	}
	function setidBoleta($idBoleta)
	{
		$this->idBoleta=$idBoleta;
	}
	function setidProducto($idProducto)
	{
		$this->idProducto=$idProducto;
	}
	function setcantidad($cantidad)
	{
		$this->cantidad=$cantidad;
	}	
	function setprecio($precio)
	{
		$this->precio=$precio;
	}
	function setsubTotal($subTotal)
	{
		$this->subTotal=$subTotal;
	}


	function grabar()
	{
		if($this->idDetalle > 0)
			$sql = "UPDATE detalle SET ".
					" idBoleta = '$this->idBoleta',".
					" idProducto = '$this->idProducto',".
					" cantidad = '$this->cantidad',".
					" precio = '$this->precio'".
					" subTotal = '$this->subTotal'".
					" WHERE idDetalle = '$this->idDetalle'";
		else			
			$sql = "INSERT INTO detalle VALUES (NULL, '$this->idBoleta','$this->idProducto','$this->cantidad','$this->precio','$this->subTotal')";
		
		$con = new Conectar();
		return $con->grabar($sql);
	}	
	function listar()
	{
		$sql = "SELECT * FROM detalle WHERE cantidad LIKE '%$this->cantidad%'";
		$con = new Conectar();
		return $con->listar($sql);
	}
	
	function limpiar()
	{
		$this->idDetalle= 0;
		$this->nombre	='';
		$this->activo 	= 2;
	}

	function cmbBoleta()
	{
		$con = new Conectar();
		return $con->comboBox('cmbBoleta', 
								'idBoleta',
								'idBoleta',
								'Boleta', 
								'total',
								'cmbBoleta form-control');
	}

	function cmbProducto()
	{
		$con = new Conectar();
		return $con->comboBox('cmbProducto', 
								'idProducto', 
								'nombreP',
								'Producto', 
								'activo = 1',
								'cmbProducto form-control');
	}
}
?>