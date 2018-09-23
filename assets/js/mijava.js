
	$('#buscamos').on('keyup',function(){
		var dato = $('#buscamos').val();
		var url = '../proyecto/accionesEventos/ActualizarR.php';
		$.ajax({
		type:'POST',
		url:'ActualizarR.php',
		data:'dato='+dato,
		success: function(datos){
			$('#titulosactualizados').html(datos);
		}
	});
	return false;
	});
