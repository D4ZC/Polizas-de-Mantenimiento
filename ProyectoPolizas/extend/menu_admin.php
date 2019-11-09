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
        <img src="../img/background3.jpg"  >
      </div>
      <a href="" ><img src="../usuarios/<?php echo $_SESSION ['foto'] ?> " class="circle" alt=""></a>
      <a href="" class="white-text"><?php echo $_SESSION['nombre']?></a>
      <a href="" class="white-text"><?php echo $_SESSION['correo']?></a>
    </div>
  </li>
  <li><a href=""><i class="material-icons">home</i> INICIO</a>
  <li><div class="divider" ></div></li>
  <li><a href=""><i class="material-icons">add</i> USUARIOS</a>
  <li><div class="divider" ></div></li>
  <li><a href=""><i class="material-icons">send</i> REPORTES</a>
  <li><div class="divider"></div></li>
</ul>
<script>
  $('.button-collpase').sideNav();
</script>
