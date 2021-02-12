$(function()
{
	var numeros = '1234567890';
	var digitos = '1234567890Kk';
	var letras	= 'qwertyuiopasdfghjklñzxcvbnm' +
					'QWERTYUIOPASDFGHJKLÑZXCVBNM' +
					'ÁÉÍÓÚáéíóú ';
	var letrasS = 'qwertyuiopasdfghjklñzxcvbnm' +
					'QWERTYUIOPASDFGHJKLÑZXCVBNM' +
					'ÁÉÍÓÚáéíóú -';
	var claveRegex = /^(?=.*\d)(?=.*[\u005F\u002D\u003B\u003A\u002E\u0021\u002b\u003c\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/;

$('.txtruut').focus();

$('.txtruut').keypress(function(e)
	{
		var carcter = String.fromCharCode(e.which);
		if(numeros.indexOf(carcter) < 0)
			return false;
	})
    $('.txtdigito').keypress(function(e)
	{
		var carcter = String.fromCharCode(e.which);
		if(digitos.indexOf(carcter) < 0)
			return false;
	})
	$('.txtnombre').keypress(function(e)
	{
		var caracter = String.fromCharCode(e.which);
		if(letras.indexOf(caracter) < 0)
			return false;
	})
	$('.txtpaterno').keypress(function(e)
	{
		var caracter = String.fromCharCode(e.which);
		if(letrasS.indexOf(caracter) < 0)
			return false;
	})
	$('.txtmaterno').keypress(function(e)
	{
		var caracter = String.fromCharCode(e.which);
		if(letrasS.indexOf(caracter) < 0)
			return false;
	})
	$('.txtpassword').keypress(function(e)
	{
	  var caracter = String.fromCharCode(e.which);
	  if(claveRegex.indexOf(caracter) < 0)
	  return false;
	})
	$('.txtlevel').keypress(function(e)
	{
		var carcter = String.fromCharCode(e.which);
		if(numeros.indexOf(carcter) < 0)
			return false;
	})


	$('.btnGrabar').click(function()
	{
		if($(".cmbSucursal").val() == "0")
		{
			alert('Falta Sucursal.');
			$('.cmbSucursal').focus();
			return false;
		}
		if(!$.trim($('.txtruut').val()))
		{
			alert('Falta Rut.');
			$('.txtruut').focus();
			return false;
		}
		if(!$.trim($('.txtdigito').val()))
		{
			alert('Falta Digito Verificador.');
			$('.txtdigito').focus();
			return false;
		}
		if(!$.trim($('.txtnombre').val()))
		{
			alert('Falta Nombre.');
			$('.txtnombre').focus();
			return false;
		}
		if(!$.trim($('.txtpaterno').val()))
		{
			alert('Falta Apellido Paterno.');
			$('.txtpaterno').focus();
			return false;
		}
		if(!$.trim($('.txtmaterno').val()))
		{
			alert('Falta Apellido Materno.');
			$('.txtmaterno').focus();
			return false;
		}
		if(!$.trim($('.txtpassword').val()))
		{
			alert('Falta Clave.');
			$('.txtpassword').focus();
			return false;
		}if(!$.trim($('.txtlevel').val()))
		{
			alert('Falta nivel de usuario 1 admin o 2 vendedor.');
			$('.txtlevel').focus();
			return false;
		}

		else
		{
			$.post('../ajax/Usuario.php',
					{
						metodo		: 'grabar',
						txtidUsuario : $('.txtidUsuario').val(),
						cmbSucursal : $('.cmbSucursal').val(),
						txtruut		: $('.txtruut').val(),
						txtdigito	: $('.txtdigito').val(),
						txtnombre	: $('.txtnombre').val(),
						txtpaterno	: $('.txtpaterno').val(),
						txtmaterno	: $('.txtmaterno').val(),
						txtpassword	: $('.txtpassword').val(),
						chkActivo	: $('.chkActivo').val(),
						chkesVendedor: $('.chkesVendedor').val(),
						txtlevel	: $('.txtlevel').val(),
					}
			,
			function(dato)
			{
				alert(dato);
			})
			
		}
	});
	$('.btnListar').click(function()
	{

		$.post('../ajax/Usuario.php',
				{
					metodo		: 'listar',
					txtidUsuario : $('.txtidUsuario').val(),
					cmbSucursal : $('.cmbSucursal').val(),
					txtruut		: $('.txtruut').val(),
					txtdigito	: $('.txtdigito').val(),
					txtnombre	: $('.txtnombre').val(),
					txtpaterno	: $('.txtpaterno').val(),
					txtmaterno	: $('.txtmaterno').val(),
					txtpassword	: $('.txtpassword').val(),
					chkActivo	: $('.chkActivo').val(),
					chkesVendedor: $('.chkesVendedor').val(),
					txtlevel	: $('.txtlevel').val(),
				}
		,
		function(dato)
		{
			$('.divTabla').html(dato);
		})			
		
	});
	$('.divTabla').on('click', 'table tr', function()
	{
		var fila = $(this);
		
		$(this).children("td").each(function(index)
		{
			if(index == 0)
				$('.txtidUsuario').val($(this).text());
			if(index == 1)
				$('.cmbSucursal').val($(this).text());
			if(index == 2)
				$('.txtruut').val($(this).text());
			if(index == 3)
				$('.txtdigito').val($(this).text());
			if(index == 4)
				$('.txtnombre').val($(this).text());
			if(index == 5)
				$('.txtpaterno').val($(this).text());
			if(index == 6)
				$('.txtmaterno').val($(this).text());
			if(index == 7)
				$('.txtpassword').val($(this).text());
			if(index == 8)
				$('.chkActivo').prop("checked",$(this).text()=="1"?true:false);
			if(index == 9)
				$('.chkesVendedor').prop("checked",$(this).text()=="1"?true:false);
			if(index == 10)
				$('.txtlevel').val($(this).text());
		});
		
	});
	
});