<?php
include_once 'app/models/producto.model.php';
include_once 'app/models/comentario.model.php';
include_once 'app/views/producto.view.php';
class ProductoController{
    private $model;
    private $comentarioModel;
    private $view;
    function __construct(){
        $this->model=new ProductoModel();
        $this->comentarioModel=new ComentarioModel();
        $this->view=new ProductoView();
    }
    function showProductos(){
        $productos = $this->model->get();
        if($productos===null){
            echo 'No se encontraron productos';
        }else{
            $this->view->show($productos);

        }
    }
    function showComentarios(){
        $comentarios = $this->comentarioModel->get();
        if($comentarios===null){ 
            echo 'No se encontraron productos';
        }else{
            $this->view->showComentarios($comentarios);
        }
    }
    function addComentario(){
        $comentario = $_POST['comentario']; 
        $puntuacion = $_POST['puntuacion']; 
        $id = $this->comentarioModel->insertarComentario($comentario,$puntuacion);
        if($id){
            header('Location: ' . BASE_URL);
        }else{
            echo"ERROR AL INSERTAR COMENTARIO";
        }
    }
    function showBy($id){
        $producto = $this->model->getBy($id);
        if($producto===null){
            echo 'El producto ya no está disponible.';
        }else{
            $this->view->showBy($producto);

        }
    }


}