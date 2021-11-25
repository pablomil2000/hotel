<?php

    require_once('conexion.php');

    class serviciosHotelModel{
        Public static function mdlMostrarServiciosHotel($tabla){
            $conexion = Conexion::conectar();
            $sql ="SELECT * FROM $tabla";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $servicios = $sentencia->fetchall();
            return $servicios;
        }
    }