<?php
class ProductoModel{
    function conectar(){
        $db = new PDO('mysql:host=localhost;'.'dbname=superlimp_db;charset=utf8' , 'root', '');
        return $db;
    }

    function get(){
        $db=$this->conectar();
        $consulta=$db->prepare('SELECT * FROM productos');
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }

    function getBy($id){
        $db=$this->conectar();
        $consulta=$db->prepare('SELECT * FROM productos WHERE id = ?');
        $consulta->execute([$id]);
        return $consulta->fetch(PDO::FETCH_OBJ);
    }
}