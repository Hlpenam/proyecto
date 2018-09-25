<?php
	include("../../connect_db.php");
	//require_once ("../../connect_db.php")";
	$cedula=$_POST['cedula'];
	$email=$_POST['email'];
	$categoria=$_POST['categoria'];
	
	$observaciones=$_POST['observaciones'];
	$query="INSERT INTO pqrs_pk (cedula,email,opciones_soli,observaciones)
	VALUES('$cedula','$email','$categoria','$observaciones')";
	
	$req = (strlen($cedula)*strlen($email)*strlen($categoria)*strlen($observaciones)) or die("No se han llenado todos los campos"); // si los campos no se llenan nos mostrara un mensaje que faltan campos por diligenciar.

	if($req >0) {
		$sql=mysql_query("INSERT INTO pqrs_pk (cedula,email,opciones_soli	,observaciones)
	VALUES('$cedula','$email','$categoria','$observaciones')",$link);

		echo "Datos guardado";

		echo '<script>
			alert("Registro Exitoso");
			location.href="../pqrs_crear.php";
		</script>';
		
			

	}else{
		echo "REGISTRO INCORRECTO";
	}

	if($sql==true){
		$insertar2 =mysql_query("INSERT INTO temporales (cedu)
	VALUES('$placa','$color','$marca','$fecha_ingreso','$fecha_salida','$observaciones','$origen')",$link);
	echo '<script>
	
			alert("Registro Exitoso 2");</script>';

	}else{
		echo "registro 2 exitoso";
	}


	

