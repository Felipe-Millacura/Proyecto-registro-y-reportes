$(function()
{

	var numeros = '1234567890';

	$('.txtcantidad').keypress(function(e)
	{
		var caracter = String.fromCharCode(e.which);
		if(numeros.indexOf(caracter) < 0)
			return false;
	})
	$('.txtprecio').keypress(function(e)
	{
		var caracter = String.fromCharCode(e.which);
		if(numeros.indexOf(caracter) < 0)
			return false;
	})
	$('.txtsubTotal').keypress(function(e)
	{
		var caracter = String.fromCharCode(e.which);
		if(numeros.indexOf(caracter) < 0)
			return false;
	})


	$('.btnGrabar').click(function()
	{
		if(!$.trim($('.cmbProducto').val()))
		{
			alert('Falta Producto.');
			$('.cmbProducto').focus();
			return false;
		}
		else
		{
			$.post('../ajax/detalle.php',
					{
						metodo		: 'grabar',
						cmbBoleta	: $('.cmbBoleta').val(),
						cmbProducto	: $('.cmbProducto').val(),
						txtcantidad	: $('.txtcantidad').val(),
						txtprecio	: $('.txtprecio').val(),
						txtsubTotal	: $('.txtsubTotal').val()
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

		$.post('../ajax/detalle.php',
				{
					metodo		: 'listar',
					cmbBoleta	: $('.cmbBoleta').val(),
					cmbProducto	: $('.cmbProducto').val(),
					txtcantidad	: $('.txtcantidad').val(),
					txtprecio	: $('.txtprecio').val(),
					txtsubTotal	: $('.txtsubTotal').val()
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
				$('.cmbBoleta').val($(this).text());
			if(index == 2)
				$('.cmbProducto').val($(this).text());
			if(index == 3)
				$('.txtcantidad').val($(this).text());
			if(index == 4)
				$('.txtprecio').val($(this).text());
			if(index == 5)
				$('.txtsubTotal').val($(this).text());

		});
		
	});
	
});