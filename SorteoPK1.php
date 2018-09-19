<?php
    session_start();
    ob_start();
    include 'connect_db.php';

    if (isset($_SESSION['email'])) { ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Puntos de Parqueo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<style type="text/css">
			#colores{
					background: black;
					color: white;

			}
			#colores2{

				background: #22A2FA;
				color: white;


			}
		</style>
		
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

							<!-- Content -->
						

					<section>	
						<header class="main">
										<h1>Listado de los puntos de parqueo para el presente</h1>
						</header>
					<div class="table-responsive">

						<form name="form1" method="get" id="cdr" >
  									<h3>Listado de los parqueaderos asignados para el presente mes</h3>
      								<p>
      								<input type="hidden" name="randomize" value="true">
        							<input type="submit" value="Generar Sorteo" />
        							</p>
      								</p>
						</form>
								<table>
								  <thead>
								 
								    <tr>
								      
								      <th  id="colores" scope="col">Id</th>
								      <th  id="colores" scope="col">Email</th>
								       <th  id="colores" scope="col">Apartamento</th>
								       <th  id="colores" scope="col">Parqueadero</th>
								     </tr>
								  </thead>
								 <tbody>
								
								<?php
									$link=mysqli_connect('localhost','root','','sionweb2');
									$d=mt_rand(1,100);
 
									
										//echo "SELECT * FROM usuarios WHERE cedula LIKE '%".$busca."%'";
									$mostrar="SELECT * FROM usuariosPK ORDER BY RAND( ) LIMIT 5 ";//cambiar nombre de la tabla de busqueda

									$result=mysqli_query($link,$mostrar);
								 	while($mostrar=mysqli_fetch_array($result)){
		 							

								  ?>
								  <tbody>
									<tr>
									<td id="colores2"><?php echo $mostrar['id']; ?></td>

									<td id="colores2"><?php echo $mostrar['email']; ?></td>
									<td id="colores2"><?php echo $mostrar['apartamento']; ?></td>	
									<td id="colores2"><?php echo $d=mt_rand(1,100); ?></td>						
									</tr>
								</tbody>

								
								  <?php

									

								}
								  ?>
								  </tbody>
								</table>
   						<table class="table table-dark table-bordered table-striped table-responsive" >
								  <thead>
								  
								    <tr >
								    
								      <th scope="col">Id</th>
								      <th scope="col">Email</th>
								       <th scope="col">Apartamentoo</th>
								     </tr>
								  </thead>
								  <tbody>

								     <?php 
								  
								  $link=mysqli_connect('localhost','root','','sionweb2');
								  $sql="SELECT * FROM usuariosPK WHERE id != ''";
								  $result=mysqli_query($link,$sql);

								  while($mostrar=mysqli_fetch_array($result)){
		 
								  ?>
								<tbody>
									
									<td><?php echo $mostrar['id']; ?></td>
									<td><?php echo $mostrar['email']; ?></td>
									<td><?php echo $mostrar['apartamento']; ?></td>						
									
								</tbody>

								<?php 
								}
								?>
								  </tbody>
						</table>
					</div>
					</section>	
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner" style="background-color: #3651f9;">
							
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
												<li style="color: black;"><a href="#">Eliminar</a></li>
												<li style="color: black;"><a href="crud_ve/updateve.php">Modificar</a></li>
												<li style="color: black;"><a href="crud_ve/listarve.php">Listado</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Puntos de parqueo</span>
											<ul>
												<li style="color: black;"><a href="SorteoPK1.php">Visualizar Punto/parqueo</a></li>
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
        echo'<script>window.location ="../index.php"</script>';

        }
 ?>
