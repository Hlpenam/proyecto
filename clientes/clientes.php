<?php
    session_start();
    ob_start();
    include '..\connect_db.php';

    if (isset($_SESSION['email'])) {?>
   
	<!DOCTYPE HTML>
<html>
	<head>
		<title>Conjunto Residencial</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="../estilos.css">
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- seccion principal -->
					<div id="main">
						<div class="inner"style="color: black;">

							<!-- titulo principal -->
								<header id="header">
									<a href="clientes.php" class="logo"><strong>Timiza ParkLot</strong> Conjunto Residensial</a>
									<ul class="icons">
										
										<li><a href="cerrar_sesion.php" class="icon fa-instagram" id="test" onclick="test()"><span class="label" ></span>-SALIR-</a></li>
										<li><span class="label"></span>-CLIENTES-</li>
										
									</ul>
								</header>

							
								<section id="banner">
									<div class="content">
										<header>
											<h1>Nuestro Conjunto</h1>
											<p>CONJUNTO RESIDENCIAL TIMIZA DEL PARQUE</p>
										</header>
										<p>parrafo</p>
										<ul class="actions">
											
										</ul>
									</div>
									<span class="image object">
										<img src="../images/pic013.jpg" alt="" />
									</span>
								</section>

							

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Noticias</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="../images/pic017.jpg" alt="" /></a>
											<h3>Mantenimiento Locativo</h3>
											<p>Información de actividades locativas</p>
											<ul class="actions">
												
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="../images/pic018.jpg" alt="" /></a>
											<h3>Eventos y programaciones</h3>
											<p>Aqui va la información acerca de los puntos de parqueo</p>
											<ul class="actions">
												
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="../images/pic019.jpg" alt="" /></a>
											<h3>Punto de Parqueo</h3>
											<p>parrafo</p>
											<ul class="actions">
												
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="../images/pic020.jpg" alt="" /></a>
											<h3>Usuarios / Clientes / Operarios</h3>
											<p>Información sobre las como hacer solicitudes de acceso</p>
											<ul class="actions">
												
											</ul>
										</article>
										
											<article>
												<<h1>Misión</h1>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis non quod sit vero iusto rem similique dicta nihil consectetur culpa saepe voluptates quo cum incidunt quis dolorum, quisquam beatae eum?

												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam odit, autem nisi ratione doloribus, laborum molestias quos ipsa totam aliquam esse at magnam dolorem vero consequatur, consectetur voluptatem. Fugit, numquam!
											</p>
											</article>
											<article>
												<h1>Visión</h1>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis non quod sit vero iusto rem similique dicta nihil consectetur culpa saepe voluptates quo cum incidunt quis dolorum, quisquam beatae eum?

												Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam odit, autem nisi ratione doloribus, laborum molestias quos ipsa totam aliquam esse at magnam dolorem vero consequatur, consectetur voluptatem. Fugit, numquam!
											</p>
											</article>
										
										
									</div>

								</section>

						</div>
					</div>

				<!-- Menu bar -->
					<div id="sidebar">
						<div class="inner" style="background-color: #9aaef6;">
							
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
										<li><a href="clientes.php">Inicio</a></li>
										
										
										<li>
											<span class="#">Puntos de parqueo</span>
											<ul>
												<li style="color: black;"><a href="#">Visualizar Punto/parqueo</a></li>
												
											</ul>
										</li>
										<li><a href="elements.php">Eventos del Conjunto</a></li>
										
										<li><a href="quejaspqr.php">Quejas y Reclamos(PQR)</a></li>
										
										
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Destacados</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="../images/pic014.jpg" alt="" /></a>
											<p style="color: black;">Noticias Uno mes actual más Importantes del conjunto</p>
										</article>
										<article>
											<a href="#" class="image"><img src="../images/pic015.jpg" alt="" /></a>
										<p style="color: black;">Noticias Dos mes actual más Importantes del conjunto</p>
										</article>
										<article>
											<a href="#" class="image"><img src="../images/pic016.jpg" alt="" /></a>
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
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>
			<script>
    				function test(){
        			document.location.href="../Clientes.php?crea=1"
    }
			</script>


	</body>
</html>


<?php
    }
    else{
        echo'<script>window.location ="../index.php"</script>';

        }
 ?>

