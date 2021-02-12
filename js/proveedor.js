$(function()
{
	$('.btnGrabar').click(function()
	{
		if(!$.trim($('.txtNombre').val()))
		{
			alert('Falta nombre.');
			$('.txtNombre').focus();
			return false;
		}
		else
		{
			$.post('../ajax/proveedor.php',
					{
						metodo		: 'grabar',
						txtId		: $('.txtidProveedor').val(),
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

		$.post('../ajax/proveedor.php',
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
				$('.txtidProveedor').val($(this).text());
			if(index == 1)
				$('.txtNombre').val($(this).text());
			if(index == 2)
				$('.chkActivo').prop("checked",$(this).text()=="1"?true:false);
		});
		
	});
	
});