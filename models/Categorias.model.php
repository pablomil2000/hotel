<?php

    require_once('conexion.php');

    class CategoriasModel{
        Public static function mdlMostrarCategorias($tabla, $inicio, $porpag){
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM $tabla LIMIT $inicio, $porpag";
            $sentencia = $conexion->prepare($sql);
            $sentencia ->execute();
            $categorias = $sentencia->fetchAll();
            return $categorias;
        }

        Public static function mdlUrlCategorias($tabla){
            $sentencia = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $sentencia ->execute();
            $categorias = $sentencia->fetchAll();
            return $categorias;
        }

    }