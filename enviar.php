<?php
//Importamos las variables del formulario de contacto

@$Nombre = htmlspecialchars($_POST['Nombre']);
@$Motivo = htmlspecialchars($_POST['Motivo']);
@$Correo = htmlspecialchars($_POST['Correo']);
@$Mensaje = htmlspecialchars($_POST['Mensaje']);


//Preparamos el mensaje de contacto
$cabeceras .= "Content-Type: text/html; charset=UTF-8";  
$cabeceras = "From: $Correo\n" //La persona que envia el correo
 . "Reply-To: $Correo\n";
$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$asunto = "www.sionwebsites.com\n"; //asunto aparecera en la bandeja del servidor de correo
$asunto = "Asunto: $Motivo\n";
$email_to = "administrador@sionwebsites.com"; //cambiar por tu email
$contenido = "$Nombre ha enviado un mensaje desde el sitio web www.sionwebsites.com\n"
. "\n"
. "Nombre: $Nombre\n"
. "Motivo: $Motivo\n"
. "Correo: $Correo\n"
. "Mensaje: $Mensaje\n"
. "\n"
. "Somos una empresa en crecimiento, nos encargamos de la parte Lógica y Física de su negocio, pequeña empresa y hogar. S.I.O.N en sus siglas es:' Sistema de Información, Objetiva y de Noción' que significa en una simple frase (mira tú objetivo y aplica tu conocimiento)Realizamos mantenimiento preventivo y correctivo para que sus equipos funcionen a la perfección, instalamos programas que no vienen con tu sistema operativo como Office y otros programas que necesites para tu actual labor, diseñamos páginas web, queremos hacer que de un pequeño negocio salgan ideas grandes.\n"
. "\n";


// "Somos una empresa en crecimiento, nos encargamos de la parte Lógica y Física de su negocio, pequeña empresa y hogar. S.I.O.N en sus siglas es:' Sistema de Información, Objetiva y de Noción' que significa en una simple frase (mira tú objetivo y aplica tu conocimiento)Realizamos mantenimiento preventivo y correctivo para que sus equipos funcionen a la perfección, instalamos programas que no vienen con tu sistema operativo como Office y otros programas que necesites para tu actual labor, diseñamos páginas web, queremos hacer que de un pequeño negocio salgan ideas grandes."


//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to,$asunto ,$contenido ,$cabeceras,$Correo)) { 

//Si el mensaje se envía muestra una confirmación
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://www.sionwebsites.com\">";

}else{
//Si el mensaje no se envía muestra el mensaje de error
echo '<div class="modal fade" id="respuesta2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <strong>ERROR. Intente mas tarde.</strong>
    </div>    
  </div>
</div>';
}

?>