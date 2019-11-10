<?php include '../extend/header.php'; ?>

<div class= "row">
  <div class="col s12">
    <div class= "card">
      <div class="card-content">
        <span class="card-title">Alta de Usuario</span>
        <form class="form" action="ins_usuarios.php" method="post" enctype="multipart/form-data">
          <div class="input-field">
            <label for="nick">Nick:</label>
            <!--Validadacion de tamaño y caracteres-->
            <input type="text" name= "nick" required autofocus title=" MINIMIMO 8 Y MAXIMO 15 LETRAS " pattern="[A-Za-z]{8,15}"
            id="nick" onblur="may(this.value, this.id)">
          </div>
          <!--Validar que no exista-->
          <div class= "validacion"></div>

          <!--PASSWORD-->
          <div class="input-field">
            <label for="pass1">Contraseña:</label>
            <!--Validadacion de tamaño y caracteres-->
            <input type="password" name= "pass1" title="Contraseña con NUMEROS,LETRAS,MAYUSCULAS,MINUSCULAS" pattern="[A-Za-Z0-9]{8,15}" id = "pass1" required>

          </div>
          <div class="input-field">
            <label for="pass2">Verificar Contraseña:</label>
            <!--Validadacion de tamaño y caracteres-->
            <input type="password"  title="Contraseña con NUMEROS,LETRAS,MAYUSCULAS,MINUSCULAS" pattern="[A-Za-Z0-9]{8,15}" id = "pass2" required>

          </div>
          <select name="nivel" required>
            <option value="" disabled selected >SELECCIONA EL NIVEL DE USUARIO</option>
            <option valie="ADMINISTRADOR">ADMINISTRADOR</option>
            <option valie="CLIENTE">CLIENTE</option>
            <option valie="PROVEEDOR">ASESOR</option>
          </select>

          <!--Nombre Completo-->
          <div class="input-field">
            <label for="nombre">Nombre:</label>
            <!--Validadacion de tamaño y caracteres-->
            <input type="text" name= "nombre" title="Nombre del Usuario" id = "nombre" onblur="may(this.value, this.id)" required
            pattern="[A-Z/s]">

          </div>
          <!--Email-->
          <div class="input-field">
            <label for="email">Correo electronico:</label>
            <!--Validadacion de tamaño y caracteres-->
            <input type="email" name= "correo" title="Correo Electronico" id = "Correo">
          </div>

          <!--Foto de perfil-->
          <div class="file-field input-field">
            <div class "btn">
              <span>Foto:</span>
              <input type="file" name="foto">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>

<button type="submit" class="btn black">Guardar <i class="materialize-icons">send</i></button>
        </form>
      </div>
    </div>
  </div>
</div>




<?php include '../extend/scripts.php'; ?>
  <script>
    $('#nick').change(function(){
      $.post('ajax_validacion.php',{
          nick:$('#nick').val(),
          beforeSend: function(){
            $('.validacion').html("Procesando...");
          }

      }, function(respuesta){
        $('.validacion').html(respuesta);
      });
    });
    $('#pass2').change(function(event){
      if($('#pass1').val() == $('#pass2').val()){
        swal('Correcto..','Constraseñas Coinciden','success');
      }else{
        swal('Sorry','ERROR Contraseñas NO coinciden','error');
      }
    });
  </script>

</body>
</html>
