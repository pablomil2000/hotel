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

        Public function ctrHabitacionId($id){

            $tabla = "Habitacion";
            $campo = "Id_Categoria";
            $respuesta = HabitacionModel::mdlHabitacionId($tabla, $campo, $id);
            return $respuesta;
        }
    }