<?php 
		# code...
	include ("../../connect_db.php");

	$cedula = $_POST['cedula'];

	$req = (strlen($cedula) or die(mysql_error("Campo Vacio")) );

	if ($req!="") {
		# code...

	$sentencia=mysql_query("DELETE FROM usuarios WHERE cedula='$cedula' and cargo!='administrador' ")or die("datos no eliminados"); 
	
	echo "<script type='text/javascript'>
	alert('Usuario Eliminado exitosamente');
	window.location.href='../eliminaruser.php';
	</script>";

	mysql_close($sentencia);
	}
	else{
	echo "<script type='text/javascript'>
	alert('Ususario No eliminado');";
	}

	
?>