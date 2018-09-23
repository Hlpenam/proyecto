<?php // valores de registro para ingresar informacion 
	include("../../connect_db.php");
	

		//obtenemos los variables del formulario
	$cedula=$_POST['cedula'];
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$telefono = $_POST['telefono'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$cargo = $_POST['cargo'];
	$contrasena = $_POST['contrasena'];
	$fecha_ingreso = $_POST['fecha_ingreso'];
	$fecha_fin=$_POST['fecha_fin'];
	$observaciones = $_POST['observaciones'];
	
		# code...
		//Obtiene la longitus de un string si son rellenados o no los campos
	$req = (strlen($cedula)*strlen($nombres)*strlen($apellidos)*strlen($telefono)*strlen($celular)*strlen($email)*strlen($cargo)*strlen($contrasena)*strlen($fecha_ingreso)*strlen($fecha_fin)*strlen($observaciones)) or die("No se han llenado todos los campos"); // si los campos no se llenan nos mostrara un mensaje que faltan campos por diligenciar.
	

	if ($req > 0) {
	//se encripta la contraseña
	if ($cargo=="operador") {
		//$contrase = crypt($contrasena);
		//ingresamos la informacion a la base de datos
	$sentencia=mysql_query("INSERT INTO usuarios (cedula,nombres,apellidos,telefono,celular,email,cargo,contrasena,contrasenaoper,contrasenaclient,fecha_ingreso,fecha_fin,observaciones)  VALUES('$cedula','$nombres','$apellidos','$telefono','$celular','$email','$cargo','','$contrasena','','$fecha_ingreso','$fecha_fin','$observaciones')",$link) or die ("problemas al conectar");

	$sentencia3=mysql_query("INSERT INTO usuariosbk (cedula,nombres,apellidos,telefono,celular,email,cargo,contrasena,contrasenaoper,contrasenaclient,fecha_ingreso,fecha_fin,observaciones)  VALUES('$cedula','$nombres','$apellidos','$telefono','$celular','$email','$cargo','','$contrasena','','$fecha_ingreso','$fecha_fin','$observaciones')",$link) or die ("problemas al conectar");
	
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="../crearuser.php";
		</script>
	';
	mysql_close($sentencia,$sentencia3);
	} 
	
}else {

	echo "<script>
			alert('Registro no Exitoso');
			
		</script>";
}


if ($cargo=="cliente") {
	//$contrase = crypt($contrasena);
	$sentencia2=mysql_query("INSERT INTO usuarios (cedula,nombres,apellidos,telefono,celular,email,cargo,contrasena,contrasenaoper,contrasenaclient,fecha_ingreso,fecha_fin,observaciones)  VALUES('$cedula','$nombres','$apellidos','$telefono','$celular','$email','$cargo','','','$contrasena','$fecha_ingreso','$fecha_fin','$observaciones')",$link) or die ("problemas al conectar");

	$sentencia4=mysql_query("INSERT INTO usuariosbk (cedula,nombres,apellidos,telefono,celular,email,cargo,contrasena,contrasenaoper,contrasenaclient,fecha_ingreso,fecha_fin,observaciones)  VALUES('$cedula','$nombres','$apellidos','$telefono','$celular','$email','$cargo','','','$contrasena','$fecha_ingreso','$fecha_fin','$observaciones')",$link) or die ("problemas al conectar");
	
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="../crearuser.php";
		</script>
	';
	mysql_close($sentencia2,$sentencia4);
} else {

	echo "<script>
			alert('Registro no Exitoso');
			
		</script>";
}

	
	
?>