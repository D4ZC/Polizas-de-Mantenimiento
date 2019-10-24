<?php include '../extend/header.php'; ?>

<div class= "row">
  <div class="col s12">
    <div class= "card">
      <div class="card-content">
        <span class="card-title">Alta de Usuario</span>
        <form class="form" action="ins_usuarios.php" 
        method="post" enctype="multipart/form-data">

          <div class="imput-field">
            <label for="nick">Nick:</label>
            <!--Validadacion de tamaño y caracteres-->
            <input type="text" name= "nick" required autofocus title=" DEBE DE CONTENER ENTRE 8 Y 15 CARACTERES, SOLO LETRAS " pattern="[A-Za-z]{8,15}"
            id = "nick" onblur="may(this.value, this.id)">
          </div>
          <!--Validar que no exista-->
          <div class= "validacion"></div>

          <!--PASSWORD-->
          <div class="imput-field">
            <label for="pass1">Contraseña:</label>
            <!--Validadacion de tamaño y caracteres-->
            <input type="password" name= "pass1" title="Contraseña con NUMEROS,LETRAS,MAYUSCULAS,MINUSCULAS" pattern="[A-Za-Z0-9]{8,15}" id = "pass1" required>

          </div>
          <div class="imput-field">
            <label for="pass2">Verificar Contraseña:</label>
            <!--Validadacion de tamaño y caracteres-->
            <input type="password"  title="Contraseña con NUMEROS,LETRAS,MAYUSCULAS,MINUSCULAS" pattern="[A-Za-Z0-9]{8,15}" id = "pass2" required>

          </div>
          <select name="nivel" required>
            <option value="" disabled selected >ELIJE EL NIVEL DE USUARIO</option>
            <option valie="CLIENTE">CLIENTE</option>
            <option valie="PROVEEDOR">PROVEEDOR</option>
          </select>

          <!--Nombre Completo-->
          <div class="imput-field">
            <label for="nombre">Nombre completo del usuario:</label>
            <!--Validadacion de tamaño y caracteres-->
            <input type="text" name= "nombre" title="Nombre del Usuario" id = "nombre" onblur="may(this.value, this.id)" required pattern="[A-Z/s]">

          </div>
          <!--Email-->
          <div class="imput-field">
            <label for="correo">Correo electronico:</label>
            <!--Validadacion de tamaño y caracteres-->
            <input type="email" name= "correo" title="Correo Electronico" id = "correo">
          </div>

          <!--Foto de perfil-->
          <div class="file-field input-field">
            <div class = "btn">
              <span>Foto:</span>
              <input type="file" name="foto">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

<button type="submit" class="btn black"id="btn_guardar">Guardar <i class="materialize-icons">send</i></button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class ="row">
  <div class="col s12">
    <nav clas = "blue lighteen-3">
      <div class ="nav-wrapper">
        <div class="input-field">
          <input type = "search" id="buscar"  autocomplete="off">
          <label for ="buscar"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i></label>
    </nav>
  </div>
</div>
<?php include '../extend/scripts.php'; ?>
<noscript>
 <a href="https://www.enable-javascript.com/es/">
</a>.
</noscript>
  <script>
    $('#nick').change(function(){
      $.post('ajax_validacion_nick.php',{
          nick:$('#nick').val(),
          beforeSend: function(){
            $('.validacion').html("...Procesando...");
          }
      },function(respuesta){
        $('.validacion').html(respuesta);
      }
    )
    });

    $('#pass2').change(function(event){
      if($('#pass1').val() == $('#pass2').val()){
        swal('Correcto..','Constraseñas Coinciden','success');
      }else{
        swal('Sorry','ERROR Contraseñas NO coinciden','error');
      }
    });



<?php $sel = $con=->query ("SELECT * FROM usuario");
$row = mysqli_num_rows($sel);
?>

<div class="row">
  <div class="col s12">
    <div class = "card">
      <div class = "card-content">
        <span class = "card-title">Usuarios (<?php echo $row?> </span>
        <table>
          <thead>
          <tr class= "cabecera">
            <th>Nick</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Nivel</th>
            <th>Foto</th>
            <th>Bloqueo</th>
            <th></th>
            <th></th>
            </tr>
        </thead>
        <?php while ($f= sel->fech_assoc()){ ?>
          <tr>
          <td><?php echo $f['nick'] ?></td>
          <td><?php echo $f['nombre'] ?></td>
          <td><?php echo $f['correo'] ?></td>
          <td><?php echo $f['nivel'] ?></td>
          <td><img src="<?php echo $f['foto'] ?>" with="50" class = "circle"></td>
          <td><?php echo $f['bloqueo'] ?></td>
          <td><?php echo $f[''] ?></td>
          <td><?php echo $f[''] ?></td>
          </tr>
          <?php } ?>
      </table>
    </div>
  </div>
</div>


<?php include '../extend/scripts.php'; ?>
<script src = "../js/validacion.js"></script>

</body>
</html>
