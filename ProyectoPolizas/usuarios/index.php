<?php include '../extend/header.php'; ?>


<link rel "stylesheet" href= "/ProyectoPolizas/css/sweetalert2.min.css">
<script src="/ProyectoPolizas/js/sweetalert2.min.js"></script>

<div class= "row">
  <div class="col s12">
    <div class= "card">
      <div class="card-content">
        <span class="card-title">Alta de Usuario</span>
        <form class="form" action="ins_usuarios.php" method="post" enctype="multipart/form-data">
          <div class="input-field">
            <label for="nick">Nick:</label>
            <!--Validadacion de tamaño y caracteres-->
            <input type="text" name="nick" required autofocus title=" DEBE DE CONTENER ENTRE 8 Y 15 CARACTERES, SOLO LETRAS " pattern="[A-Za-z]{8,15}"
            id="nick" onblur="may(this.value, this.id)">
          </div>
          <!--Validar que no exista-->
          <p class="validacion"></p>
          <!--PASSWORD-->
          <div class="input-field">
            <!--Validadacion de tamaño y caracteres-->
            <input type="password" name="pass1" title="Contraseña con NUMEROS,LETRAS,MAYUSCULAS,MINUSCULAS" pattern="[A-Za-z0-9]{8,15}" id= "pass1" required>
            <label for="pass1">Contraseña:</label>
          </div>
          <div class="input-field">

            <!--Validadacion de tamaño y caracteres-->
            <input type="password"  title="Contraseña con NUMEROS,LETRAS,MAYUSCULAS,MINUSCULAS"
            pattern="[A-Za-z0-9]{8,15}" id="pass2" required>
            <label for="pass2">Verificar Contraseña:</label>
          </div>

          <select name="nivel" required>
            <option value="" disable selected >ELIJE EL NIVEL DE USUARIO</option>
            <option value="ADMINISTRADOR">ADMINISTRADOR</option>
            <option value="CLIENTE">CLIENTE</option>
            <option value="PROVEEDOR">PROVEEDOR</option>
            <option value="EMPLEADO">EMPLEADO</option>
          </select>

          <!--Nombre Completo-->
          <div class="input-field">
            <input type="text" name="nombre" title="Nombre del Usuario" id="nombre" onblur="may(this.value, this.id)" required
            pattern="[A-Za-z/s ]+">
            <label for="nombre">Nombre completo del usuario:</label>
            <!--Validadacion de tamaño y caracteres-->
          </div>

          <!--Email-->
          <div class="input-field">
            <input type="email" name= "correo" title="Correo Electronico" id="correo">
            <label for="correo">Correo electronico:</label>
          </div>

          <!--Foto de perfil-->
          <div class="file-field input-field">
            <div class = "btn">
              <span>Foto:</span>
              <input type="file" name="foto" >
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

<button type="submit" class="btn black" id="btn_guardar">Guardar <i class="material-icons">send</i></button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class ="row">
  <div class="col s12">
    <nav clas = "black lighteen-3">
      <div class ="nav-wrapper">
        <div class="input-field">
          <input type = "search" id="buscar"  autocomplete="off">
          <label for ="buscar"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i></label>
        </div>
      </div>
    </nav>
  </div>
</div>

<?php
$sel = $con->query("SELECT * FROM usuarios");
$row = mysqli_num_rows($sel);
?>
<div class="row">
  <div class="col s12">
    <div class = "card">
      <div class = "card-content">
        <span class = "card-title">Usuarios(<?php echo $row?>)</span>
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
        <?php while ($f = $sel->fetch_assoc()){ ?>
          <tr>
          <td><?php echo $f['nick'] ?></td>
          <td><?php echo $f['nombre'] ?></td>
          <td><?php echo $f['correo'] ?></td>
          <td><?php echo $f['nivel'] ?></td>
          <td><img src="<?php echo $f['foto'] ?>" with="50" class = "circle"></td>
          <td><?php echo $f['bloqueo'] ?></td>
          <td></td>
          <td></td>
          </tr>
          <?php } ?>
      </table>
    </div>
  </div>
</div>
</div>


<script src = "../js/validacion.js"></script>
<?php include '../extend/scripts.php'; ?>

  <script>
    $('#nick').change(function(){
      $.post('ajax_validacion.php',{
          nick:$('#nick').val(),

          beforeSend: function(){
            $('.validacion').html("Espere un momento...");
          }

      }, function(respuesta){
        $('.validacion').html(respuesta);
      });
    });
    $('btn_guardar').hide();
    $('#pass2').change(function(event){
      if($('#pass1').val() == $('#pass2').val()){
        swal('Correcto..','Contraseñas Coinciden','success');}
          $('btn_guardar').show();
        alert('Bien');
      }else{
        swal('Sorry','ERROR Contraseñas NO coinciden','error');
          $('btn_guardar').hide();
      }
    });
    $('.form').keypress(function(e) {
      if (e.which == 13) {
        return false;
      }
    });




    </script>

</body>
</html>
