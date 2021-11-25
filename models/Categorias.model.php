<?php

    require_once('conexion.php');

    class CategoriasModel{
        Public static function mdlMostrarCategorias($tabla){
            $sentencia = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $sentencia ->execute();
            $categorias = $sentencia->fetchAll();
            return $categorias;
        }
    }