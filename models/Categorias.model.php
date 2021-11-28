<?php

    require_once('conexion.php');

    class CategoriasModel{
        Public static function mdlMostrarCategorias($tabla, $inicio, $porpag){
            $sentencia = Conexion::conectar()->prepare("SELECT * FROM $tabla LIMIT $inicio, $porpag");
            $sentencia ->execute();
            $categorias = $sentencia->fetchAll();
            return $categorias;
        }
    }