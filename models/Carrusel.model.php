<?php
    require_once('conexion.php');

    class CarruselModel{
        public static function mdlMostrarCarrusel($tabla){
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM $tabla";

            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();

            $resultados = $sentencia->fetchAll();
            return $resultados;
        }
    }