<?php include '../extend/header.php'; ?>

<link rel "stylesheet" href= "/ProyectoPolizas/css/sweetalert2.min.css">
<script src="/ProyectoPolizas/js/sweetalert2.min.js"></script>


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
