<?php
include_once('../entidad/IOperaciones.php');
include_once('../entidad/Conectar.php');

class Usuario implements IOperaciones
{
	private $idUsuario;
	private $idSucursal;
	private $rut;
	private $digito;
	private $username;
	private $paterno;
	private $materno;
	private $password;
	private $activo;
	private $esVendedor;
	private $id_level;
	
	public function __construct()
	{
		$this->limpiar();
	}
	function getidUsuario()
	{
		return $this->idUsuario;
	}
	function getidSucursal()
	{
		return $this->idSucursal;
	}
	function getrut()
	{
		return $this->rut;
	}
	function getdigito()
	{
		return $this->digito;
	}
	function getusername()
	{
		return $this->username;
	}
	function getpaterno()
	{
		return $this->paterno;
	}
	function getmaterno()
	{
		return $this->materno;
	}
	function getpassword()
	{
		return $this->password;
	}
	function getActivo()
	{
		return $this->activo;
	}
	function getesVendedor()
	{
		return $this->esVendedor;
	}
	function getid_level()
	{
		return $this->id_level;
	}


	function setidUsuario($idUsuario)
	{
		$this->idUsuario=$idUsuario;
	}
	function setidSucursal($idSucursal)
	{
		$this->idSucursal=$idSucursal;
	}
	function setrut($rut)
	{
		$this->rut=$rut;
	}
	function setdigito($digito)
	{
		$this->digito=$digito;
	}
	function setusername($username)
	{
		$this->username=$username;
	}
	function setpaterno($paterno)
	{
		$this->paterno=$paterno;
	}
	function setmaterno($materno)
	{
		$this->materno=$materno;
	}
	function setpassword($password)
	{
		$this->password=$password;
	}
	function setActivo($activo)
	{
		$this->activo=$activo;
	}
	function setesVendedor($esVendedor)
	{
		$this->esVendedor=$esVendedor;
	}
	function setid_level($id_level)
	{
		$this->id_level=$id_level;
	}


	function grabar()
	{
		if($this->idUsuario > 0)
			$sql = "UPDATE usuario SET ".
					" rut = '$this->rut',".
					" digito = '$this->digito',".
					" username = '$this->username',".
					" paterno = '$this->paterno',".
					" materno = '$this->materno',".
					" password = '$this->password',".
					" activo = '$this->activo',".
					" esVendedor = '$this->esVendedor',".
					" id_level = '$this->id_level'".
					" WHERE idUsuario = '$this->idUsuario'";
		else			
			$sql = "INSERT INTO usuario VALUES (NULL, '$this->idSucursal','$this->rut','$this->digito','$this->username','$this->paterno','$this->materno','$this->password','$this->activo','$this->esVendedor','$this->id_level')";
		
		$con = new Conectar();
		return $con->grabar($sql);
	}	
	function listar()
	{
		$sql = "SELECT * FROM usuario WHERE username LIKE '%$this->username%'";
		$con = new Conectar();
		return $con->listar($sql);
	}
	function limpiar()
	{
		$this->id 		= 0;
		$this->nombre	='';
		$this->activo 	= 2;
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