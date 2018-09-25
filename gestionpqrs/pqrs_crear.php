

<!DOCTYPE HTML>
<html>
	<head>
		<title>Conjunto Residencial</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
	<body>
		<div id="wrapper">

			<div id="main">
				<div class="inner">
					
					<header id="header">
									<a href="../clientes/clientes.php" class="logo"><strong>Timiza ParkLot</strong> Conjunto Residensial</a>
									<ul class="icons">
										
										<li><a href="cerrar_sesion.php" class="icon fa-instagram" id="test" onclick="test()"><span class="label" ></span>-SALIR-</a></li>
										<li><span class="label"></span>-CLIENTES-</li>
										
									</ul>
								</header>
							<section>
									<header class="main">
										<h1>Crear PQRS</h1>
									</header>
						
						<form  action="controlador/registro.php" method="post" class="form-signin">
								 <div class="form-group">

								 									 	<!-- campos nombres-->
								 	<small id="cedulaHelp" class="form-text text-muted">cedula.</small>
								 	<input type="text" class="form-control" id="exampleInputapellido1" name="cedula" aria-describedby="cedulaHelp" placeholder="Ingrese su numero de cedula">
								 	<!-- campos E-mail-->
								 	<small id="E-mailHelp" class="form-text text-muted">E-mail.</small>
								 	<input type="text" class="form-control" id="exampleInputE-mail1" name="email" aria-describedby="E-mailHelp" placeholder="Ingrese su E-mail">

								 	<small id="E-mailHelp" class="form-text text-muted">opcion PQRS</small>
								 	<select name="categoria" class="form-control" style="margin-left: 0%;"list="ingreso"  id="ingreso" class="cuadro">

					                    <option value="peticiones" class="form-control">peticiones</option>
					                    <option value="quejas" class="form-control">quejas</option>
					                    <option value="reclamos" class="form-control">reclamos</option>
					                 	<option value="sugerencias" class="form-control">sugerencias</option>

					                </select>

					                <!-- campos observaciones-->
								 	<small id="observacionesHelp" class="form-text text-muted">observaciones.</small>
								 	<input type="text" class="form-control" id="exampleInputobservaciones1" name="observaciones" aria-describedby="E-mailHelp" placeholder="Ingrese su observacion">

								 	<div class="form-control">
								 	<input type="date" class="form-control" id="fechaingreso name="fecha ingreso"
								 	 style="visibility:hidden ">
								 	</div>
								 	<div class="form-check" style="margin-top: 1%">
								 		<button type="submit" name="submit tc" class="btn btn-primary">crear</button>
								 	</div>

				</div>
			</div>
		</div>
		



	</body>


