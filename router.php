<?php
include_once 'app/controllers/producto.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home';
if(!empty ($_GET['action'])){
    $action = $_GET['action'];
}

$params=explode('/',$action);

switch($params[0]){
    case 'home':
        $controller = new ProductoController();
        $controller->showProductos();
        $controller->showComentarios();

    break;
    case 'insertarComentario':
        $controller = new ProductoController();
        $controller -> addComentario();
        break;
    case 'vermas':
        $controller = new ProductoController();
        $controller -> showBy($params[1]);
        break;

    default:

        echo"404 Pagina no encontrada";
    break;
};