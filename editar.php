<?php

    require_once "conexion.php";
    $obj= new conectar();
    $conexion=$obj->conexion();
    $idComputo=$_GET['idComputo'];
    $sql="SELECT idComputo,
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
    <title>Document</title>
</head>
<body>

    <form action="procesos/actualizar.php" method="post">
        <input type="text" name="idComputo" hidden="" value="<?php echo $idComputo ?>">
        <label for="">Nombre de dispositivo</label>
        <p></p>
        <input type="text" name="txtnombre" value="<?php echo $ver[0]?>">
        <p></p>
        <label for="">Modelo</label>
        <p></p>
        <input type="text" name="txtmodelo" value="<?php echo $ver[1]?>">
        <p></p>
        <label for="">Marca</label>
        <p></p>
        <input type="text" name="txtmarca" value="<?php echo $ver[2]?>">
        <p></p>
        <label for="">Color</label>
        <p></p>
        <input type="text" name="txtcolor" value="<?php echo $ver[3]?>">
        <p></p>
        <label for="">Capacidad</label>
        <p></p>
        <input type="text" name="txtcapacidad" value="<?php echo $ver[4]?>">
        <p></p>
        <label for="">Descripcion</label>
        <p></p>
        <textarea name="textdescripcion" rows="4" cols="50" value="<?php echo $ver[5]?>">
            
        </textarea>
        <p></p>
        <label for="">Fecha</label>
        <p></p>
        <input type="date" name="date" id="" value="<?php echo $ver[6]?>">
        <p></p> 
        <button>Actualizar</button>
    </form>

</body>
</html>