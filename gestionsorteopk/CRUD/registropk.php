<?php


 include '../../connect_db.php';
 	$cedula=$_GET['cedula'];
	$punto=$_GET['punto'];
	
	
$req = (strlen($punto)) or die("No se han llenado todos los campos"); // si los campos no se llenan nos mostrara un mensaje que faltan 
//echo "Update usuarios set nombres= '$nombres',apellidos= '$apellidos',telefono= '$telefono',celular= '$celular',email= '$email' Where cedula= '$cedula'";

if ($req!="") {
	# code...
	$sentencia=mysql_query("UPDATE punto_pk SET id_puntopk='$punto' WHERE cedula=$cedula"); 
	
	echo "<script type='text/javascript'>
	alert('Usuario Modificado exitosamente');
	window.location.href='../SorteoPK.php';
	</script>";
	mysql_close($sentencia);
}else{
	echo "<script type='text/javascript'>
	alert('Usuario No Modificado ');";
}
	
?>



