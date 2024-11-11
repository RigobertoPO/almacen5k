<?php
require_once('modelo/productoModel.php');
class ProductosController{
    private $productoModel;
    public function __construct(){
        $this->productoModel = new ProductoModel();
    }
    public static function mostrarproductos(){
        $modelproducto = new ProductoModel();
        $datos=$modelproducto->mostrarProductos();  
        require_once('vista/productos/mostrarproductos.php');
    }
    public static function nuevo(){
        require_once('vista/productos/nuevo.php');
    }
    public static function guardar(){
        $nombre=$_REQUEST['nombre'];
        $precio=$_REQUEST['precio'];
        $existencia=$_REQUEST['existencia'];
        $idUsuario=1;
        $modelproducto = new ProductoModel();
        $modelproducto->guardarProducto($nombre, $precio, $existencia, $idUsuario);
        header("location:".urlsite."index.php?p=mostrarproductos");
    }
    public static function editar(){
        $id=$_REQUEST['id'];
        $modelproducto = new ProductoModel();
        $datos=$modelproducto->obtenerProductoId($id);
        require_once('vista/productos/editar.php');
    }
    public static function actualizar(){
        $id=$_REQUEST['id'];
        $nombre=$_REQUEST['nombre'];
        $precio=$_REQUEST['precio'];
        $existencia=$_REQUEST['existencia'];
        $modelproducto = new ProductoModel();
        $modelproducto->actualizarProducto($id,$nombre, $precio, $existencia, $idUsuario);
        header("location:".urlsite."index.php?p=mostrarproductos");
    }
    public static function eliminar(){
        $id=$_REQUEST['id'];
        $modelproducto = new ProductoModel();
        $modelproducto->eliminarProducto($id);
        header("location:".urlsite."index.php?p=mostrarproductos");
    }
}
?>