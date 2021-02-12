<?php
include_once('../entidad/IOperaciones.php');
include_once('../entidad/Conectar.php');

class producto implements IOperaciones
{
	private $Id;
	private $idMarca;
	private $idProveedor;
	private $idTipoProducto;
	private $codigo;
	private $nombreP;
	private $descripcion;
	private $stock;
	private $stockMinimo;
	private $precio;
	private $activo;

	
	public function __construct()
	{
		$this->limpiar();
	}
	function getId()
	{
		return $this->Id;
	}
	function getidMarca()
	{
		return $this->idMarca;
	}
	function getidProveedor()
	{
		return $this->idProveedor;
	}
	function getidTipoProducto()
	{
		return $this->idTipoProducto;
	}
	function getcodigo()
	{
		return $this->codigo;
	}
	function getnombreP()
	{
		return $this->nombreP;
	}
	function getdescripcion()
	{
		return $this->descripcion;
	}
	function getstock()
	{
		return $this->stock;
	}
	function getstockMinimo()
	{
		return $this->stockMinimo;
	}
	function getprecio()
	{
		return $this->precio;
	}
	function getActivo()
	{
		return $this->activo;
	}


	function setId($Id)
	{
		$this->Id=$Id;
	}
	function setidMarca($idMarca)
	{
		$this->idMarca=$idMarca;
	}
	function setidProveedor($idProveedor)
	{
		$this->idProveedor=$idProveedor;
	}
	function setidTipoProducto($idTipoProducto)
	{
		$this->idTipoProducto=$idTipoProducto;
	}
	function setcodigo($codigo)
	{
		$this->codigo=$codigo;
	}
	function setnombreP($nombreP)
	{
		$this->nombreP=$nombreP;
	}
	function setdescripcion($descripcion)
	{
		$this->descripcion=$descripcion;
	}
	function setstock($stock)
	{
		$this->stock=$stock;
	}
	function setstockMinimo($stockMinimo)
	{
		$this->stockMinimo=$stockMinimo;
	}
	function setprecio($precio)
	{
		$this->precio=$precio;
	}
	function setActivo($activo)
	{
		$this->activo=$activo;
	}

	function grabar()
	{
		if($this->Id > 0)
			$sql = "UPDATE Producto SET ".
					" idMarca = '$this->idMarca',".
					" idProveedor = '$this->idProveedor',".
					" idTipoProducto = '$this->idTipoProducto',".
					" codigo = '$this->codigo',".
					" nombreP = '$this->nombreP',".
					" descripcion = '$this->descripcion',".
					" stock = '$this->stock',".
					" stockMinimo = '$this->stockMinimo',".
					" precio = '$this->precio',".
					" activo = '$this->activo'".
					" WHERE idProducto = '$this->Id'";
		else			
			$sql = "INSERT INTO Producto VALUES (NULL, '$this->idMarca','$this->idProveedor','$this->idTipoProducto','$this->codigo','$this->nombreP','$this->descripcion','$this->stock','$this->stockMinimo','$this->precio','$this->activo')";
		
		$con = new Conectar();
		return $con->grabar($sql);
	}	
	function listar()
	{
		$sql = "SELECT * FROM producto WHERE codigo LIKE '%$this->codigo%'";
		$con = new Conectar();
		return $con->listar($sql);
	}
	function limpiar()
	{
		$this->id 		= 0;
		$this->codigo	='';
		$this->activo 	= 2;
	}

	function cmbMarca()
	{
		$con = new Conectar();
		return $con->comboBox('cmbMarca', 
								'idMarca', 
								'Nombre', 
								'Marca', 
								'activo = 1',
								'cmbMarca form-control');
	}
	function cmbProveedor()
	{
		$con = new Conectar();
		return $con->comboBox('cmbProveedor', 
								'idProveedor', 
								'Nombre', 
								'Proveedor', 
								'activo = 1',
								'cmbProveedor form-control');
	}
	function cmbTipoProducto()
	{
		$con = new Conectar();
		return $con->comboBox('cmbTipoProducto', 
								'idTipoProducto', 
								'Nombre', 
								'TipoProducto', 
								'activo = 1',
								'cmbTipoProducto form-control');
	}
}
?>