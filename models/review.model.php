<?php

    class mdlReview{

        Public static function mdlReviewHabitacion($habitacion, $tabla, $inicio, $porpag){
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM $tabla WHERE habitacion = :habitacion LIMIT $inicio, $porpag";

            $sentencia = $conexion->prepare($sql);
            $sentencia->bindParam(':habitacion',$habitacion);
            $sentencia->execute();
            $res = $sentencia->fetchall();
            return $res;
        }
    }