<?php
    class ComentarioModel{
        function conectar(){
            $db = new PDO('mysql:host=localhost;'.'dbname=superlimp_db;charset=utf8' , 'root', '');
            return $db;
        }
        function get(){
            $db=$this->conectar();
            $consulta=$db->prepare('SELECT * FROM comentarios');
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        }

        function insertarComentario($comentario,$puntuacion){
            $db=$this->conectar();
            $consulta=$db->prepare('INSERT INTO comentarios(comentario,puntuacion) VALUES (?,?)');
            $consulta->execute([$comentario,$puntuacion]);
            return $db -> lastInsertId();
        }
    }