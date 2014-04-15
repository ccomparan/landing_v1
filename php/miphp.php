<?php

if ($_GET["peticion"] == "suscribirse"){
	if ($_GET["correo"] == ""){
		echo json_encode("campo vacio.");
	} else{
				echo json_encode("gracias, por suscribirse.");		
			}
		
	}
}


?>

