<?php
    session_start();
    ob_start();
    include '../connect_db.php';
    	
	if (isset($_SESSION['email'])) { ?>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Eventos Timiza ParkLot</title>
		<meta http-equiv="content.type" content="text/html" charset="utf8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="../estilos.css"/>
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
										<li><span class="label"></span>-ADMINISTRADOR-</li>
									</ul>
							</header>

									<!-- Tabla eventos en base de datos  -->
							<section>
								<header class="main">
											<h1>Programación de eventos</h1>
								</header>
										<div class="12u$ 12u$(medium)">

														<!-- __________________________________columna dos del contenido______________________________________ -->												
														<!-- Form -->
														<!--div>
														 	<input type="text" placeholder="Busca un producto por: Nombre o Tipo" id="buscamos"/>
														</div>
														<br>
														<div class="row uniform" id="titulosactualizados" style="overflow: auto; width: 1000px;height: 400px;"></div-->
															<h3>Formulario de Búsqueda y Edición de Títulos</h3>
														<div class="row uniform">
																
																<form name="form1" method="post" action="" id="cdr" >
										  								
										      								<div class="12u 12u$(xsmall)">
										        							<input name="id"  type="text" id="busqueda" placeholder="Buscar Id Título">
										        							</div>
										        							<br>
										        							<div class="12u 12u$(xsmall)">
										        							<input type="submit" name="Submit" value="buscar"  class="special"  />
										        							</div>
																</form>
														</div>
															<?php
																$busca="";
																$busca=	isset($_POST['id'])?$_POST['id']:"";
																$link=mysqli_connect('localhost','root','','sionweb2');
																
																if($busca!=""){
																	//echo "SELECT * FROM usuarios WHERE cedula LIKE '%".$busca."%'";

																$mostrar="SELECT * FROM eventos WHERE id = '".$busca."'";//cambiar nombre de la tabla de busqueda
																
																$result=mysqli_query($link,$mostrar);
														 		while($mostrar=mysqli_fetch_array($result)){
														  	?>
														 	<!-- Formulario de insercion-->
														 	
														 	<br>   
															<form action="../accionesEventos/ActualizarEvento.php" enctype="multipart/form-data" method="post">
																
																<h3>Actualización de los Eventos</h3>
																<div class="row uniform">
																	<div class="6u 12u$(xsmall)">
																		<LABEL>ID
																		<input type="text" class="form-control" id="example"  style="width: 100%;height:30px;  border-radius: 5px" aria-describedby="idHelp"  name="id" value="<?php echo $mostrar['id']; ?>" readonly></LABEL>
																	</div>
																	<div class="12u 12u$(xsmall)">
																		<LABEL>TITULOS
																		<input type="text" class="form-control" id="example" style="width: 100%;height:30px;  border-radius: 5px"aria-describedby="tituloHelp" name="titulo" value="<?php echo utf8_encode($mostrar['titulo']); ?>"></LABEL>
																	</div>
																	<div class="12u$">
																		<LABEL>MENSAJE PRINCIPAL
																		<input type="textarea" style="" class="form-control" id="example" aria-describedby="mensajeHelp" name="mensaje" value="<?php echo utf8_encode($mostrar['mensaje']); ?>" rows="6"></LABEL>
																	</div>
																	<div class="12u 12u$(xsmall)">
																		<LABEL>SUBTITULO
																		<input type="text" class="form-control" id="example" style="width: 100%;height:30px;  border-radius: 5px"aria-describedby="subtituloHelp" name="subtitulo" value="<?php echo utf8_encode($mostrar['subtitulo']); ?>"></LABEL>
																	</div>
																	<div class="6u$">
																		<LABEL>MENSAJE SECUNDARIO
																		<input type="textarea"  style="" class="form-control" id="example" aria-describedby="submensajeHelp" name="submensaje" value="<?php echo utf8_encode($mostrar['submensaje']); ?>" rows="6"></LABEL>
																		<LABEL>ESTADO (1 PRINCIPAL)(0 HISTORIAL)(OTRO NO SE MUESTRA EL EVENTO)
																		<input type="number" class="form-control" id="example" style="width: 100%;height:30px;  border-radius: 5px"  aria-describedby="estadoHelp" name="estado" value="<?php echo $mostrar['estado']; ?>"></LABEL>
																	</div>
																	
																	<!-- Break 
																	
																	<div class="12u$">
																		<label for="imagen"><h3>Imagen:</h3></label> 
																		<input class="special" id="imagen" name="imagen" size="30" type="file"/>
																	</div>-->
																	<!-- Break -->
																	<div class="6u$">
																		<button type="submit" class="btn btn-primary">Actualizar</button>
																	</div>
																</div>
															</form>
														
															<!-- Fin Formulario -->
															<?php
																	}

																}
															?>
											</div>
											<!-- Formulario de insercion-->
											<div class="12u$ 12u$(medium)">
													<h3>Formulario de Ingreso a Nuevos Eventos</h3>
														<form action="../accionesEventos/InsertarEvento.php" enctype="multipart/form-data" method="post">
															<div class="row uniform">
																	<div class="6u 12u$(xsmall)">
																		  <?php 
																	  
																	  $link=mysqli_connect('localhost','root','','sionweb2');
																	  $sql="SELECT * FROM eventos order by id desc limit 1 ";
																	  $result=mysqli_query($link,$sql);

																	  while($mostrar=mysqli_fetch_array($result)){
											 
																	  ?>
																		<LABEL>ID
																		<input type="text" class="form-control" id="example" style="width: 100%;height:30px;" aria-describedby="idHelp"  name="id" value="<?php echo $mostrar['id']+1; ?>" readonly></LABEL>
																	<?php } ?>

																	</div>
																	<div class="12u 12u$(xsmall)">
																		<LABEL>TITULOS
																		<input type="text" class="form-control" id="example" style="width: 100%;height:30px;  border-radius: 5px"aria-describedby="tituloHelp" name="titulo" ></LABEL>
																	</div>
																	<div class="12u$">
																		<LABEL>MENSAJE PRINCIPAL
																		<input type="textarea" class="form-control" id="example" aria-describedby="mensajeHelp" name="mensaje" rows="6"></LABEL>
																	</div>
																	<div class="12u 12u$(xsmall)">
																		<LABEL>SUBTITULO
																		<input type="text" class="form-control" id="example" style="width: 100%;height:30px;  border-radius: 5px"aria-describedby="subtituloHelp" name="subtitulo" ></LABEL>
																	</div>
																	<div class="12u$">
																		<LABEL>MENSAJE SECUNDARIO
																		<input type="textarea"  class="form-control" id="example" aria-describedby="submensajeHelp" name="submensaje" rows="6"></LABEL>
																		<LABEL>ESTADO (1 PRINCIPAL)(0 HISTORIAL)(OTRO NO SE MUESTRA EL EVENTO)
																		<input type="number"  class="form-control" id="example" style="width: 100%;height:30px;  border-radius: 5px" aria-describedby="estadoHelp" value="1" name="estado" readonly></LABEL>
																	</div>
																	<div class="12u$">
													 					<label for="imagen"><h3>Imagen:</h3></label> 

																		<input class="special" id="iman" name="ima" size="30000" type="file" accept="image/*" required="" />
																	</div>
																	<div class="6u$">
																	<ul class="actions">
																		<li><input type="submit" name="bntEnviar" value="Enviar Información" class="special" /></li>
																		
																	</ul>
																	</div>
														</form>
														
											</div>	
											<!--Fin de formulario-->
										<hr class="major">
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
										<li><a href="../Administrador.php">Inicio</a></li>
										<li>
											<span class="opener">Ingresos Usuarios</span>
											<ul>
												<li style="color: black;"><a href="../gestionusuarios/crearuser.php">Crear</a></li>
												<li style="color: black;"><a href="../gestionusuarios/eliminaruser.php">Eliminar</a></li>
												<li style="color: black;"><a href="../gestionusuarios/modificaruser.php">Modificar</a></li>
												<li style="color: black;"><a href="../gestionusuarios/listaruser.php">Listado</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Ingresos Vehiculos</span>
											<ul>
												<li style="color: black;"><a href="#">Crear</a></li>
												<li style="color: black;"><a href="#">Eliminar</a></li>
												<li style="color: black;"><a href="#">Modificar</a></li>
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
											<span class="#">Informes</span>
											<ul>
												<li style="color: black;"><a href="#">Diario</a></li>
												<li style="color: black;"><a href="#">Semanal</a></li>
												<li style="color: black;"><a href="#">Mensual</a></li>
												
											</ul>
										</li>
										<li><a href="../quejaspqr.php">Quejas y Reclamos(PQR)</a></li>
										
										
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
