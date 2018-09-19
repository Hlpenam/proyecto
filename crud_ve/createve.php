<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Matricular Vehiculos</title>

		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="../estilos.css">
		<link rel="stylesheet" href="../assets/css/main.css" />
</head>
<body>
	<form action="./CRUD/registro.php" method="POST">
		<label>Placa</label><input type="text" name="placa"><br><br>
		<label>Color</label><input type="text" name="color"><br><br>
		<label>Marca</label><input type="text" name="marca"><br><br>
		<label>Estado</label><select name="estado" ><br><br>
			<option value="Disponible">Disponible</option>
			<option value="Ocupado">Ocupado</option>


		</select><br><br>
		<label>Fecha_ingreso</label><input type="date" name="fechaingreso"><br><br>
		<label>Fecha_salida</label><input type="date" name="fechasalida"><br><br>
		<label>Observaciones</label><input type="text" name="observaciones"><br><br>
		<label>Origen</label><input type="text" name="origen"><br><br>
		<input type="submit" value="Insertar">
	</form>
 
</body>
</html>