$(function()
{
	$('.btnGrabar').click(function()
	{
		if(!$.trim($('.txtNombre').val()))
		{
			alert('Falta Nombre.');
			$('.txtNombre').focus();
			return false;
		}
		else
		{
			$.post('../ajax/marca.php',
					{
						metodo		: 'grabar',
						txtId		: $('.txtidMarca').val(),
						txtNombre	: $('.txtNombre').val(),
						chkActivo	: $('.chkActivo').val()
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

		$.post('../ajax/marca.php',
				{
					metodo		: 'listar',
					txtNombre	: $('.txtNombre').val()
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
				$('.txtidMarca').val($(this).text());
			if(index == 1)
				$('.txtNombre').val($(this).text());
			if(index == 2)
				$('.chkActivo').prop("checked",$(this).text()=="1"?true:false);
		});
		
	});
	
});