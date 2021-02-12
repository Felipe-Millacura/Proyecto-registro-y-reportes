$(function()
{
	var numeros = '1234567890';

	$('.txtcodigo').keypress(function(e)
	{
		var caracter = String.fromCharCode(e.which);
		if(numeros.indexOf(caracter) < 0)
			return false;
	})
	$('.txtstock').keypress(function(e)
	{
		var caracter = String.fromCharCode(e.which);
		if(numeros.indexOf(caracter) < 0)
			return false;
	})
    $('.txtstockMinimo').keypress(function(e)
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

	$('.btnGrabar').click(function()
	{
		if($(".cmbMarca").val() == "0")
		{
			alert('Falta Marca.');
			$('.cmbMarca').focus();
			return false;
		}
		if($(".cmbProveedor").val() == "0")
		{
			alert('Falta Proveedor.');
			$('.cmbProveedor').focus();
			return false;
		}
		if($(".cmbcmbTipoProducto").val() == "0")
		{
			alert('Falta Tipo de producto.');
			$('.cmbcmbTipoProducto').focus();
			return false;
		}
		if(!$.trim($('.txtcodigo').val()))
		{
			alert('Falta codigo del producto.');
			$('.txtcodigo').focus();
			return false;
		}
		if(!$.trim($('.txtnombreP').val()))
		{
			alert('Falta nombre del producto.');
			$('.txtnombreP').focus();
			return false;
		}
		if(!$.trim($('.txtdescripcion').val()))
		{
			alert('Falta descripcion del producto.');
			$('.txtdescripcion').focus();
			return false;
		}
		if(!$.trim($('.txtstock').val()))
		{
			alert('Falta stock del producto.');
			$('.txtstock').focus();
			return false;
		}
		if(!$.trim($('.txtstockMinimo').val()))
		{
			alert('Falta stock minimo del producto.');
			$('.txtstockMinimo').focus();
			return false;
		}
		if(!$.trim($('.txtprecio').val()))
		{
			alert('Falta precio del producto.');
			$('.txtprecio').focus();
			return false;
		}

		else
		{
			$.post('../ajax/producto.php',
					{
						metodo		    : 'grabar',
						txtidProducto   : $('.txtidProducto').val(),
						cmbMarca        : $('.cmbMarca').val(),
						cmbProveedor	: $('.cmbProveedor').val(),
						cmbTipoProducto	: $('.cmbTipoProducto').val(),
						txtcodigo	    : $('.txtcodigo').val(),
						txtnombreP	    : $('.txtnombreP').val(),
						txtdescripcion	: $('.txtdescripcion').val(),
						txtstock	    : $('.txtstock').val(),
						txtstockMinimo	: $('.txtstockMinimo').val(),
						txtprecio	    : $('.txtprecio').val(),
						chkActivo       : $('.chkActivo').val()
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

		$.post('../ajax/producto.php',
				{
					metodo			: 'listar',
					txtidProducto   : $('.txtidProducto').val(),
					cmbMarca        : $('.cmbMarca').val(),
					cmbProveedor	: $('.cmbProveedor').val(),
					cmbTipoProducto	: $('.cmbTipoProducto').val(),
					txtcodigo	    : $('.txtcodigo').val(),
					txtnombreP	    : $('.txtnombreP').val(),
					txtdescripcion	: $('.txtdescripcion').val(),
					txtstock	    : $('.txtstock').val(),
					txtstockMinimo	: $('.txtstockMinimo').val(),
					txtprecio	    : $('.txtprecio').val(),
					chkActivo       : $('.chkActivo').val()
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
				$('.txtidProducto').val($(this).text());
			if(index == 1)
				$('.cmbMarca').val($(this).text());
			if(index == 2)
				$('.cmbProveedor').val($(this).text());
			if(index == 3)
				$('.cmbTipoProducto').val($(this).text());
			if(index == 4)
				$('.txtcodigo').val($(this).text());
			if(index == 5)
				$('.txtnombreP').val($(this).text());
			if(index == 6)
				$('.txtdescripcion').val($(this).text());
			if(index == 7)
				$('.txtstock').val($(this).text());
			if(index == 8)
				$('.txtstockMinimo').val($(this).text());
			if(index == 9)
				$('.txtprecio').val($(this).text());
			if(index == 10)
				$('.chkActivo').prop("checked",$(this).text()=="1"?true:false);
		});
		
	});
	
});