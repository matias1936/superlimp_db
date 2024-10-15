<?php
include_once 'app/models/producto.model.php';
include_once 'app/views/producto.view.php';
class ProductoController{
    private $model;
    private $view;
    function __construct(){
        $this->model=new ProductoModel();
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
    function showBy($id){
        $producto = $this->model->getBy($id);
        if($producto===null){
            echo 'El producto ya no está disponible.';
        }else{
            $this->view->showBy($producto);

        }
    }


}