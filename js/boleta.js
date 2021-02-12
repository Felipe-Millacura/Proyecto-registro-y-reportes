$(function()
{

	var numeros = '1234567890';

	$('.txttotal').keypress(function(e)
	{
		var caracter = String.fromCharCode(e.which);
		if(numeros.indexOf(caracter) < 0)
			return false;
	})


	$('.btnGrabar').click(function()
	{
		if($(".cmbUsuario").val() == "0")
		{
			alert('Falta Usuario.');
			$('.cmbUsuario').focus();
			return false;
		}
		if($(".cmbSucursal").val() == "0")
		{
			alert('Falta Scursal.');
			$('.cmbSucursal').focus();
			return false;
		}
		if(!$.trim($('.txtfecha').val()))
		{
			alert('Falta Fecha.');
			$('.txtfecha').focus();
			return false;
		}
		if(!$.trim($('.txttotal').val()))
		{
			alert('Falta Total de la boleta.');
			$('.txttotal').focus();
			return false;
		}
		else
		{
			$.post('../ajax/boleta.php',
					{
						metodo		: 'grabar',
						cmbUsuario	: $('.cmbUsuario').val(),
						cmbSucursal	: $('.cmbSucursal').val(),
						txtfecha	: $('.txtfecha').val(),
						txttotal	: $('.txttotal').val()
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

		$.post('../ajax/boleta.php',
				{
					metodo		: 'listar',
					cmbUsuario	: $('.cmbUsuario').val(),
					cmbSucursal	: $('.cmbSucursal').val(),
					txtfecha	: $('.txtfecha').val(),
					txttotal	: $('.txttotal').val()
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
			if(index == 1)
				$('.cmbUsuario').val($(this).text());
			if(index == 2)
				$('.cmbSucursal').val($(this).text());
			if(index == 3)
				$('.txtfecha').val($(this).text());
			if(index == 4)
				$('.txttotal').val($(this).text());

		});
		
	});
	
});