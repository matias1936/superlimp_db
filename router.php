<?php
include_once 'app/controllers/producto.controller.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'listar';
if(!empty ($_GET['action'])){
    $action = $_GET['action'];
}

$params=explode('/',$action);

switch($params[0]){
    case 'listar':
        $controller = new ProductoController();
        $controller->showProductos();
    break;

    case 'vermas':
        $controller = new ProductoController();
        $controller -> showBy($params[1]);
        break;
    break;

    default:
        header("HTTP/1.0 404 Not Found");
        echo"404 Pagina no encontrada";
    break;
};