<?php

    require_once('conexion.php');

    class serviciosHabitacionModel{
        Public static function mdlMostrarServiciosHabitacion($tabla,$id_categoria){
            $conexion = Conexion::conectar();
            $sql ="SELECT * FROM $tabla WHERE id_categoria = :id_categoria";
            $sentencia = $conexion->prepare($sql);
            $sentencia->bindValue(':id_categoria',$id_categoria);
            $sentencia->execute();
            $servicios = $sentencia->fetchAll();
            return $servicios;
        }
    }