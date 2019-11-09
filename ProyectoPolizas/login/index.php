<?php
include '../conexion/conexion.php';

if ($_SERVER['REQUEST_METHOD']== 'POST'){
$user=$con->real_escape_string(htmlentities($_POST['usuario']));
$pass=$con->real_escape_string(htmlentities($_POST['contra']));
$candado = ' ';
//echo "$user<br>";
//echo "$pass<br>";

$str_u = strpos($user, $candado);
$str_p = strpos($pass, $candado);

if (is_int($str_u)) {
  $user = '';
}else{
  $usuario = $user;
}

if (is_int($str_p)) {
  $pass = '';
}else{
  $pass2 = sha1($pass);
}

if ($user == null OR $pass == null) {
  header('location:../extend/alerta.php?msj=ERROR404&c=salir&p=salir&t=error');
}else{
  $ins = $con ->query("SELECT nick, nombre, nivel, correo, foto, pass FROM usuarios
    WHERE nick='$usuario' AND pass ='$pass2'
  AND bloqueo = 1 ");
  $row = mysqli_num_rows($ins);
  //echo mysqli_num_rows($ins);
    if ($row == 1){
      if ($var = mysqli_fetch_array($ins)) {
        $nick = $var['nick'];
        $contra = $var['pass'];
        $nivel = $var['nivel'];
        $correo = $var['correo'];
        $foto = $var['foto'];
        $nombre = $var['nombre'];
      }

      if ($nick == $usuario && $contra == $pass2 && $nivel == 'ADMINISTRADOR'){
        $_SESSION['nick'] = $nick;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['nivel'] = $nivel;
        $_SESSION['correo'] = $correo;
        $_SESSION['foto'] = $foto;
        header('location:../extend/alerta.php?msj=Bienvenido&c=home&p=home&t=success');
      }else{
        header('location:../extend/alerta.php?msj=Acceso denegado&c=salir&p=salir&t=error');


      }

    }else{
      header('location:../extend/alerta.php?msj=Nombre de usuario o contraseña incorrectos&c=salir&p=salir&t=error');
    }

}

}else{
  header('location:../extend/alerta.php?msj=NO_FUNCIONA&c=salir&p=salir&t=error');

}

 ?>
