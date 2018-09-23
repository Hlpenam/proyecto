<?php


 include ("../connect_db.php");

 	$id = $_POST['id'];
 	$titulo = $_POST['titulo'];
	$titulo = $_POST['titulo'];
	$mensaje = $_POST['mensaje'];
	$subtitulo = $_POST['subtitulo'];
	$submensaje = $_POST['submensaje'];
	$estado = $_POST['estado'];
	
	//capturamos los datos del fichero subido    
	$type=$_FILES['ima']['type'];
	//print_r($_FILES);
	$tmp_name = $_FILES['ima']["tmp_name"];
	$name = $_FILES['ima']["name"];
	//Creamos una nueva ruta (nuevo path)
	//Así guardaremos nuestra imagen en la carpeta "images"
	$nuevo_path="../images/eventos/".$name;
	//Movemos el archivo desde su ubicación temporal hacia la nueva ruta
	# $tmp_name: la ruta temporal del fichero
	# $nuevo_path: la nueva ruta que creamos
	move_uploaded_file($tmp_name,$nuevo_path);
	//Extraer la extensión del archivo. P.e: jpg
	# Con explode() segmentamos la cadena de acuerdo al separador que definamos. En este caso punto (.)
	//$array=explode('.',$nuevo_path);
	# Capturamos el último elemento del array anterior que vendría a ser la extensión
	//$ext= end($array);
	//Imprimimos un texto de subida exitosa.
	/*echo "<script>alert('la imagen se subio correctamente');</script>";*/
	// Los posible valores que puedes obtener de la imagen son:
	/*echo "<b>Info de la imagen subida:</b>";
	echo "<br> Nombre: ".$_FILES['ima']["name"];      //nombre del archivo
	echo "<br> Tipo: ".$_FILES['ima']["type"];      //tipo
	echo "<br> Nombre Temporal: ".$_FILES['ima']["tmp_name"];  //nombre del archivo de la imagen temporal
	echo "<br> Tamanio: ".$_FILES['ima']["size"];      //tamaño*/
	

	


$req = (strlen($titulo)*strlen($mensaje)*strlen($subtitulo)*strlen($submensaje)*strlen($estado)) or die("No se han llenado todos los campos"); 

if ($req > 0) {	


$send=mysql_query("INSERT INTO sionweb2.eventos (id,titulo,mensaje,subtitulo,submensaje,estado,imagenes)  VALUES($id,'$titulo','$mensaje','$subtitulo','$submensaje',$estado,'$nuevo_path')",$link) or die ("problemas al conectar");
if ($send==true) {
		# code...
	$send2=mysql_query("INSERT INTO sionweb2.eventosc (id,titulo,mensaje,subtitulo,submensaje,estado,imagenes)  VALUES($id,'$titulo','$mensaje','$subtitulo','$submensaje',$estado,'$nuevo_path')",$link) or die ("problemas al conectar");
	}

echo'
		<script>
			alert("Registro Exitoso");
			location.href="elements.php";
		</script>
	';
mysql_close($send,$send2);
}else {

	echo "<script>
			alert('Registro no Exitoso');
			
		</script>";
}

?>