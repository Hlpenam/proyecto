 <?php
 	session_start();
 	include 'connec_db.php';
 	if (isset($_SESSION['email'])) {
 		# code...
 		echo'<script>window.location ="Administrador.phph"</script>';

 		 	}

 ?>


 <DOCTYPE html>
 	
<!DOCTYPE html>
<html>
<head>
	<title>formulario </title>
	<meta charset="UTF-8">
</head>
<body>

<input type="text" id="loginemail" placeholder="Escribir email" name="email" required="">
<input type="password" id="loginpasword" placeholder="Escribir pasword" name="pasword" required>
<button type="button" name="login" onclick="loadLog()">Enviar</button>
<div id="login"></div>	

<script  src="jquery3.3.1.js"></script>
<script>
function loadLog(){

	var nombre = document.getElementByid('loginemail').value;
	var clave = document.getElementByid('loginpasword').value;
	var ocupacion2 = "escuelado";
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function(){

		if (xhttp.readyState == 4 &&  xhttp.status == 200) {

			document.getElementByid("login").innerHTML = xhttp.responseText;

		}

	};
	xhttp.open("POST","processconajax.php",true);
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send("email="+ nombre +"$pasword="+ clave + "&ocupacion="+ ocupacion2+"");
	
}		

</script>

</body>
 </html>