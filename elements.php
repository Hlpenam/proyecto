<?php
    session_start();
    ob_start();
    include 'connect_db.php';

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
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="estilos.css">
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
										<li><span class="label"></span>-ADMINISTRADOR-</li>
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

												<!-- Text stuff -->
													<h3>texto</h3>
													<p>esto es ancho <b>oscuro</b> y esto es negrita <strong>negrita</strong>. etsto es fuente <i>italic</i> y esto es	 <em>Cursiva</em>.
													esto es in <sup>titulo superior</sup> esto es un <sub>titulo inferior</sub> .
													este es un <u>subrayado</u>esta es la forma de comentar codigo <code>for (;;) { ... }</code>.
													finalmente esto es un link con href <a href="#">link</a>.</p>
													<hr />
													
													<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>

												<!-- Lists -->
													<h3>Listas</h3>
													<div class="row">
														<div class="6u 12u$(small)">

															<h4>No ordenadas</h4>
															<ul>
																<li>Dolor etiam magna etiam.</li>
																<li>Sagittis lorem eleifend.</li>
																<li>Felis dolore viverra.</li>
															</ul>

															<h4>Alternativas</h4>
															<ul class="alt">
																<li>Dolor etiam magna etiam.</li>
																<li>Sagittis lorem eleifend.</li>
																<li>Felis feugiat viverra.</li>
															</ul>

														</div>
														<div class="6u$ 12u$(small)">

															<h4>Ordenadas</h4>
															<ol>
																<li>Dolor etiam magna etiam.</li>
																<li>Etiam vel lorem sed viverra.</li>
																<li>Felis dolore viverra.</li>
																<li>Dolor etiam magna etiam.</li>
																<li>Etiam vel lorem sed viverra.</li>
																<li>Felis dolore viverra.</li>
															</ol>

															<h4>Iconos</h4>
															<ul class="icons">
																<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
																<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
																<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
																<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
																<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
																<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
															</ul>

														</div>
													</div>
													<h4>Definiciones</h4>
													<dl>
														<dt>Punto1</dt>
														<dd>
															<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor.</p>
														</dd>
														<dt>Punto2</dt>
														<dd>
															<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor.</p>
														</dd>
														<dt>Punto3</dt>
														<dd>
															<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor.</p>
														</dd>
													</dl>

													<h4>Botones de accion clase actions</h4>
													<ul class="actions">
														<li><a href="#" class="button special">por defecto especial</a></li>
														<li><a href="#" class="button">por defecto</a></li>
													</ul>
													<h4>Botones de accion clase actions small</h4>
													<ul class="actions small">
														<li><a href="#" class="button special small">boton Small special</a></li>
														<li><a href="#" class="button small"> boton Small</a></li>
													</ul>

													<h4>Botones de accion clase actions en div con clase rows</h4>
													<div class="row">
														<div class="6u 12u$(small)">
															<ul class="actions vertical">
																<li><a href="#" class="button special">Default</a></li>
																<li><a href="#" class="button">Default</a></li>
															</ul>
														</div>
														<div class="6u$ 12u$(small)">
															<ul class="actions vertical small">
																<li><a href="#" class="button special small">Small</a></li>
																<li><a href="#" class="button small">Small</a></li>
															</ul>
														</div>
														<div class="6u 12u$(small)">
															<ul class="actions vertical">
																<li><a href="#" class="button special fit">Default</a></li>
																<li><a href="#" class="button fit">Default</a></li>
															</ul>
														</div>
														<div class="6u$ 12u$(small)">
															<ul class="actions vertical small">
																<li><a href="#" class="button special small fit">Small</a></li>
																<li><a href="#" class="button small fit">Small</a></li>
															</ul>
														</div>
													</div>

													<h4>Paginacion</h4>
													<ul class="pagination">
														<li><span class="button disabled">atras</span></li>
														<li><a href="#" class="page active">1</a></li>
														<li><a href="#" class="page">2</a></li>									
														<li><span>&hellip;</span></li>
														<li><a href="#" class="page">3</a></li>
														<li><a href="#" class="page">4</a></li>
														<li><a href="#" class="button">siguiente</a></li>
													</ul>

												<!-- Blockquote -->
													<h3>se llama una cita o Blockquote</h3>
													<blockquote>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.</blockquote>

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

													<h4>Tabla Alternativa</h4>
													<div class="table-wrapper">
														<table class="alt">
															<thead>
																<tr>
																	<th>nombre</th>
																	<th>descripcion</th>
																	<th>precio</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Item4</td>
																	<td>descrip</td>
																	<td>19.99</td>
																</tr>
																<tr>
																	<td>Item4</td>
																	<td>descrip</td>
																	<td>19.99</td>
																</tr>
																<tr>
																	<td>Item4</td>
																	<td>descrip</td>
																	<td>19.99</td>
																</tr>
																<tr>
																	<td>Item4</td>
																	<td>descrip</td>
																	<td>19.99</td>
																</tr>
																<tr>
																	<td>Item4</td>
																	<td>descrip</td>
																	<td>19.99</td>
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

											</div>
											<div class="6u$ 12u$(medium)">

<!-- __________________________________columna dos del contenido______________________________________ -->												
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

												<!-- Image -->
													<h3>Imagenes</h3>

													<h4>Formas</h4>
													<span class="image fit"><img src="images/pic11.jpg" alt="" /></span>
													<div class="box alt">
														<div class="row 50% uniform">
															<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
															<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
															<div class="4u$"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
															<!-- Break -->
															<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
															<div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
															<div class="4u$"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
															<!-- Break -->
															<div class="4u"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
															<div class="4u"><span class="image fit"><img src="images/pic03.jpg" alt="" /></span></div>
															<div class="4u$"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
														</div>
													</div>

													<h4>Izquierda &amp; Derecha</h4>
													<p><span class="image left"><img src="images/pic01.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
													<p><span class="image right"><img src="images/pic02.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>

												<!-- Box -->
													<h3>Recuadro</h3>
													<div class="box">
														<p>Felis sagittis eget tempus primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Magna sed etiam ante ipsum primis in faucibus vestibulum.</p>
													</div>

												<!-- Preformatted Code -->
													<h3>Codigo en Recuadro</h3>
													<pre><code>i = 0;
aqui editamos nuestro codigo para tutorias
esto toma el ancho de nuestro editor

while (!deck.isInOrder()) {
 print 'Iteration ' + i;
 deck.shuffle();
 i++;
}

print 'It took ' + i + ' iterations to sort the deck.';
</code></pre>

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
										<li><a href="Administrador.php">Inicio</a></li>
										<li>
											<span class="opener">Ingresos Usuarios</span>
											<ul>
												<li style="color: black;"><a href="#">Crear</a></li>
												<li style="color: black;"><a href="#">Eliminar</a></li>
												<li style="color: black;"><a href="#">Modificar</a></li>
												<li style="color: black;"><a href="#">Actualizar</a></li>
												<li style="color: black;"><a href="#">Listado</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Ingresos Vehiculos</span>
											<ul>
												<li style="color: black;"><a href="./proyecto/cru">Crear</a></li>
												<li style="color: black;"><a href="#">Eliminar</a></li>
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
										<li>
											<span class="opener">Informes</span>
											<ul>
												<li style="color: black;"><a href="#">Diario</a></li>
												<li style="color: black;"><a href="#">Semanal</a></li>
												<li style="color: black;"><a href="#">Mensual</a></li>
												
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

	</body>
</html>

<?php
    }
    else{
        echo'<script>window.location ="index.php"</script>';

        }
 ?>
