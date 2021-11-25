<?php

    class serviciosHotelController{
        Public function ctrMostrarServiciosHotel(){
            $tabla = "serviciosHotel";
            $respuesta  = serviciosHotelModel::mdlMostrarServiciosHotel($tabla);
            return $respuesta;
        }
    }