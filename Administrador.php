<?php
    session_start();
    ob_start();
    include 'connect_db.php';

    if (isset($_SESSION['email'])) {

    ?>
   
	<!DOCTYPE HTML>
<html>
	<head>
		<title>Conjunto Residencial</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- seccion principal -->
					<div id="main" style="background: #fff;">
						<div class="inner"style="color: black;">

							<!-- titulo principal -->
								<header id="header" class="headers" style="background: #fff;">
									<a href="Administrador.php" class="logo"><strong>Timiza ParkLot</strong> Conjunto Residensial</a>
									<ul class="icons">
										
										<li><a href="cerrar_sesion.php" class="icon fa-instagram" id="test" onclick="test()"><span class="label" ></span>-SALIR-</a></li>
										<li><span class="label"></span>-ADMINISTRADOR-</li>
										
									</ul>
								</header>

							
								<section id="banner">
									<div class="content">
										<header>
											<h1>Nuestro Conjunto</h1>
											<p>CONJUNTO RESIDENCIAL TIMIZA DEL PARQUE</p>
										</header>
										<p>Somos un Conjunto Residencial PARQUES DEL TIMIZA, donde le proporcionamos a nuestros copropietarios información y ayuda de todo lo relacionado con nuestro conjunto tal como seguridad, buen ambiente y buena atención en lo que se necesite.
										Bienvenidos.</p>
										<ul class="actions">
											
										</ul>
									</div>
									<span class="image object">
										<img src="images/pic013.jpg" alt="" />
									</span>
								</section>

							

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Noticias</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="images/pic017.jpg" alt="" /></a>
											<h3>Mantenimiento Locativo</h3>
											<p>Información de actividades locativas</p>
											<ul class="actions">
												
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic018.jpg" alt="" /></a>
											<h3>Eventos y programaciones</h3>
											<p>Aqui va la información acerca de los puntos de parqueo</p>
											<ul class="actions">
												
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic019.jpg" alt="" /></a>
											<h3>Punto de Parqueo</h3>
											<p>parrafo</p>
											<ul class="actions">
												
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic020.jpg" alt="" /></a>
											<h3>Usuarios / Clientes / Operarios</h3>
											<p>Información sobre las como hacer solicitudes de acceso</p>
											<ul class="actions">
												
											</ul>
										</article>
										
											<article>
												<h1>Misión</h1>
											<p>
												La Misión del Conjunto Residencial PARQUES DEL TIMIZA, es la de conformar un espacio de vivienda organizado y en donde se busca propiciar espacios de comunicación, sana convivencia y en donde reine la armonía, la paz, el respeto y la equidad para todos los propietarios siguiendo los lineamientos establecidos en nuestro reglamento con el fin de lograr un desarrollo humano sostenible.
											</p>
											</article>
											<article>
												<h1>Visión</h1>
											<p>
												La Visión del Conjunto Residencial PARQUES DEL TIMIZA, es la de constituirse en la localidad de Kennedy específicamente en el sector de timiza un ejemplo a seguir desde el punto de vista de organización residencial, así mismo motivo de orgullo de todos los propietarios por ser reconocidos como el mejor conjunto residencial del sector, comprometidos con el progreso y caracterizados por la integridad de todos los Copropietarios.
											</p>
											</article>
										
										
									</div>

								</section>

						</div>
					</div>

				<!-- Menu bar -->
					<div id="sidebar">
						<div class="inner" style="background-color: #c5cbf0;">
							
							<!-- buscar
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section> -->

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2 style="color: black;">Menu</h2>
									</header>
									<ul>
										<li><a href="Administrador.php">Inicio</a></li>
										<li>
											<span class="opener">Ingresos Usuarios</span>
											<ul>
												<li style="color: black;"><a href="gestionusuarios/crearuser.php">Crear</a></li>
												<li style="color: black;"><a href="gestionusuarios/eliminaruser.php">Eliminar</a></li>
												<li style="color: black;"><a href="gestionusuarios/modificaruser.php">Modificar</a></li>
												<li style="color: black;"><a href="gestionusuarios/listaruser.php">Listado</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Ingresos Vehiculos</span>
											<ul>
												<li style="color: black;"><a href="crud_ve/createve.php">Crear</a></li>
												<li style="color: black;"><a href="crud_ve/deleteve.php">Eliminar</a></li>
												<li style="color: black;"><a href="crud_ve/updateve.php">Modificar</a></li>
												<li style="color: black;"><a href="crud_ve/listarve.php">Listado</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Puntos de parqueo</span>
											<ul>
												<li style="color: black;"><a href="#">Visualizar Punto/parqueo</a></li>
												<li style="color: black;"><a href="gestionsorteopk/SorteoPK.php">Programar Punto/parqueo</a></li>
												
											</ul>
										</li>
										<li><a href="accionesEventos/elements.php">Programar Eventos</a></li>
										<li>
											<span class="opener">Informes</span>
											<ul>
												<li style="color: black;"><a href="informes/diarios.php">Diario</a></li>
												<li style="color: black;"><a href="informes/semanales.php">Semanal</a></li>
												<li style="color: black;"><a href="informes/mensuales.php">Mensual</a></li>
												
											</ul>
										</li>
										<li><a href="generic.php">Quejas y Reclamos(PQR)</a></li>
										
										
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Destacados</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic014.jpg" alt="" /></a>
											<p style="color: black;">Noticias Uno mes actual más Importantes del conjunto</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic015.jpg" alt="" /></a>
										<p style="color: black;">Noticias Dos mes actual más Importantes del conjunto</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic016.jpg" alt="" /></a>
										<p style="color: black;">Noticias Dos mes actual más Importantes del conjunto</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">Galeria</a></li>
									</ul>
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Noticias Antiguas</h2>
									</header>
									<p>parrafos</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">administrador@sionwebsites.com</a></li>
										<li class="fa-phone">(+57) 317-264-6327</li>
										<li class="fa-home">Bogota, Colombia</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; SIONWEBSITES <a href="https://SIONWEBSITES.COM">SION</a></p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script>
    				function test(){
        			document.location.href="Administrador.php?crea=1"
    }
			</script>


	</body>
</html>


<?php
    }
    else{
        echo'<script>window.location ="index.php"</script>';

        }
 ?>

