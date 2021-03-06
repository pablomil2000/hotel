<?php

    require_once('conexion.php');

    class HabitacionModel{
        Public static function mdlMostrarHabitacion($tabla, $inicio, $porpag){
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM $tabla LIMIT $inicio, $porpag";
            $sentencia = $conexion->prepare($sql);
            $sentencia ->execute();
            $categorias = $sentencia->fetchAll();
            return $categorias;
        }

        Public static function mdlUrlHabitacion($tabla){
            $sentencia = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $sentencia ->execute();
            $categorias = $sentencia->fetchAll();
            return $categorias;
        }

        Public static function mdlHabitacionId($tabla, $campo, $id){
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM $tabla WHERE $campo LIKE $id";

            $resultado = $conexion->query($sql);
            $respuesta = $resultado->fetch();

            return $respuesta;
        }

    }