<?php


 include '../../connect_db.php';

	$cedula=$_POST['cedula'];
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$telefono = $_POST['telefono'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	
	
$req = (strlen($cedula)*strlen($nombres)*strlen($apellidos)*strlen($telefono)*strlen($celular)*strlen($email)) or die("No se han llenado todos los campos"); // si los campos no se llenan nos mostrara un mensaje que faltan 
//echo "Update usuarios set nombres= '$nombres',apellidos= '$apellidos',telefono= '$telefono',celular= '$celular',email= '$email' Where cedula= '$cedula'";

if ($req!="") {
	# code...
	$sentencia=mysql_query("UPDATE usuarios SET nombres='$nombres', apellidos= '$apellidos', telefono='$telefono', celular= '$celular', email= '$email' WHERE cedula='$cedula'"); 
	
	echo "<script type='text/javascript'>
	alert('Usuario Modificado exitosamente');
	window.location.href='../modificaruser.php';
	</script>";
	mysql_close($sentencia);
}else{
	echo "<script type='text/javascript'>
	alert('Usuario No Modificado ');";
}
	
?>



