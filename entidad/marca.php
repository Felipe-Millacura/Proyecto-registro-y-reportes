<?php
include_once('../entidad/IOperaciones.php');
include_once('../entidad/Conectar.php');

class marca implements IOperaciones
{
	private $idMarca;
	private $nombre;
	private $activo;
	
	public function __construct()
	{
		$this->limpiar();
	}
	function getidMarca()
	{
		return $this->idMarca;
	}
	function getNombre()
	{
		return $this->nombre;
	}
	function getActivo()
	{
		return $this->activo;
	}
	function setidMarca($idMarca)
	{
		$this->idMarca=$idMarca;
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
		if($this->idMarca > 0)
			$sql = "UPDATE marca SET ".
					" nombre = '$this->nombre',".
					" activo = '$this->activo'".
					" WHERE idMarca = '$this->idMarca'";
		else			
			$sql = "INSERT INTO marca VALUES (NULL, '$this->nombre','$this->activo')";
		
		$con = new Conectar();
		return $con->grabar($sql);
	}	
	function listar()
	{
		$sql = "SELECT * FROM marca WHERE NOMBRE LIKE '%$this->nombre%'";
		$con = new Conectar();
		return $con->listar($sql);
	}
	function limpiar()
	{
		$this->idMarca  = 0;
		$this->nombre	='';
		$this->activo 	= 2;
	}
}
?>