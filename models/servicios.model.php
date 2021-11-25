<?php

    require_once('conexion.php');

    class serviciosModel{
        Public static function mdlMostrarServicios($tabla,$id_servicio){
            $conexion = Conexion::conectar();
            $sql ="SELECT * FROM $tabla WHERE id_servicio = :id_servicio";
            $sentencia = $conexion->prepare($sql);
            $sentencia->bindValue(':id_servicio',$id_servicio);
            $sentencia->execute();
            $servicios = $sentencia->fetch();
            return $servicios;
        }
    }