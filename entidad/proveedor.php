<?php
include_once('../entidad/IOperaciones.php');
include_once('../entidad/Conectar.php');

class proveedor implements IOperaciones
{
	private $idProveedor;
	private $nombre;
	private $activo;
	
	public function __construct()
	{
		$this->limpiar();
	}
	function getidProveedor()
	{
		return $this->idProveedor;
	}
	function getNombre()
	{
		return $this->nombre;
	}
	function getActivo()
	{
		return $this->activo;
	}
	function setidProveedor($idProveedor)
	{
		$this->idProveedor=$idProveedor;
	}
	function setNombre($nombre)
	{
		$this->nombre=$nombre;
	}
	function setActivo($activo)
	{
		$this->activo=$activo;
	}	
	function grabar()
	{
		if($this->idProveedor > 0)
			$sql = "UPDATE proveedor SET ".
					" nombre = '$this->nombre',".
					" activo = '$this->activo'".
					" WHERE idProveedor = '$this->idProveedor'";
		else			
			$sql = "INSERT INTO proveedor VALUES (NULL, '$this->nombre','$this->activo')";
		
		$con = new Conectar();
		return $con->grabar($sql);
	}	
	function listar()
	{
		$sql = "SELECT * FROM proveedor WHERE NOMBRE LIKE '%$this->nombre%'";
		$con = new Conectar();
		return $con->listar($sql);
	}
	function limpiar()
	{
		$this->idProveedor 		= 0;
		$this->nombre	='';
		$this->activo 	= 2;
	}
}
?>