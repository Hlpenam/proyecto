<?php
    session_start();
    include 'connect_db.php';
    if (isset($_SESSION['email'])) {
        # code...
        echo'<script>window.location ="ingreseotra.php"</script>';

            }

 ?>
<DOCTYPE html>
<html>
    <head>
        <title>LOGIN PARKLOT</title>
            
            <meta charset="utf-8">
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <link rel="stylesheet" href="estilos.css">
            <link rel="stylesheet" href="java.js">
            <link rel="stylesheet" href="assets/fonts/fontawesome-webfont.ttf">
            
        
    </head>

    <body>
        

 <div class="container">
        <div class="card card-container" style="text-align: center;">
            <h1>LOGIN</h1>
            <h5>TIMIZA PARKLOT</h2>
            <img id="profile-img" class="profile-img-card" src="images/login.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="validar.php" method="post">
                 <select name="categoria" class="form-control" style="margin-left: 0%;"list="ingreso"  id="ingreso" class="cuadro">
                    <option value="administrador" class="form-control">Administrador</option>
                    <option value="operador" class="form-control">Operador</option>
                    <option value="cliente" class="form-control">Cliente</option>
                </select>
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" name="mail" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" name="login" id="test" type="submit">Ingresar</button>
            </form><!-- /form -->
            <a href="recupass.php" class="forgot-password">
               Olvidaste tu Contraseña?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
           
    </body>
</html>