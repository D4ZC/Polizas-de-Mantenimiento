<?php
include '../conexion/conexion.php';

$nick = $con->real_escape_string($_POST['nick']);
$sel = $con->query("SELECT id FROM usuario WHERE nick = '$nick'");
$row = mysqli_num_rows($sel);
if($row != 0){
  echo "<label style='color:red;'> Nombre de usuario ya existente, intente de nuevo </label>";
}else{
  echo "<label style='color:green;'> Nombre de usuario disponible </label>";
}
$con->close();
 ?>
