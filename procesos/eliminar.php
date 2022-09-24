<?php


    $idComputo=$_GET['idComputo'];

    require_once "../conexion.php";
    require_once "../metodosCrud.php";


    $obj=new metodos();
    if ($obj->eliminarDatosComputo($idComputo)==1) {
        header("location:../index.php");
    } else {
        echo "fallo al agregar";
    }