<?php
include_once('../entidad/IOperaciones.php');
include_once('../entidad/Conectar.php');

class Tproducto implements IOperaciones
{
	private $idTipoProducto;
	private $nombre;
	private $activo;
	
	public function __construct()
	{
		$this->limpiar();
	}
	function getidTipoProducto()
	{
		return $this->idTipoProducto;
	}
	function getNombre()
	{
		return $this->nombre;
	}
	function getActivo()
	{
		return $this->activo;
	}
	function setidTipoProducto($idTipoProducto)
	{
		$this->idTipoProducto=$idTipoProducto;
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
		if($this->id > 0)
			$sql = "UPDATE tipoproducto SET ".
					" nombre = '$this->nombre',".
					" activo = '$this->activo'".
					" WHERE idTipoProducto = '$this->id'";
		else			
			$sql = "INSERT INTO tipoproducto VALUES (NULL, '$this->nombre','$this->activo')";
		
		$con = new Conectar();
		return $con->grabar($sql);
	}	
	function listar()
	{
		$sql = "SELECT * FROM tipoproducto WHERE NOMBRE LIKE '%$this->nombre%'";
		$con = new Conectar();
		return $con->listar($sql);
	}
	function limpiar()
	{
		$this->id 		= 0;
		$this->nombre	='';
		$this->activo 	= 2;
	}
}
?>