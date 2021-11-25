<?php
    require_once('conexion.php');

    class CarruselModel{
        public static function mdlMostrarCarrusel($tabla){

            $sentencia = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $sentencia->execute();

            $imagenes = $sentencia->fetchAll();
            return $imagenes;
        }
    }