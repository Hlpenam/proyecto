<?php echo "saliste de sesion ingresa a login de nuevo";
session_start();
session_destroy();
echo "<script>window.location='index.php'</script>";

 ?>