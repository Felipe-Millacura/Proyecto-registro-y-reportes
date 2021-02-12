<?php
include_once('../entidad/IOperaciones.php');
include_once('../entidad/Conectar.php');

class boleta implements IOperaciones
{
	private $idBoleta;
	private $idUsuario;
	private $idSucursal;
	private $fecha;
	private $total;
	
	public function __construct()
	{
		$this->limpiar();
	}
	function getidBoleta()
	{
		return $this->idBoleta;
	}
	function getidUsuario()
	{
		return $this->idUsuario;
	}
	function getidSucursal()
	{
		return $this->idSucursal;
	}
	function getfecha()
	{
		return $this->fecha;
	}
	function gettotal()
	{
		return $this->total;
	}


	function setidBoleta($idBoleta)
	{
		$this->idBoleta=$idBoleta;
	}
	function setidUsuario($idUsuario)
	{
		$this->idUsuario=$idUsuario;
	}
	function setidSucursal($idSucursal)
	{
		$this->idSucursal=$idSucursal;
	}
	function setfecha($fecha)
	{
		$this->fecha=$fecha;
	}	
	function settotal($total)
	{
		$this->total=$total;
	}
	function grabar()
	{
		if($this->idBoleta > 0)
			$sql = "UPDATE boleta SET ".
					" idUsuario = '$this->idUsuario',".
					" idSucursal = '$this->idSucursal',".
					" fecha = '$this->fecha',".
					" total = '$this->total'".
					" WHERE idBoleta = '$this->idBoleta'";
		else			
			$sql = "INSERT INTO boleta VALUES (NULL, '$this->idUsuario','$this->idSucursal','$this->fecha','$this->total')";
		
		$con = new Conectar();
		return $con->grabar($sql);
	}	
	function listar()
	{
		$sql = "SELECT * FROM boleta WHERE fecha LIKE '%$this->fecha%'";
		$con = new Conectar();
		return $con->listar($sql);
	}
	function limpiar()
	{
		$this->idBoleta = 0;
		$this->nombre	='';
		$this->activo 	= 2;
	}

	function cmbUsuario()
	{
		$con = new Conectar();
		return $con->comboBox('cmbUsuario', 
								'idUsuario', 
								'username',
								'Usuario', 
								'activo = 1',
								'cmbUsuario form-control');
	}

	function cmbSucursal()
	{
		$con = new Conectar();
		return $con->comboBox('cmbSucursal', 
								'idSucursal', 
								'Nombre', 
								'Sucursal', 
								'activo = 1',
								'cmbSucursal form-control');
	}
}
?>