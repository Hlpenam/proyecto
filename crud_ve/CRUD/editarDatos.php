<?php


 include '../../connect_db.php';

	$placa=$_POST['placa'];
	$color = $_POST['color'];
	$marca = $_POST['marca'];
	
	$observaciones = $_POST['observaciones'];
	$origen = $_POST['origen'];
	
	
$req = (strlen($placa)*strlen($color)*strlen($marca)*strlen($observaciones)*strlen($origen)) or die("No se han llenado todos los campos"); // si los campos no se llenan nos mostrara un mensaje que faltan 
//echo "Update usuarios set nombres= '$nombres',apellidos= '$apellidos',telefono= '$telefono',celular= '$celular',email= '$email' Where cedula= '$cedula'";

if ($req!="") {
	# code...
	$sentencia=mysql_query("UPDATE vehiculos SET placa='$placa', color= '$color', marca='$marca', observaciones= '$observaciones' WHERE placa='$placa'"); 
	
	echo "<script type='text/javascript'>
	alert('Usuario Modificado exitosamente');
	window.location.href='../updateve.php';
	</script>";
	mysql_close($sentencia);
}else{
	echo "<script type='text/javascript'>
	alert('Usuario No Modificado ');";
}
	
?>



