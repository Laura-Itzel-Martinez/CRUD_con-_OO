<?php

    require_once "conexion.php";
    $obj= new conectar();
    $conexion=$obj->conexion();
    $idComputo=$_GET['idComputo'];
    $sql="SELECT 
    nombreDispositivo,
    modelo,
    marca,
    color,
    capacidad,
    descripcion,
    fecha FROM t_computo where idComputo='$idComputo'";
    
    $result=mysqli_query($conexion,$sql);
    $ver=mysqli_fetch_row($result);

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/librerias/bostrap4/bootstrap.min.css">
    <title>Actualizar</title>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col mt-4">
            <form action="procesos/actualizar.php" method="post">
                <input type="text" name="idComputo" hidden="" value="<?php echo $idComputo?>">
                <label for="">Nombre de dispositivo: </label>
                <input type="text" name="txtnombre" class="form-control"  value="<?php echo $ver[0]?>">
                <p></p>
                <label for="">Modelo: </label>
                <input type="text" name="txtmodelo" class="form-control" value="<?php echo $ver[1]?>">
                <p></p>
                <label for="">Marca: </label>
                <input type="text" name="txtmarca" class="form-control" value="<?php echo $ver[2]?>">
                <p></p>
                <label for="">Color: </label>
                <input type="text" name="txtcolor" class="form-control" value="<?php echo $ver[3]?>">
                <p></p>
                <label for="">Capacidad: </label>
                <input type="text" name="txtcapacidad" class="form-control" value="<?php echo $ver[4]?>">
                <p></p>
                <label for="">Descripcion: </label>
                <textarea name="textdescripcion" class="form-control" rows="4" cols="50" >  
                <?php echo $ver[5]?> 
                </textarea>
                <p></p>
                <button class="btn btn-dark btn-block">Actualizar</button>
            </form>
            </div>
        </div>
    </div>

    <script src="public/librerias/jquery-3.6.0.min.js"></script>
    <script src="public/librerias/bostrap4/popper.min.js"></script>
    <script src="public/librerias/bostrap4/bootstrap.min.js"></script>

</body>
</html> 