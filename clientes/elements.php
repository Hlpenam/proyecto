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
									<a href="../Administrador.php" class="logo"><strong>Timiza ParkLot</strong> Conjunto Residensial</a>
									<ul class="icons">
										<li><a href="../cerrar_sesion.php" class="icon fa-instagram"><span class="label"></span>-SALIR-</a></li>
										<li><span class="label"></span>-CLIENTE-</li>
									</ul>
							</header>

									<!-- Tabla eventos en base de datos  -->
							<section>
								<header class="main">
											<h1>Eventos destacados</h1>
								</header>
										<div class="12u$ 12u$(medium)">

													
										<div class="row">

											 <?php 
												
										   		$link=mysqli_connect('localhost','root','','sionweb2');
										  		$sql="SELECT * FROM eventos WHERE  estado = 1";
										  		$result=mysqli_query($link,$sql);
												while($mostrar=mysqli_fetch_array($result)){

											  ?>
											 <div class="12u 12u$(medium)">
												<!-- titulos y subtitulos -->
												<div class="12u 12u$(medium)">
												<h2 id="content"><?php echo  utf8_encode($mostrar['titulo']); ?></h2>
												<p><?php echo  utf8_encode($mostrar['mensaje']); ?>	</p>						</div>

												<div class="6u 12u$(medium)">
												<h2 id="content"><?php echo  utf8_encode($mostrar['subtitulo']); ?></h2>
												<p><?php echo  utf8_encode($mostrar['submensaje']); ?>								</p>
												</div>
												<div class="6u 12u$(medium)" style="width: 200px; height: 200px;">
												<p><?php echo("<img src='".$mostrar['imagenes']."' style='width:100px; height:100px;'>");?></p>

												</div>
											</div>
														<?php }?>
										</div>

										<hr class="major" />


											<!-- Elements -->
										<h2 id="elements">Historial Eventos</h2>
											
											<div class="12u 12u$(medium)">
												 	<?php 
													mysql_set_charset('UTF-8');
											   		$link=mysqli_connect('localhost','root','','sionweb2');
											  		$sql="SELECT * FROM eventos WHERE  estado = 0";
											  		$result=mysqli_query($link,$sql);
												  	while($mostrar=mysqli_fetch_array($result)){
												  	?>	
													<!-- Text stuff -->
													<div class="6u 6u$(medium)" style="float: left; padding: 1%;">
													<h3><?php echo  utf8_encode($mostrar['titulo']);?></h3>
													<p><?php echo  utf8_encode($mostrar['mensaje']);?></p>
													<h3><?php echo  utf8_encode($mostrar['subtitulo']);?></h3>
													<p><?php echo  utf8_encode($mostrar['submensaje']);?></p>
													<hr />
													</div>
													<?php }?>

													<div class="12u">
													<h3>Informacion General</h3>
													<p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.</p>
													</div>			
											</div>
												<!-- Blockquote -->
												<br>
											<div class="12u 12u$(xsmall)">
													<h3>Informacion General</h3>
													<p><blockquote>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Lorem ipsum dolor. Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus.</blockquote></p>
											</div>

											<div class="12u 12u$(medium)">
												
													
													<!-- Table -->
													<h3>Listado de Eventos</h3>

													<h4>Listado Eventos Realizados Durante el Año</h4>
													<div class="table-wrapper">
														<div class="table-responsive" style="height: 300px; overflow: scroll;">
									   						<table class="table table-small-font table-bordered table-striped table-responsive" >
																	  <thead>
																	  
																	    <tr>
																	    
																	      <th scope="col">ID</th>
																	      <th scope="col">Título</th>
																	       <th scope="col">Mensaje</th>
																	      <th scope="col">Subtítulo</th>
																	      <th scope="col">SubMensaje</th>
																	      <th scope="col">Estado</th>
																	     </tr>
																	  </thead>
																	  <?php 
																	  
																	  $link=mysqli_connect('localhost','root','','sionweb2');
																	  $sql="SELECT * FROM eventos where estado <=1";
																	  $result=mysqli_query($link,$sql);

																	  while($mostrar=mysqli_fetch_array($result)){
											 
																	  ?>
																	<tbody>
																	
																		<td><?php echo utf8_encode($mostrar['id']); ?></td>
																		<td><?php echo utf8_encode($mostrar['titulo']); ?></td>
																		<td><?php echo utf8_encode($mostrar['mensaje']); ?></td>						
																		<td><?php echo utf8_encode($mostrar['subtitulo']); ?></td>
																		<td><?php echo utf8_encode($mostrar['submensaje']); ?></td>
																		<td><?php echo utf8_encode($mostrar['estado']); ?></td>
																	</tbody>

																	<?php 
																	}
																	?>
															</table>
														</div>
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
										<li><a href="clentes.php">Inicio</a></li>
										
										
										<li>
											<span class="opener">Puntos de parqueo</span>
											<ul>
												<li style="color: black;"><a href="#">Visualizar Punto/parqueo</a></li>
											
											</ul>
										</li>
										
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
			<script src="../assets/js/mijava.js"></script>

	</body>
</html>

<?php
    }
    else{
        echo'<script>window.location ="../index.php"</script>';
        }
 ?>
