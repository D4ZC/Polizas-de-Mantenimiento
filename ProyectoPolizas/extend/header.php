<?php
    include '../conexion/conexion.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <!--Alertas-Fuentes-Iconos-->
        <link rel="stylesheet" href="/ProyectoPolizas/css/materialize.min.css">
        <link href="/ProyectoPolizas/css/icons.css" rel="stylesheet">
        <link rel "stylesheet" href= "/ProyectoPolizas/css/sweetalert2.min.css">


        <style media="screen">
        header, main, footer {
        padding-left: 300px;
    }
    .button-collpase{
        display-left: none;
    }

    @media only screen and (max-width : 992px) {
        header, main, footer {
          padding-left: 0;
        }
        .button-collpase{
            display: inherit;
        }
    }
        </style>
         <!--END Alertas-Fuentes-Iconos-->
        <title>Titulo</title>
    </head>
    <body>
        <main>

          <?php include 'menu_admin.php'; ?>
          <?php //include '../extend/scripts.php'; ?>
