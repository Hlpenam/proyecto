<?php


 include '../connect_db.php';

	$id=$_POST['id'];
	$titulo = $_POST['titulo'];
	$mensaje = $_POST['mensaje'];
	$subtitulo = $_POST['subtitulo'];
	$submensaje = $_POST['submensaje'];
	$estado = $_POST['estado'];
	
	
$req = (strlen($id)*strlen($titulo)*strlen($mensaje)*strlen($subtitulo)*strlen($submensaje)*strlen($estado)) or die("No se han llenado todos los campos"); // si los campos no se llenan nos mostrara un mensaje que faltan 
//echo "Update usuarios set nombres= '$nombres',apellidos= '$apellidos',telefono= '$telefono',celular= '$celular',email= '$email' Where cedula= '$cedula'";

if ($req!="") {
	# code...
	$sentencia=mysql_query("UPDATE eventos SET id='$id',titulo= '$titulo', mensaje='$mensaje', subtitulo= '$subtitulo', submensaje='$submensaje', estado= '$estado' WHERE id='$id'"); 
	
	
	echo "<script type='text/javascript'>
	alert('Evento Modificado exitosamente');
	window.location.href='elements.php';
	</script>";
	mysql_close($sentencia);
}else{
	echo "<script type='text/javascript'>
	alert('Evento No Modificado ');";
}
	
?>
