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
        
  
 <div class="container" style="text-align: center;">

            <h1>Solicitud de Recuperacíon Contraseña</h1>
            <h5>TIMIZA PARKLOT</h5>
            <img id="profile-img" class="profile-img-card" src="images/login.png" />
       
<div class="card card-container" style="text-align: center;">
  <form action="registro.php">
        <div class="form-group row">
          <div class="col-10">
            <input class="form-control" type="text" placeholder="Digite su Nombre" id="example-text-input" name="nombres">
          </div>
        </div>

         <div class="form-group row">
          <div class="col-10">
            <input class="form-control" type="text" placeholder="Digite su Apellido" id="example-text-input" name="Apellidos">
          </div>
        </div>

         <div class="form-group row">
          <div class="col-10">
            <input class="form-control" type="number" placeholder="Digite su telefono" id="example-number-input" name="telefono">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-10">
            <input class="form-control" type="number" placeholder="Digite su celular" id="example-number-input" name="celular">
          </div>
        </div>

        <div class="form-group row">
          
          <div class="col-10">
            <input class="form-control" type="email" placeholder="Digite su Correo" id="example-email-input" name="email">
          </div>
        </div>

         <div class="form-group">
                    <small id="emailHelp" class="form-text text-muted">Seleccione el Cargo</small>
                    <select class="form-control" id="exampleSelect1" name="cargo">
                      <option>Administrador</option>
                      <option>Operador</option>
                      <option>Cliente</option>
                     </select>
                   </div>

         <div class="form-group row">
          
          <div class="col-10">
            <input class="form-control" type="pass" placeholder="Digite su contraseña" id="example-pass-input" name="contrasena">
          </div>
        </div>

        <div class="form-group row">
          
          <div class="col-10">
            <input class="form-control" type="pass" placeholder="Digite de nuevo contraseña" id="example-pass-input" name="contrasenados">
          </div>
        </div>
       
      
        
         </form>
          <button class="btn btn-lg btn-primary btn-block btn-signin" name="login" id="test" type="submit">Enviar Solicitud</button>
         <a href="index.php">INICIO</a>
</div>


</div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
           
    </body>
</html>