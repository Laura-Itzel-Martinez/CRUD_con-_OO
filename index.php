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
    <link rel="stylesheet" href="public/librerias/bostrap4/bootstrap.min.css">
    <title>Crud POO</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <form action="procesos/insertar.php" method="post">
                    <label for="">Nombre de dispositivo: </label>
                    <input type="text" name="txtnombre" class="form-control"  required>
                    <p></p>
                    <label for="">Modelo: </label>
                    <input type="text" name="txtmodelo" class="form-control"  required>
                    <p></p>
                    <label for="">Marca: </label>
                    <input type="text" name="txtmarca" class="form-control"  required>
                    <p></p>
                    <label for="">Color: </label>
                    <input type="text" name="txtcolor" class="form-control"  required>
                    <p></p>
                    <label for="">Capacidad: </label>
                    <input type="text" name="txtcapacidad" class="form-control"  required> 
                    <p></p>
                    <label for="">Descripcion</label>
                    <textarea name="textdescripcion" rows="4" cols="50" class="form-control"  required></textarea>
                    <p></p>
                    <button class="btn btn-outline-primary btn-block">Agregar</button>
                    <hr>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
        <table class="table table-striped table-hover text-center" border="2"  style="text-align: center">
        <tr>
            <td>Nombre de dispositivo</td>
            <td>Modelo</td>
            <td>Marca</td>
            <td>Color</td>
            <td>Capacidad</td>
            <td>Descripcion</td>
            <td>Fecha</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
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
                    <td><a href="editar.php?idComputo=<?php echo $key['idComputo']?>"><button class="btn btn-warning">Editar</button></a></td>
                    <td><a href="procesos/eliminar.php?idComputo=<?php echo $key['idComputo']?>"><button class="btn btn-danger">Eliminar</button></a></td>
                    
                </tr>
        <?php
            }
        ?>
    </table>
        </div>
    </div>


    <script src="public/librerias/jquery-3.6.0.min.js"></script>
    <script src="public/librerias/bostrap4/popper.min.js"></script>
    <script src="public/librerias/bostrap4/bootstrap.min.js"></script>

 

</body>
</html>
