<?php

    require_once "../conexion.php";
    require_once "../metodosCrud.php";

    $nombreDispositivos=$_POST['txtnombre'];
    $modelo=$_POST['txtmodelo'];
    $marca=$_POST['txtmarca'];
    $color=$_POST['txtcolor'];
    $capacidad=$_POST['txtcapacidad'];
    $descripcion=$_POST['textdescripcion'];
    $fecha=$_POST['date'];
    $idComputo=$_POST['idComputo'];


    $datos=array($nombreDispositivos,
    $modelo,
    $marca,
    $color,
    $capacidad,
    $descripcion,
    $fecha,
    $idComputo);

    $obj=new metodos();
    if ($obj->actualizarDatosComputo($datos)==1) {
        header("location:../index.php");
    } else {
        echo "fallo al agregar";
    }