<?php 
		# code...
	include ("../../connect_db.php");

	$cedula= $_POST['cedula'];

	$req = (strlen($cedula) or die (mysql_error("Campo Vacio")));

	if ($req!="") {
		# code...

	$sentencia=mysql_query("DELETE FROM vehiculos WHERE cedula='$cedula'")or die("datos no eliminados"); 
	
	echo "<script type='text/javascript'>
	alert('Usuario Eliminado exitosamente');
	window.location.href='../deleteve.php';
	</script>";

	mysql_close($sentencia);
	}
	else{
	echo "<script type='text/javascript'>
	alert('Ususario No eliminado');";
	}

	
?>