$(document).ready(function(){

	$('.bxslider').bxSlider({
	  auto: true,
	  autoControls: false
	});

	$('#suscribir').on('click',function() {

		var correo = $('#Subscriber').val();
		var f = "suscribirse";
		$.ajax({url : "php/miphp.php",
	 		data : {peticion:f, correo:correo },
	 		dataType: 'json',
	   		success: response
	   	});
						
	});
function response(results){
	$('.x').remove();
	$('#mensaje1').append("<span class='x'>"+results+"</span>");
}
});