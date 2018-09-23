<?php
    session_start();
    ob_start();
    include '../connect_db.php';

    if (isset($_SESSION['email'])) {?>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Eventos Timiza ParkLot</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="../estilos.css">
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="Administrador.php" class="logo"><strong>Timiza ParkLot</strong> Conjunto Residensial</a>
									<ul class="icons">
										<li><a href="cerrar_sesion.php" class="icon fa-instagram"><span class="label"></span>-SALIR-</a></li>
										<li><span class="label"></span>-OPERARIOS-</li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Programacion de eventos</h1>
									</header>

									<!-- Content -->
										<h2 id="content">TITULO1</h2>
										<p>Praesent ac adipiscing ullamcorper semper ut amet ac risus. Lorem sapien ut odio odio nunc. Ac adipiscing nibh porttitor erat risus justo adipiscing adipiscing amet placerat accumsan. Vis. Faucibus odio magna tempus adipiscing a non. In mi primis arcu ut non accumsan vivamus ac blandit adipiscing adipiscing arcu metus praesent turpis eu ac lacinia nunc ac commodo gravida adipiscing eget accumsan ac nunc adipiscing adipiscing lorem ipsum dolor sit amet nullam veroeros adipiscing.</p>
										<div class="row">
											<div class="6u 12u$(small)">
												<h3>SBUTITULO</h3>
												<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat commodo eu sed ante lacinia. Sapien a lorem in integer ornare praesent commodo adipiscing arcu in massa commodo lorem accumsan at odio massa ac ac. Semper adipiscing varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
											</div>
											<div class="6u$ 12u$(small)">
												<h3>SUBTITULO2</h3>
												<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor. Ante commodo blandit adipiscing integer semper orci eget. Faucibus commodo adipiscing mi eu nullam accumsan morbi arcu ornare odio mi adipiscing nascetur lacus ac interdum morbi accumsan vis mi accumsan.</p>
											</div>
											<!-- Break -->
											<div class="4u 12u$(medium)">
												<h3>SUBTITULO3</h3>
												<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit.</p>
											</div>
											<div class="4u 12u$(medium)">
												<h3>SUBTITULO4</h3>
												<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit.</p>
											</div>
											<div class="4u$ 12u$(medium)">
												<h3>SUBTITULO5</h3>
												<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit.</p>
											</div>
										</div>

									<hr class="major" />

									<!-- Elements -->
										<h2 id="elements">Eventos</h2>
										<div class="row 200%">
											<div class="6u 12u$(medium)">

											



												<!-- Table -->
													<h3>tablas</h3>

													<h4>por defecto clase table calss wraper</h4>
													<div class="table-wrapper">
														<table>
															<thead>
																<tr>
																	<th>nombre</th>
																	<th>descripcion</th>
																	<th>precio</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>col 1</td>
																	<td>col 2</td>
																	<td>col 3</td>
																</tr>
																<tr>
																	<td>Item2</td>
																	<td>descrip.</td>
																	<td>19.99</td>
																</tr>
																<tr>
																	<td>Item3</td>
																	<td>descrip</td>
																	<td>29.99</td>
																</tr>
																<tr>
																	<td>Item4</td>
																	<td>descrip</td>
																	<td>19.99</td>
																</tr>
																<tr>
																	<td>Item5</td>
																	<td>descrip</td>
																	<td>29.99</td>
																</tr>
															</tbody>
															<tfoot>

																<tr>
																	<td colspan="2">Total "se unen dos celdas</td>
																	<td>100.00</td>
																</tr>
															</tfoot>
														</table>
													</div>

												<!-- Form -->
													<h3>Formulario</h3>

													<form method="post" action="#">
														<div class="row uniform">
															<div class="6u 12u$(xsmall)">
																<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
															</div>
															<div class="6u$ 12u$(xsmall)">
																<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
															</div>
															<!-- Break -->
															<div class="12u$">
																<div class="select-wrapper">
																	<select name="demo-category" id="demo-category">
																		<option value="">- Categoria -</option>
																		<option value="1">opcion 1</option>
																		<option value="1">opcion 2</option>
																		<option value="1">opcion 3</option>
																		<option value="1">opcion 4</option>
																	</select>
																</div>
															</div>
															<!-- Break -->
															<div class="4u 12u$(small)">
																<input type="radio" id="demo-priority-low" name="demo-priority" checked>
																<label for="demo-priority-low">item1</label>
															</div>
															<div class="4u 12u$(small)">
																<input type="radio" id="demo-priority-normal" name="demo-priority">
																<label for="demo-priority-normal">item2</label>
															</div>
															<div class="4u$ 12u$(small)">
																<input type="radio" id="demo-priority-high" name="demo-priority">
																<label for="demo-priority-high">item3</label>
															</div>
															<!-- Break -->
															<div class="6u 12u$(small)">
																<input type="checkbox" id="demo-copy" name="demo-copy">
																<label for="demo-copy">Si</label>
															</div>
															<div class="6u$ 12u$(small)">
																<input type="checkbox" id="demo-human" name="demo-human" checked>
																<label for="demo-human">No </label>
															</div>
															<!-- Break -->
															<div class="12u$">
																<textarea name="demo-message" id="demo-message" placeholder="Ingresa imagen" rows="6"></textarea>
															</div>
															<!-- Break -->
															<div class="12u$">
																<ul class="actions">
																	<li><input type="submit" value="Enviar" class="special" /></li>
																	<li><input type="reset" value="Borrar" /></li>
																</ul>
															</div>
														</div>
													</form>	

											</div>




											<div class="6u$ 12u$(medium)">

<!-- __________________________________columna dos del contenido______________________________________ -->												
												

												<!-- Image -->
													
													<h4>Izquierda &amp; Derecha</h4>
													<p><span class="image left"><img src="../images/pic01.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
													<p><span class="image right"><img src="../images/pic02.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>

												

											</div>
										</div>

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search ->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section-->

							
						<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2 style="color: black;">Menu</h2>
									</header>
									<ul>
										<li><a href="operario.php">Inicio</a></li>
										<li>
											<span class="opener">Ingresos Usuarios</span>
											<ul>
												<li style="color: black;"><a href="#">Listar</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Ingresos Vehiculos</span>
											<ul>
												<li style="color: black;"><a href="#">Crear</a></li>
												<li style="color: black;"><a href="#">Modificar</a></li>
												<li style="color: black;"><a href="#">Actualizar</a></li>
												<li style="color: black;"><a href="#">Listado</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Puntos de parqueo</span>
											<ul>
												<li style="color: black;"><a href="#">Visualizar Punto/parqueo</a></li>
												<li style="color: black;"><a href="#">Programar Punto/parqueo</a></li>
												
											</ul>
										</li>
										
										<li><a href="elements.php">Programar Eventos</a></li>
										
										
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

	</body>
</html>

<?php
    }
    else{
        echo'<script>window.location ="../	index.php"</script>';

        }
 ?>
