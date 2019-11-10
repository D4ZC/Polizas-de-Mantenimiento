<?php @session_start();
if (isset($_SESSION['nick'])) {
  header('location:inicio');
}
?>


<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <!--Alertas-Fuentes-Iconos-->
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="css/icons.css" rel="stylesheet">
         <!--END Alertas-Fuentes-Iconos-->
        <title>Titulo</title>
    </head>
    <body class="grey lighten-2">
      <main>
        <div class="row">
          <div class="input-field col s12 center">
            <img src="img/logocooling.jpg" width="200px" class="circle">
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col s12">
              <div class="card z-depth-5">
                <div class="card-content">
                  <span class="card-title"><center>Inicio de Sesion</center></span>
                  <form action="login/index.php" method="post" autocomplete="off">
                    <div class="input-field">
                      <i class="material-icons prefix">perm_identity</i>
                      <input type="text" name="usuario"  id="usuario" required pattern="[A-Za-z]{8,15}" autofocus>
                      <label for="usuario">Usuario</label>
                    </div>
                    <div class="input-field">
                      <i class="material-icons prefix">vpn_key</i>
                      <input type="password" name="contra"  id="contra" required pattern="[A-Za-z0-9]{8,15}" >
                      <label for="contra">Contraseña</label>
                    </div>
                    <div class="input-field">
                      <button type="submit" class="btn waves-effect waves-light">Acceder</button>
                    </div>
                  </form>
               </div>
             </div>
           </div>
         </div>
       </div>




      </main>


      <script src="js/jquery.js"></script>
      <script src="js/materialize.min.js"></script>

    </body>
  </html>
