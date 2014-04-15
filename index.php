<!DOCTYPE html>
<html lang="es">
<head>
	<title>Landing de prueba</title>
	
	<!-- Meta -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="landing de prueba realizado con php, javascript, css y html">
	<meta name="autor" content="carlos comparan">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/landing.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- CSS complementos-->
	<link rel="stylesheet" type="text/css" href="plugins/jquery_bxslider/jquery.bxslider.css" />

</head>
<body>
	<header class="font_cont2">
		<div>
			<h1 class="titulo">Nueva Tablet SLIMX Mejor Que Nunca</h1>
			<strong>Nuevo diseño, mayor capacidad y velocidad, camara y video HD.</strong>	
		</div>
	</header>
	<section class="font_cont">
		<div class="acciones">
			<div class="cta">
				<h2>Tablet SLIMX:</h2>
				<ul class="left">
					<li>Selecciona de entre varios modelos el tamaño que te agrade hay de 7, 9 y 11 pulgadas</li>
					<li>Equipada con una hermosa funda prtectora.</li>
					<li>Asi mismo te regalamos un teclado.</li>
				</ul>
			</div>
			<div class="cta">
				<p><strong>Al hacer tu pedido en linea.</strong></p>
				<h2>30% de DESCUENTO</h2>
				<button id="comprar" class="btn btn-success">Comprar</button>
			</div>
			<div class="cta">
				<h2 class="sinpd">SUSCRIBETE</h2>
				<p><strong>Para mas promociones</strong></p>
				 <input placeholder="Email" name="Subscriber" id="Subscriber" type="text" maxlength="128"><button id="suscribir" class="btn-success">Suscribirse</button>
				 <div id="mensaje1"></div>
			</div>
		</div>
	</section>
	<section class="font_cont conten_slider">
		<center>
		<div class="slider">
			<ul class="bxslider">
			  <li><img src="images/tablet_gd.png" /></li>
			  <li><img src="images/banner1.png" /></li>
			  <li><img src="images/banner2.png" /></li>
			</ul>
		</div>
		</center>
	</section>

	<footer>
		<div class="font_cont2">
			<h2>Visitanos en:</h2>
			<ul id='services'>
				<li>
					<div><a href="#"><img src="images/sociales/face.png" /></a></div>
					Facebook
				</li>
				<li>
					<div><a href="#"><img src="images/sociales/tt.png" /></a></div>
					Twitter
				</li>
				<li>
					<div><a href="#"><img src="images/sociales/pint.png" /></a></div>
					Pinterest
				</li>
				<li>
					<div><a href="#"><img src="images/sociales/gg.png" /></a></div>
					Google +
				</li>
			</ul>
		</div>
	</footer>

<!-- JS -->			
<script type="text/javascript" src="plugins/jquery-1.11.0.min.js"></script>
<script src="plugins/javascript.js"></script>

<!-- JS complementos -->
<!-- bxSlider Javascript file -->
<script src="plugins/jquery_bxslider/jquery.bxslider.js"></script>

</body>
</html>
