<?php

    class metodos{
        public function mostrarDatos($sql){
            $c= new conectar();
            $conexion=$c->conexion();
            $result=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        public function insertarDatosComputo($datos){
            $c=new conectar();
            $conexion=$c->conexion();

            $sql="INSERT into t_computo (
            nombreDispositivo,
            modelo,
            marca,
            color,
            capacidad,
            descripcion
            ) 
            values ('$datos[0]','$datos[1]','$datos[2]'
            ,'$datos[3]','$datos[4]','$datos[5]')";

            return $result=mysqli_query($conexion,$sql);
        }
        public function actualizarDatosComputo($datos){
            $c=new conectar();
            $conexion=$c->conexion();

            $sql="UPDATE t_computo set
            nombreDispositivo='$datos[0]',
            modelo='$datos[1]',
            marca='$datos[2]',
            color='$datos[3]',
            capacidad='$datos[4]',
            descripcion='$datos[5]'
            
            where idComputo='$datos[6]'";
            return $result=mysqli_query($conexion,$sql);
        }
        public function eliminarDatosComputo($idComputo){
            $c=new conectar();
            $conexion=$c->conexion();

            $sql="DELETE from t_computo where idComputo='$idComputo'";
            return $result=mysqli_query($conexion,$sql);

        }
        
    }