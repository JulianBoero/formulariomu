x=$(document);
x.ready(inicio);		
		
		function inicio()
		{	
			$("#botonregistrarse").click( function() {	
				enviar();
			})
		}
		
		function enviar()
		{
			
			$.ajax({
				type: "GET",
				data: $("#registromumendoza").serialize(),
				url: "../backend/registromin.php",
				async: "false",	
				dataType: "json",
				success: function(response)
				{
					alert(response.mensaje);
					
				},
				error: function()
				{
					alert("No se pudo realizar el registro");
				}
			});
		}
		
