<?php
    require_once "conexion.php";
    require_once "metodosCrud.php";
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

    <form action="procesos/insertar.php" method="post">
        <label for="">Nombre de dispositivo</label>
        <p></p>
        <input type="text" name="txtnombre">
        <p></p>
        <label for="">Modelo</label>
        <p></p>
        <input type="text" name="txtmodelo">
        <p></p>
        <label for="">Marca</label>
        <p></p>
        <input type="text" name="txtmarca">
        <p></p>
        <label for="">Color</label>
        <p></p>
        <input type="text" name="txtcolor">
        <p></p>
        <label for="">Capacidad</label>
        <p></p>
        <input type="text" name="txtcapacidad">
        <p></p>
        <label for="">Descripcion</label>
        <p></p>
        <textarea name="textdescripcion" rows="4" cols="50"></textarea>
        <p></p>
        <label for="">Fecha</label>
        <p></p>
        <input type="date" name="date" id="">
        <p></p>
        <button>Agregar</button>
    </form>


    <br><br><br>
    <table style="border-collapse: collapse;" border="1";>
        <tr>
            <td>Nombre de dispositivo</td>
            <td>Modelo</td>
            <td>Marca</td>
            <td>Color</td>
            <td>Capacidad</td>
            <td>Descripcion</td>
            <td>Fecha</td>
            <td>Actualizar</td>
        </tr>

        <?php
            $obj= new metodos();
            $sql="SELECT idComputo,
            nombreDispositivo,
            modelo,
            marca,
            color,
            capacidad,
            descripcion,
            fecha FROM t_computo";

            $datos=$obj->mostrarDatos($sql);

            foreach ($datos as $key){
        ?>

                <tr>
                    <td><?php echo $key ['nombreDispositivo'];?></td>
                    <td><?php echo $key ['modelo'];?></td>
                    <td><?php echo $key ['marca'];?></td>
                    <td><?php echo $key ['color'];?></td>
                    <td><?php echo $key ['capacidad'];?></td>
                    <td><?php echo $key ['descripcion'];?></td>
                    <td><?php echo $key ['fecha'];?></td>

                    <td><a href="editar.php?idComputo=<?php echo $key['idComputo']?>">
                    Editar
                    </a></td>
                    
                </tr>
        <?php
            }
        ?>
    </table>

</body>
</html>