<!DOCTYPE html>
<html lang="es">
<head>
	<title>Edicion del vehiculo</title>
</head>
<body>
	<?php
		if(isset($_GET['placa'])){
			include '../connect_db.php';
			$placa =$_GET['placa'];
			$query ="SELECT * FROM vehiculo WHERE placa ='$placa'";
			$consulta1=$mysqli->query($query);
			$fila=$consulta1->fetch_array(MYSQLI_ASSOC);
			echo ('<form action="./procesos/editarDatos.php" method="POST">
		<input type="hidden" name="placa" value="'.$fila['placa'].'">
		<label>Placa</label><input type="text" name="placa" value="'.$fila['placa'].'"><br><br>
		<label>Color</label><input type="text" name="color" value="'.$fila['color'].'"><br><br>
		<label>Marca</label><input type="text" name="marca" value="'.$fila['marca'].'"><br><br>
		<label>Estado</label><select name="estado" value="'.$fila['estado'].'" ><br><br>
	
		
			<option value="Disponible">Disponible</option>
			<option value="Ocupado">Ocupado</option>


		</select><br><br>
		

		<label>Observaciones</label><input type="text" name="observaciones" value="'.$fila['observaciones'].'" ><br><br>
		<label>Origen</label><input type="text" name="origen" value="'.$fila['origen'].'" ><br><br>
		<input type="submit" value="Insertar">
	</form>');
		}else{
			
		}



	?>



</body>
<!-- 
<label>Fecha_ingreso</label><input type="date" name="fechaingreso" value="'.$fila['fechaingreso'].'"><br><br>
		<label>Fecha_salida</label><input type="date" name="fechasalida" value="'.$fila['fechasalida'].'" ><br><br>

 -->
</html>