<?php
include '../conexion/conexion.php';
include '../extend/scripts.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel "stylesheet" href= "/ProyectoPolizas/css/sweetalert2.css">

    <title>Proyecto</title>
</head>
<body>
 <?php
 $mensaje = htmlentities($_GET['msj']);
 $c = htmlentities($_GET['c']);
 $p = htmlentities($_GET['p']);
 $t = htmlentities($_GET['t']);
switch($c){
    case 'us':
    $carpeta = '../usuarios';
    break;

}

switch($p){
    case 'in':
    $pagina = '../index.php';
    break;
}
$dir = $carpeta.$pagina;

if($t == "error"){
    $titulo = "Oppss..";

}else{
    $titulo = "Buen trabajo!";

}

 ?>


<script>

Swal.fire({
  title: '<?php echo $titulo ?>',
  text: "<?php echo $mensaje ?>",
  type: '<?php echo $t ?>',
  confirmButtonColor: '#3085d6',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  location.href='<?php echo $dir ?>';
});

$(document).click(function){
    location.href='<?php echo $dir ?>';
}

$(document).keyup(function(e)){
    if (e.which == 27){
    location.href='<?php echo $dir ?>';
}
    }
}


</script>


</body>
</html>
