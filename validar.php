
<?php //  validacion de datos en php
	session_start();

	require("connect_db.php"); // requisito de conexion a la base de datos

	$username=$_POST['mail']; // variables del campo mail
	$pass=$_POST['pass'];     // varibale del campo pass o paswword
	$categoria=$_POST['categoria'];  // variable del imput lista en administrador / operario y cliente

 // ------------------------- validacion de los campos en la base de datos ----------------------------------------//
	$sql2=mysql_query("SELECT * FROM usuarios WHERE email='$username'"); // consulta de mysql guiada a la tabla login con el email
	if($f2=mysql_fetch_array($sql2)){ // condicional de la variable f2 buscando un array dentro de la base de datos
		// si es asi ingresa a la otra condicion que corresponde al password
		if($pass==$f2['contrasena'] AND $categoria==$f2["cargo"]){ // se valida que la primera condicion se igual a la primera en sql y que la categoria Administrador corresponde a la misma base donde esta ubicado el email
			$_SESSION['email'] = $f2['email'];
			
			echo "<script>location.href='Administrador.php'</script>"; // script de donde se dirigira la accion despues de llenar los campos.

		
		}else{
			echo "<script>alert('Usuario o Clave incorrecta');</script>";
			echo "<script>location.href='index.php'</script>";
		}
	}
	else{  // si no es correcto  la validacion primera en este caso
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR SOLICITAR REGISTRO PARA PODER INGRESAR")</script> ';// mensaje de script error
		
		echo "<script>location.href='index.php'</script>";	// se limpia las cajas y se dirige de nuevo al index

	}



//------------------------------fin de validacion-----------------------------------------------------------------//

//------------------------------ validacion de excepcion --------------------------//
	$sql=mysql_query("SELECT * FROM usuarios WHERE email='$username'");// consulta de mysql guiada a la tabla login con el email
	if($f=mysql_fetch_array($sql)){// condicional de la variable f buscando un array dentro de la base de datos
		// si es asi ingresa a la otra condicion que corresponde al password
		if($pass==$f['contrasenaoper'] AND $categoria==$f['cargo']){// se valida que la primera condicion se igual a la primera en sql y que la categoria operario corresponde a la misma base donde esta ubicado el email
			$_SESSION['email'] = $f['email'];
			echo '<script>alert("BIENVENIDO A PARKLOT")</script> '; // srcipt alerta o mensaje de ingreso para la pagina OPERARIO
			header("Location: operarios/operario.php");// srcipt alerta o mensaje de ingreso para la pagina operario
		}else{ // si no es correcto  la validacion segunda en este caso
			echo '<script>alert("CONTRASEÑA INCORRECTA O LA CATEOGIRA NO ES LA INDICADA")</script> '; // mensaje de script error
		
			echo "<script>location.href='index.php'</script>";// se limpia las cajas y se dirige de nuevo al index
		}
	}

	else{  // si no es correcto  la validacion primera en este caso
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR SOLICITAR REGISTRO PARA PODER INGRESAR")</script> ';// mensaje de script error
		
		echo "<script>location.href='index.php'</script>";	// se limpia las cajas y se dirige de nuevo al index

	}
		// sionweb2018

	$sql3=mysql_query("SELECT * FROM usuarios WHERE email='$username'");// consulta de mysql guiada a la tabla login con el email
	if($f3=mysql_fetch_array($sql3)){// condicional de la variable f buscando un array dentro de la base de datos
		if($pass==$f3['contrasenaclient'] AND $categoria==$f['cargo']){// se valida que la primera condicion se igual a la primera 
			//en sql y que la categoria operario corresponde a la misma base donde esta ubicado el email
			$_SESSION['email'] = $f3['email'];
			echo '<script>alert("BIENVENIDO A PARKLOT")</script> '; // srcipt alerta o mensaje de ingreso para la pagina CLIENTE
			header("Location: clientes/clientes.php");// srcipt alerta o mensaje de ingreso para la pagina Cliente.
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA O LA CATEOGIRA NO ES LA INDICADA")</script> ';  // mensaje de script error
		
			echo "<script>location.href='index.php'</script>";// se limpia las cajas y se dirige de nuevo al index
		}

	}

	else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> '; // mensaje de script error
		
		echo "<script>location.href='index.php'</script>";	// se limpia las cajas y se dirige de nuevo al index

	}



		


?> // fin pagina php