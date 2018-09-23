
<?php
    session_start();
    ob_start();
    include '../connect_db.php';

    if (isset($_SESSION['email'])) {?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>General</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="../estilos.css">
		<link rel="stylesheet" href="../assets/css/main.css" />
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
										<h1>Listado de Usuarios</h1>
						</header>
					<div class="table-responsive">

						<form name="form1" method="post" action="" id="cdr" >
  									<h3>Buscar Ususario  </h3>
      								<p>
        							<input name="cedula"  type="text" id="busqueda">
        							<input type="submit" name="Submit" value="buscar" />
        							</p>
      								</p>
						</form>
						<form  action="" method="POST">	
								
								
								<?php
									$busca="";
									$busca=	isset($_POST['cedula'])?$_POST['cedula']:"";
									$link=mysqli_connect('localhost','root','','sionweb2');
									
									if($busca!=""){
										//echo "SELECT * FROM usuarios WHERE cedula LIKE '%".$busca."%'";
									$mostrar="SELECT  US.nombres, US.apellidos, US.telefono, US.celular,US.email, VE.placa, VE.marca, VE.fecha_ingreso, VE.fecha_salida, PK.id_puntopk, AP.torre, AP.apartamento FROM usuarios US 
										INNER JOIN vehiculos VE on US.cedula = VE.cedula 
										INNER JOIN punto_pk PK on US.cedula = PK.cedula
										INNER JOIN apartamento AP on US.cedula = AP.usuarios_cedula
										WHERE US.cedula = '".$busca."'";//cambiar nombre de la tabla de busqueda
									$result=mysqli_query($link,$mostrar);
								 while($mostrar=mysqli_fetch_array($result)){
		 							

								  ?>
								  <table>
								  <thead>
								 
								    <tr>
								      
								      <th  id="colores" scope="col">Nombres</th>
								      <th  id="colores" scope="col">Apellidos</th>
								       <th  id="colores" scope="col">Teléfono</th>
								      <th id="colores" scope="col">Celular</th>
								      <th  id="colores" scope="col">Email</th>
								      <th  id="colores" scope="col">Placa</th>
								       <th  id="colores" scope="col">Marca</th>
								      <th  id="colores" scope="col">Fecha ingreso</th>
								       <th  id="colores" scope="col">Fecha salida</th>
								      <th id="colores" scope="col">Punto / parqueo</th>
								      <th  id="colores" scope="col">Torre</th>
								      <th  id="colores" scope="col">Apartamento</th>
								     </tr>
								  </thead>
								 <tbody>
									
									<td id="colores2"><?php echo $mostrar['nombres']; ?></td>
									<td id="colores2"><?php echo $mostrar['apellidos']; ?></td>
									<td id="colores2"><?php echo $mostrar['telefono']; ?></td>						
									<td id="colores2"><?php echo $mostrar['celular']; ?></td>
									<td id="colores2"><?php echo $mostrar['email']; ?></td>
									<td id="colores2"><?php echo $mostrar['placa']; ?></td>
									<td id="colores2"><?php echo $mostrar['marca']; ?></td>
									<td id="colores2"><?php echo $mostrar['fecha_ingreso']; ?></td>
									<td id="colores2"><?php echo $mostrar['fecha_salida']; ?></td>						
									<td id="colores2"><?php echo $mostrar['id_puntopk']; ?></td>
									<td id="colores2"><?php echo $mostrar['torre']; ?></td>
									<td id="colores2"><?php echo $mostrar['apartamento']; ?></td>
								</tbody>
								</table>
								
								  <?php
									}

								}
								  ?>
						</form>
   										</div>
					</section>	
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							

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
										<li><a href="../elements.php">Programar Eventos</a></li>
										<li>
											<span class="opener">Informes</span>
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
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
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
   $(function() {
      $('.table-responsive').responsiveTable({options});
   });
</script>

	</body>
</html>

<?php
    }
    else{
        echo'<script>window.location ="../index.php"</script>';

        }
 ?>
