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
										<h1>Crear Usuarios</h1>
									</header>
						
						<form  action="CRUD/Insertaruser.php" method="post" class="form-signin">
								 <div class="form-group">

								 	<!-- campos cedula-->
								 	<small id="cedulahelp" class="form-text text-muted">Creación de Cédula.</small>
								 	<input type="text" class="form-control" id="exampleInputCedula1" name="cedula" aria-describedby="cedulahelp" placeholder="Ingrese la Cédula">
								 	<!-- campos nombres-->
								 	<small id="nombreHelp" class="form-text text-muted">Creación de Nombres.</small>
								 	<input type="text" class="form-control" id="exampleInputNombre1" name="nombres" aria-describedby="nombreHelp" placeholder="Ingrese los Nombres">
								 	
								    <!-- campos apellidos-->
								    <small id="apellidoHelp" class="form-text text-muted">Creación de Apellidos.</small>
								    <input type="text" class="form-control" id="exampleInputapellido1" name="apellidos" aria-describedby="apellidoHelp" placeholder="Ingrese los Apellidos">

								    <!-- campos telefono-->
								    <small id="telefonohelp" class="form-text text-muted">Creación de Telefono.</small>
								    <input type="text" class="form-control" id="exampleInputTelefono1" name="telefono" aria-describedby="telefonohelp" placeholder="Ingrese el telefono">

								    <!-- campos celular-->
								    <small id="celularhelp" class="form-text text-muted">Creación de Celular.</small>
								    <input type="text" class="form-control" id="exampleInputCelular1" name="celular" aria-describedby="celularhelp" placeholder="Ingrese el celular">

								 	
								 </div>
								 <div class="form-group">
									<!-- campos Email-->
									<small id="emailHelp" class="form-text text-muted">Creación de correo eléctronico.</small>
								    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
								    
								  </div>

								  <!-- seleecion de cargo-->

								   <div class="form-group">
								    <small id="emailHelp" class="form-text text-muted">Seleccione el Cargo</small>
								    <select class="form-control" id="exampleSelect1" name="cargo" onchange="habilitar(this)">
								    <option>--ninguno--</option>
									<option>operador</option> 
									<option>cliente</option> 

								   </div>


								    <!-- campo contraseña operario-->
								  <div class="form-group">
								   	 
								    <input type="password" class="form-control" id="exampleInputPassword" placeholder="contraseña" name="contrasena" >
								  </div>
								 
								  <!-- campo fecha inicio-->
								  <div class="form-group">
								    <label for="exampleInputfecha">Fecha Inicio</label>
								    <input type="date" class="form-control" id="exampleInputfecha" name="fecha_ingreso" >
								  </div>
								  <!-- campo fecha fin-->
								  <div class="form-group">
								    <label for="exampleInputfecha2">Fecha Fin</label>
								    <input type="date" class="form-control" id="exampleInputfecha2" name="fecha_fin" >
								  </div>
								 
							
								  <div class="form-group">
								 	<small id="emailHelp" class="form-text text-muted" >Observaciones</small>
								    <textarea class="form-control" id="exampleTextarea" name="observaciones" rows="3"></textarea>
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
								    
								      <th scope="col">Nombres</th>
								      <th scope="col">Apellidos</th>
								      <th scope="col">Calular</th>
								      <th scope="col">Email</th>
								      <th scope="col">Cargo</th>
								    
								     </tr>
								  </thead>
								  <?php 
								  
								  $link=mysqli_connect('localhost','root','','sionweb2');
								  $sql="SELECT * FROM usuarios WHERE cargo != 'administrador'";
								  $result=mysqli_query($link,$sql);

								  while($mostrar=mysqli_fetch_array($result)){
		 
								  ?>
								<tbody>
									
									<td><?php echo $mostrar['nombres']; ?></td>
									<td><?php echo $mostrar['apellidos']; ?></td>
									<td><?php echo $mostrar['celular']; ?></td>
									<td><?php echo $mostrar['email']; ?></td>
									<td><?php echo $mostrar['cargo']; ?></td>
									
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
												<li style="color: black;"><a href="crearuser.php">Crear</a></li>
												<li style="color: black;"><a href="eliminaruser.php">Eliminar</a></li>
												<li style="color: black;"><a href="modificaruser.php">Modificar</a></li>
												<li style="color: black;"><a href="listaruser.php">Listado</a></li>
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
												<li style="color: black;"><a href="../informes/diarios.php">Diario</a></li>
												<li style="color: black;"><a href="../informes/semanales.php">Semanal</a></li>
												<li style="color: black;"><a href="../informes/mensuales.php">Mensual</a></li>
												
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
