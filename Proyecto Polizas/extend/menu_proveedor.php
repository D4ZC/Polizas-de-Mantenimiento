<nav class="black">
<div class="nav-wrapper">
<ul class="left">
  <a data-activities="menu" class="button-collpase"><i class="material-icons">menu</i></a>
</div>
</nav>
<ul id="menu" class="side-nav fixed">
  <li>
    <div class="userView" >
      <div class="background">
        <img src="../img/backgroundProveedor1.jpg"  >
      </div>
      <a href="" ><img src="../usuarios/<?php echo $_SESSION ['foto'] ?> " class="circle" alt=""></a>
      <a href="" class="white-text"><?php echo $_SESSION['nombre']?></a>
      <a href="" class="white-text"><?php echo $_SESSION['correo']?></a>
    </div>
  </li>
  <li><a href="../inicio"><i class="material-icons">home</i> INICIO</a>
  <li><div class="divider" ></div></li>
  <li><a href=""><i class="material-icons">cloud_upload</i> CARGAR REPORTE</a>
  <li><div class="divider"></div></li>
  <li><a href=""><i class="material-icons">build</i> SERVICIOS</a>
  <li><div class="divider"></div></li>
  <li><a href="../login/salir.php"><i class="material-icons">power_settings_new</i> SALIR</a>
  <li><div class="divider"></div></li>
</ul>
<script>
  $('.button-collpase').sideNav();
</script>
