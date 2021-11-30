<?php

    class HabitacionController{
        Public function ctrMostrarHabitacion($inicio, $porpag){
            $tabla = "Habitacion";
            $respuesta  = HabitacionModel::mdlMostrarHabitacion($tabla, $inicio, $porpag);
            return $respuesta;
        }

        Public function ctrUrlHabitacion(){
            $tabla = "Habitacion";
            $respuesta  = HabitacionModel::mdlUrlHabitacion($tabla);
            return $respuesta;
        }
    }