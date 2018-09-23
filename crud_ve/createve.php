<?php
    session_start();
    ob_start();
    include '../connect_db.php';

    if (isset($_SESSION['email'])) {?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>General</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="../estilos.css">
		<link rel="stylesheet" href="../assets/css/main.css" />
		
		
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
										<h1>Crear Vehiculos</h1>
									</header>
						
						<form  action="CRUD/registro.php" method="post" class="form-signin">
								 <div class="form-group">

								 	<!-- campos cedula-->
								 	<small id="cedula" class="form-text text-muted">Insertar cedula.</small>
								 	<input type="text" class="form-control" id="cedula" name="cedula" aria-describedby="
								 	cedulahelp" placeholder="Ingrese la cedula">
								 	<!-- campos placa-->
								 	<small id="placa" class="form-text text-muted">Creación de Placa.</small>
								 	<input type="text" class="form-control" id="placa" name="placa" aria-describedby="placahelp" placeholder="Ingrese la placa">
								 	<!-- campos nombres-->
								 	<small id="color" class="form-text text-muted">Creación Color.</small>
								 	<input type="text" class="form-control" id="color" name="color" aria-describedby="nombreHelp" placeholder="Ingrese color">
								 	
								    <!-- campos apellidos-->
								    <small id="marca" class="form-text text-muted">Creación de Marca.</small>
								    <input type="text" class="form-control" id="marca" name="marca" aria-describedby="apellidoHelp" placeholder="Ingrese marca">

								    <!-- campos telefono-->
								    <small id="estado" class="form-text text-muted">Creación de estado.</small>
								    <select class="form-control" id="estado" name="estado" aria-describedby="telefonohelp" placeholder="Ingrese el estado">
								    	<option value="disponible">Disponible</option>
								    	<option value="ocupado">Ocupado</option>
								    </select>

								
								  <!-- campo fecha inicio-->
								  <div class="form-group">
								    <label for="fechaingreso">Fecha ingreso</label>
								    <input type="date" class="form-control" id="fechaingreso" name="fechaingreso" >
								  </div>
								  <!-- campo fecha fin-->
								  <div class="form-group">
								    <label for="fechasalida">Fecha salida</label>
								    <input type="date" class="form-control" id="fechasalida" name="fechasalida" >
								  </div>

								  <div class="form-group">
								 	<small id="emailHelp" class="form-text text-muted" >Observaciones</small>
								    <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
								  </div>
								   <div class="form-group">
								 	<small id="emailHelp" class="form-text text-muted" >origen</small>
								    <textarea class="form-control" id="origen" name="origen" rows="3"></textarea>
								  </div>
							
								 

								  <div class="form-check" style="margin-top: 1%;">
								     <button type="submit" name="submit tc" class="btn btn-primary">Crear</button>
								  </div>


						</form>
							
									
					</section>

					<section>	
					<div class="table-responsive">
   						<table class="table table-small-font table-bordered table-striped table-responsive">
								  <thead>
								  	<h1 style="text-align: center;">Listados de Ingreso</h1>
								    <tr>
								    
								      <th scope="col">Placa</th>
								      <th scope="col">Color</th>
								      <th scope="col">Marca</th>
								      <th scope="col">Estado</th>
								      <th scope="col">Fecha entrada</th>
								      <th scope="col">Fecha salida</th>
								      <th scope="col">Obervaciones</th>
								      <th scope="col">origen</th>
								    
								     </tr>
								  </thead>
								  <?php 
								  
								  $link=mysqli_connect('localhost','root','','sionweb2');
								  $sql="SELECT * FROM vehiculos ";
								  $result=mysqli_query($link,$sql);

								  while($mostrar=mysqli_fetch_array($result)){
		 
								  ?>
								<tbody>
									
									<td><?php echo $mostrar['placa']; ?></td>
									<td><?php echo $mostrar['color']; ?></td>
									<td><?php echo $mostrar['marca']; ?></td>
									<td><?php echo $mostrar['estado']; ?></td>
									<td><?php echo $mostrar['fecha_ingreso']; ?></td>
									<td><?php echo $mostrar['fecha_salida']; ?></td>
									<td><?php echo $mostrar['observaciones']; ?></td>
									<td><?php echo $mostrar['origen']; ?></td>
								</tbody>

								<?php 
								}
								?>
								 
						</table>
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
												<li style="color: black;"><a href="createve.php">Crear</a></li>
												<li style="color: black;"><a href="deleteve.php">Eliminar</a></li>
												<li style="color: black;"><a href="updateve.php">Modificar</a></li>
												<li style="color: black;"><a href="listarve.php">Listado</a></li>
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
										<li><a href="../generic.php">Quejas y Reclamos(PQR)</a></li>
										
										
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
