<?php

    class serviciosHabitacionController{
        Public function ctrMostrarServiciosHabitacion($id_categoria){
            $tabla = "servicioshabitacion";
            $respuesta  = serviciosHabitacionModel::mdlMostrarServiciosHabitacion($tabla,$id_categoria);
            return $respuesta;
        }
    }