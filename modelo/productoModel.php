<?php
class ProductoModel{
    private $listaProductos;
    public function __construct(){
        $this->listaProductos=array();
    }
    public function mostrarProductos(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="select * from Productos;";
        $resultado=$cnn->prepare($consula);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaProductos[]=$filas;
        }
        return $this->listaProductos;
    }
    public function guardarProducto($nombre, $precio, $existencia, $idUsuario){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="INSERT INTO Productos (nombre, precio, existencia, idUsuario)
        VALUES ('$nombre', '$precio', '$existencia', '$idUsuario');";
        $resultado=$cnn->prepare($consula);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function obtenerProductoId($id){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consula="select * from Productos WHERE Id=".$id.";";
        $resultado=$cnn->prepare($consula);
        $resultado->execute(); 
        while($filas = $resultado->FETCHALL(PDO::FETCH_ASSOC)) {
                $this->listaProductos[]=$filas;
        }
        return $this->listaProductos;
    }
}
?>