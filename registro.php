<?php // valores de registro para ingresar informacion 

	

	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");// a l conectarse por php ingresamos normal menteo cy si no la excepcion dira que no se pudo conextar al servidor
	$db = mysql_select_db("sionweb2",$link) or die("<h2>Error de Conexion</h2>"); // la variable db debe ser igual a la conexion en el archivo de php conexion.php

	//obtenemos los variables del formulario
	$cedula=$_POST['cedula'];
	$nombres = $_POST['nombreuser'];
	$apellidos = $_POST['apellidosuser'];
	$apartamento = $_POST['apartamento'];
	$telefono = $_POST['telefono'];
	$pass = $_POST['pass'];
	$email = $_POST['emailuser'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$categoria = $_POST['categoria'];	
	$rpass = $_POST['rpass'];

	//Obtiene la longitus de un string
	$req = (strlen($cedula)*strlen($nombres)*strlen($apellidos)*strlen($apartamento)*strlen($telefono)*strlen($email)*strlen($categoria)*strlen($rpass)) or die("No se han llenado todos los campos"); // si los campos no se llenan nos mostrara un mensaje que faltan campos por diligenciar.

	//se confirma la contraseña
	if ($categoria=="administrador") { // si la categoria es igual 
		# code...
	
	if ($pass!=$rpass) {
		//die('Las claves no coinciden y la categoria no coresponde, Verifique <br /> <a href="index.html">Volver</a>');
		die('<script>
			alert("Las claves no coinciden y la categoria no coresponde, Verifique");
			location.href="registro.html";
		</script>');
	}
	}else if ($categoria=="operario") {
		# code...
	if ($pass1!=$rpass) {
		//die('Las claves no coinciden y la categoria no coresponde, Verifique <br /> <a href="index.html">Volver</a>');
		die('<script>
			alert("Las claves no coinciden y la categoria no coresponde, Verifique");
			location.href="registro.html";
		</script>');
	}
}else if ($categoria=="cliente") {
	# code...
	if ($pass2!=$rpass) {
		//die('Las claves no coinciden y la categoria no coresponde, Verifique <br /> <a href="index.html">Volver</a>');
		die('<script>
			alert("Las claves no coinciden y la categoria no coresponde, Verifique");
			location.href="registro.html";
		</script>');
	}
	}

	//se encripta la contraseña
	$contraseñaUser = md5($pass);
	$contraseñaUser = md5($pass1);
	$contraseñaUser = md5($pass2);

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO login VALUES('','$cedula','$nombres','$apellidos','$apartamento','$telefono','$pass','$email','$pass1','$pass2','$categoria')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="registro.html";
		</script>
	';


?>