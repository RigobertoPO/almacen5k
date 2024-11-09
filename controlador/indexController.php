<?php
require_once('modelo/indexModel.php');
class IndexController{
    private $indexModel;
    function __construct(){
        $this->indexModel = new IndexModel();
    }
    public static function index(){
        require_once("vista/index.php");
    }
    public static function contacto(){
        require_once("vista/contacto.php");
    }
    public static function registrar(){
        require_once("vista/registrar.php");
    }
    public static function crearcuenta(){
        echo 'hola';
    }
}
?>